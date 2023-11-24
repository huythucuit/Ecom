<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
use App\Http\Controllers\User\SubCategoryController as UserSubCategoryController;


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
   return view('welcome');
});

Route::get('/logout', function () {
   Auth::logout();
   return redirect('/login');
});

Route::controller(UserSubCategoryController::class)->group(function () {
   Route::get('/product-list/{slug}', 'getSubCategoryBySlug')->name('productlist');
});

Route::controller(UserProductController::class)->group(function () {
   Route::get('/product-detail', 'Index')->name('productdetail');
});

Route::get('/user-profile', [DashboardController::class, 'Index']);
Route::get('/product-detail', [ProductController::class, 'Index'])->name('productdetail');

Route::middleware(['auth', 'role:user'])->group(function () {
   Route::controller(\App\Http\Controllers\User\DashboardController::class)->group(function () {
      Route::get('/user/dashboard', 'Index')->name('userdashboard');
   });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
   Route::controller(DashboardController::class)->group(function () {
      Route::get('/admin/dashboard', 'DashboardAdmin')->name('admindashboard');
      Route::get('/admin/shop-dashboard', 'ProfileAdmin')->name('adminshopdashboard');
   });

   Route::controller(CategoryController::class)->group(function () {
      Route::get('/admin/all-category', 'Index')->name('allcategory');
      Route::get('/admin/add-category', 'AddCategory')->name('addcategory');
      Route::post('/admin/store-category', 'StoreCategory')->name('storecategory');
      Route::get('/admin/edit-category/{categoryID}', 'EditCategory')->name('editcategory');
      Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
      Route::get('/admin/delete-category/{categoryID}', 'DeleteCategory')->name('deletecategory');
   });

   Route::controller(SubCategoryController::class)->group(function () {
      Route::get('/admin/all-subcategory', 'Index')->name('allsubcategory');
      Route::get('/admin/add-subcategory', 'AddSubCategory')->name('addsubcategory');
      Route::post('/admin/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
      Route::get('/admin/edit-subcategory/{subCategoryID}', 'EditSubCategory')->name('editsubcategory');
      Route::post('/admin/update-subcategory', 'UpdateSubCategory')->name('updatesubcategory');
      Route::get('/admin/delete-subcategory/{subcategoryID}', 'DeleteSubCategory')->name('deletesubcategory');

   });

   Route::controller(ProductController::class)->group(function () {
      Route::get('/admin/all-product', 'Index')->name('allproducts');
      Route::get('/admin/add-product', 'AddProduct')->name('addproduct');
      Route::post('/admin/store-product', 'StoreProduct')->name('storeproduct');
   });

   Route::controller(OrderController::class)->group(function () {
      Route::get('/admin/pending-order', 'Index')->name('pendingorder');
   });
});


Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
