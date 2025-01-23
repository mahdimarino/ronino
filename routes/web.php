<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\GsmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PartwearsController;
use App\Http\Controllers\ProductController;

/* Route::get('/', function () {
    return view('layaout/app');
}); */

 Route::get('/home', function () {
    return view('home');
});
Route::get('blog/list', function () {
    return view('blog.list');
}); 

// Route::get('/blogs/create', function () {
//     return view('bolgs.create');
// });


Route::get('/', [LoginController::class, 'loginForm'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/dashboard/blogs', [BlogController::class, 'store'])->name('insertData')->middleware('auth');
Route::get('/dashboard/blogs/create', [BlogController::class, 'createBlogForm'])->name('dashboard.blogs.blog-form')->middleware('auth');
Route::get('/dashboard/blogs/latest', [BlogController::class, 'showLatestBlog'])->name('dashboard.blogs.latest')->middleware('auth');
Route::get('/dashboard/blogs/list', [BlogController::class, 'listBlogs'])->name('dashboard.blogs.list')->middleware('auth');
Route::get('/dashboard/blogs/{blogId}/edit', [BlogController::class, 'editBlog'])->name('dashboard.blogs.edit');
Route::put('dashboard/blogs/{blog}', [BlogController::class, 'updateBlog'])->name('dashboard.blogs.update')->middleware('auth');
Route::put('dashboard/blogs/{id}', [BlogController::class, 'update'])->name('dashboard.blogs.update')->middleware('auth');
Route::delete('dashboard/blogs/{id}', [BlogController::class, 'deleteBlog'])->name('delete-blog')->middleware('auth');

// colors  /////////////
Route::get('/dashboard/colors/create', [ColorController::class, 'create'])->name('dashboard.colors.create')->middleware('auth');
Route::post('/dashboard/colors', [ColorController::class, 'store'])->name('store')->middleware('auth');
// products ///////////
Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create')->middleware('auth');
//partwears   //////////
Route::get('/dashboard/partwears/create', [PartwearsController::class, 'create'])->name('dashboard.partwears.create')->middleware('auth');
Route::post('/dashboard/partwears', [PartwearsController::class, 'store'])->name('store')->middleware('auth');
//Categories ///////////
Route::get('/dashboard/categories/create', [CategoriesController::class, 'create'])->name('dashboard.categories.create')->middleware('auth');
Route::post('/dashboard/categories', [CategoriesController::class, 'store'])->name('store')->middleware('auth');

////Gsms /////////////
Route::get('/dashboard/gsms/create', [GsmController::class, 'create'])->name('dashboard.gsms.create')->middleware('auth');
Route::post('/dashboard/gsms', [GsmController::class, 'store'])->name('store')->middleware('auth');




