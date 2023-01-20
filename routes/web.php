<?php



//CONTROLLER ADMIN
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\DishCategoryController;
use App\Http\Controllers\Admin\DisheController;

//CONTROLLER GUEST
use App\Http\Controllers\ActivityController as GuestActivityController;
use App\Http\Controllers\CategoryController as GuestCategoryController;
use App\Http\Controllers\DishCategoryController as GuestDishCategoryController;
use App\Http\Controllers\DisheController as GuestDisheController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')
->group(function(){
    Route::resource('activities',ActivityController::class)->parameters(['activities' => 'activity:slug']);
     Route::resource('categories',CategoryController::class)->parameters(['categories' => 'category:slug']);
     Route::resource('dishes',DisheController::class);
    Route::resource('dishCategory',DishCategoryController::class);
    Route::resource('reviews',ReviewController::class);

    Route::resource('reservations',ReservationController::class);


    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/guest', [GuestController::class, 'index'])->name('guest');


});

require __DIR__ . '/auth.php';
