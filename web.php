<?php
//use App\Http\Controllers\FrontendController;
//use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\FrontendController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*
Route::get('/', function(){
    echo "Home";
});



Route::get('/about', function(){
    echo "About US";
});
*/
//Route::get('/', [FrontendController::class, 'homepage'])->name('landing-page');
//Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about');
//Route::get('/portfolio', [FrontendController::class, 'portfolio'])->name('portfolio');
//Route::get('/service', [FrontendController::class, 'service'])->name('service');

//Route::get('/user', [UserController::class, 'getUser']);
//Route::get('/user/{name}', [UserController::class, 'getUser']);
//Route::get('/user/{id}', [UserController::class, 'getUser']);
//Route::get('/user/{name}', [FrontendController::class, 'getUser'])->name('user');
//Route::get('/students/{name}/{rolls?}', [FrontendController::class, 'getStudents'])->name('students');








Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/posts', [PostController::class, 'allPosts'])->name('posts');
Route::post('/store', [PostController::class, 'storePost'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editpost'])->name('edit');
Route::get('/delete/{id}', [PostController::class, 'deletepost'])->name('delete');


