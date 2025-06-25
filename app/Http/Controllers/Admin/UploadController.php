<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
public function upload(Request $request) {
    $request->validate(['upload' => 'required|image|max:10240']);


    $file = $request->file('upload');

    $path = $file->storeAs(
        'gallery',
        time() . '.' . $file->getClientOriginalExtension(),
        ['disk' => 'public']
    );

    return response([
        'url' =>config('app.url') . '/storage/' . $path
    ]);
}
}
