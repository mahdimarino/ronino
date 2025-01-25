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
use App\Http\Controllers\SizeController;

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
Route::post('/dashboard/colors', [ColorController::class, 'store'])->name('color.store')->middleware('auth');
Route::get('/dashboard/colors/index', [ColorController::class, 'index'])->name('dashboard.colors.index')->middleware('auth');
Route::delete('dashboard/colors/{id}', [ColorController::class, 'destroy'])->name('color.destroy')->middleware('auth');



// products ///////////

Route::get('/dashboard/products/create', [ProductController::class, 'create'])->name('dashboard.products.create')->middleware('auth');
Route::post('/dashboard/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/dashboard/products/index', [ProductController::class, 'index'])->name('dashboard.products.index')->middleware('auth');
Route::delete('dashboard/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');
Route::get('/dashboard/products/{id}/edit', [ProductController::class, 'edit'])->name('dashboard.products.edit')->middleware('auth');
Route::put('/dashboard/products/{id}', [ProductController::class, 'update'])->name('dashboard.products.update')->middleware('auth');

//partwears   //////////

Route::get('/dashboard/partwears/create', [PartwearsController::class, 'create'])->name('dashboard.partwears.create')->middleware('auth');
Route::post('/dashboard/partwears', [PartwearsController::class, 'store'])->name('partwear.store')->middleware('auth');
Route::get('/dashboard/partwears/index', [PartwearsController::class, 'index'])->name('dashboard.partwears.index')->middleware('auth');
Route::delete('dashboard/partwears/{id}', [PartwearsController::class, 'destroy'])->name('partwear.destroy')->middleware('auth');

//Categories ///////////

Route::get('/dashboard/categories/create', [CategoriesController::class, 'create'])->name('dashboard.categories.create')->middleware('auth');
Route::post('/dashboard/categories', [CategoriesController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('/dashboard/categories/index', [CategoriesController::class, 'index'])->name('dashboard.categories.index')->middleware('auth');
Route::delete('dashboard/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy')->middleware('auth');
Route::get('dashboard/categories/{id}', [CategoriesController::class, 'show'])->name('categories.show');

////Gsms /////////////

Route::get('/dashboard/gsms/create', [GsmController::class, 'create'])->name('dashboard.gsms.create')->middleware('auth');
Route::post('/dashboard/gsms', [GsmController::class, 'store'])->name('gsm.store')->middleware('auth');
Route::get('/dashboard/gsms/index', [GsmController::class, 'index'])->name('dashboard.gsms.index')->middleware('auth');
Route::delete('dashboard/gsms/{id}', [GsmController::class, 'destroy'])->name('gsm.destroy')->middleware('auth');

///// sizes ///////////

Route::get('/dashboard/sizes/create', [SizeController::class, 'create'])->name('dashboard.sizes.create')->middleware('auth');
Route::post('/dashboard/sizes', [SizeController::class, 'store'])->name('size.store')->middleware('auth');
Route::get('/dashboard/sizes/index', [SizeController::class, 'index'])->name('dashboard.sizes.index')->middleware('auth');
Route::delete('dashboard/sizes/{id}', [SizeController::class, 'destroy'])->name('size.destroy')->middleware('auth');
