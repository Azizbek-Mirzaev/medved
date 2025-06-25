class UploadAdapter {
    xhr = null;
    loader = null;

    constructor(loader) {
        this.loader = loader;
    }

    upload() {
        return this.loader.file.then(file => new Promise((resolve, reject) => {
            this._initRequest();
            this._initListeners(resolve, reject, file);
            this._sendRequest(file);
        }));
    }

    abort() {
        if (this.xhr) {
            this.xhr.abort;
        }
    }

    _initRequest() {
        const xhr = this.xhr = new XMLHttpRequest();
        let token = document.querySelector('meta[name=csrf-token]').getAttribute('content');

        xhr.open('POST', `${window.location.origin}/admin/upload-photo`);
        xhr.responseType = 'json';
        xhr.setRequestHeader('X-CSRF-TOKEN', token);
    }

    _initListeners(resolve, reject, file) {
        const xhr = this.xhr;
        const loader = this.loader;
        const genericErrorText = 'Невозможно загрузить файл ' + file.name;

        xhr.addEventListener('error', () => reject(genericErrorText));
        xhr.addEventListener('abort', () => reject());
        xhr.addEventListener('load', () => {
            const response = xhr.response;

            if (!response || response.error) {
                return reject(response && response.error ? response.error.message : genericErrorText)
            }

            resolve({default: response.url});
        });

        if (xhr.upload) {
            xhr.upload.addEventListener('progress', e => {
                if (e.lengthComputable) {
                    loader.uploadTotal = e.total;
                    loader.uploaded = e.loaded;
                }
            });
        }
    }

    _sendRequest(file) {
        const data = new FormData();

        data.append('upload', file);

        this.xhr.send(data);
    }
}

function loadUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new UploadAdapter(loader);
    }
}
