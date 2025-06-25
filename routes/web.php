<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Frontend\FrontendMainController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){

    return view('about');
});

// Route::get('/contact', function(){
//     return view('contact');
// });
Route::get('/history',function(){
    return view('history');
});
Route::get('/world',function(){
    return view('world');
});

Route::get('admin',[MainController::class,'index'])
->middleware('auth')->name('admin');

Route::get('admin/user',[UserController::class,'index'])
->name('admin.user.index')->middleware('auth');

Route::get('admin/user/edit/{id}',[UserController::class,'edit'])
->name('admin.user.edit')->middleware('auth');

Route::get('admin/user/show/{id}',[UserController::class,'show'])
->name('admin.user.show')->middleware('auth');

Route::post('admin/user/update/{id}',[UserController::class,'update'])
->name('admin.user.update')->middleware('auth');

Route::get('admin/user/delete/{id}',[UserController::class,'delete'])
->name('admin.user.delete')->middleware('auth');
///////////////////////////////////////////////////
Route::get('login',[LoginController::class,'showLoginForm'])
->middleware('guest')->name('showLoginForm');

Route::post('login',[LoginController::class,'login'])
->middleware('guest')->name('login');

Route::get('logout',[LoginController::class,'logout'])
->middleware('auth')->name('logout');
///////////////////////////////////////////////////
Route::get('register',[RegisterController::class,'showRegisterForm'])
->name('showRegisterForm')->middleware('guest');

Route::post('register',[RegisterController::class,'register'])
->name('registerUser')->middleware('guest');
///////////////////////////////////////////////////
Route::get('admin/category',[CategoryController::class,'index'])
->name('admin.category.index')->middleware('auth');

Route::get('admin/category/create',[CategoryController::class,'create'])
->name('admin.category.create')->middleware('auth');

Route::post('admin/category/store',[CategoryController::class,'store'])
->name('admin.category.store')->middleware('auth');

Route::get('admin/category/edit/{id}',[CategoryController::class,'edit'])
->name('admin.category.edit')->middleware('auth');

Route::post('admin/category/update/{id}',[CategoryController::class,'update'])
->name('admin.category.update')->middleware('auth');

Route::get('admin/category/{id}/show',[CategoryController::class,'show'])
->name('admin.category.show')->middleware('auth');

Route::get('admin/category/delete/{id}',[CategoryController::class,'delete'])
->name('admin.category.delete')->middleware('auth');
///////////////////////////////////////////////////

Route::get('admin/article',[ArticleController::class,'index'])
->name('admin.article.index')->middleware('auth');

Route::get('admin/article/create',[ArticleController::class,'create'])
->name('admin.article.create')->middleware('auth');

Route::post('admin/article/store',[ArticleController::class,'store'])
->name('admin.article.store')->middleware('auth');

Route::post('admin/article/update/{id}', [ArticleController::class,'update'])
->middleware('auth')->name('admin.article.update');

Route::get('admin/article/edit/{id}',[ArticleController::class,'edit'])
->name('admin.article.edit')->middleware('auth');

Route::get('admin/article/show/{id}',[ArticleController::class,'show'])
->name('admin.article.show')->middleware('auth');

Route::get('admin/article/delete/{id}',[ArticleController::class,'delete'])
->middleware('auth')->name('admin.article.delete');

////////////////////////////////////////////////////
Route::get('admin/contacts/index',[ContactController::class,'index'])
->name('admin.contacts.index')->middleware('auth');

Route::get('admin/contacts/edit/{id}',[ContactController::class,'edit'])
->name('admin.contacts.edit')->middleware('auth');

Route::post('admin/contacts/update/{id}',[ContactController::class,'update'])
->name('admin.contacts.update')->middleware('auth');

Route::get('admin/contacts/show/{id}',[ContactController::class,'show'])
->name('admin.contacts.show')->middleware('auth');

Route::get('admin/contacts/delete/{id}',[ContactController:: class, 'delete'])
->name('admin.contacts.delete')->middleware('auth');

Route::get('admin/contacts/create',[ContactController::class,'create'])
->name('admin.contacts.create')->middleware('auth');

Route::post('admin/contacts',[ContactController::class,'store'])
->name('admin.contacts.store')->middleware('auth');

////////////////////////////////////////////////
Route::get('admin/about',[AboutController::class, 'index'])
->name('admin.about.index')->middleware('auth');

Route::get('admin/about/create',[AboutController::class, 'create'])
->name('admin.about.create')->middleware('auth');

Route::post('admin/about/store',[AboutController::class, 'store'])
->name('admin.about.store')->middleware('auth');

Route::get('admin/about/edit/{id}',[AboutController::class, 'edit'])
->name('admin.about.edit')->middleware('auth');

Route::post('admin/about/update/{id}',[AboutController::class, 'update'])
->name('admin.about.update')->middleware('auth');

Route::get('admin/about/show/{id}',[AboutController::class, 'show'])
->name('admin.about.show')->middleware('auth');

Route::get('admin/about/delete/{id}',[AboutController::class, 'delete'])
->name('admin.about.delete')->middleware('auth');

Route::post('admin/upload-photo',[UploadController::class, 'upload'])
->name('admin.upload_photo')->middleware('auth');

////////////////////////////////////////////////////////////////////////
Route::get('admin/posts',[PostController::class, 'index'])
->name('admin.posts.index')->middleware('auth');

Route::get('admin/posts/create',[PostController::class, 'create'])
->name('admin.posts.create')->middleware('auth');

Route::post('admin/posts/store',[PostController::class, 'store'])
->name('admin.posts.store')->middleware('auth');

Route::get('admin/posts/edit/{id}',[PostController::class, 'edit'])
->name('admin.posts.edit')->middleware('auth');

Route::post('admin/posts/update/{id}',[PostController::class, 'update'])
->name('admin.posts.update')->middleware('auth');

Route::get('admin/posts/show/{id}',[PostController::class, 'show'])
->name('admin.posts.show')->middleware('auth');

Route::get('admin/posts/delete/{id}',[PostController::class, 'delete'])
->name('admin.posts.delete')->middleware('auth');

////////////////////////////////////////////////////////////////////////
Route::get('/news',[FrontendMainController::class, 'index'])
->name('frontend.index');

Route::get('frontend/show/{id}',[FrontendMainController::class, 'show'])
->name('frontend.show');

Route::get('/cotact',[FrontendMainController::class, 'index1'])
->name('frontend.contacts.index');

Route::get('frontend/contacts/show/{id}',[FrontendMainController::class, 'show1'])
->name('frontend.contacts.show');

Route::get('frontend/about',[FrontendMainController::class, 'index2'])
->name('frontend.about.index');

Route::get('frontend/about/show',[FrontendMainController::class, 'show2'])
->name('frontend.about.show');
