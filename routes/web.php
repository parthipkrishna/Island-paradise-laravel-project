<?php

use App\Http\Controllers\dashboard\admin\AuthController;
use App\Http\Controllers\dashboard\admin\IndexController;
use App\Http\Controllers\dashboard\admin\UserController;
use App\Http\Controllers\dashboard\admin\AdminHomeController;
use App\Http\Controllers\dashboard\admin\AdminGalleryController;
use App\Http\Controllers\dashboard\admin\AdminPackageController;
use App\Http\Controllers\dashboard\admin\AdminDestinationController;
use App\Http\Controllers\dashboard\admin\AdminBookingController;


use App\Http\Controllers\EmailController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ActivityController;
use App\Http\Controllers\Web\BookingController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\DestinationController;
use App\Http\Controllers\Web\GalleryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PackageController;
use Illuminate\Support\Facades\Route;

//Websites 
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/package',[PackageController::class,'index'])->name('packages');
Route::get('/package/details/{id}',[PackageController::class,'details'])->name('details');
Route::get('/destinations',[DestinationController::class,'index'])->name('destination');
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/activity',[ActivityController::class,'index'])->name('activities');
Route::post('/booking', [BookingController::class, 'storeFromWebsite'])->name('bookingweb.store');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');



//ADMIN-DASHBOARD
//dashboard-auth
Route::get('/admin', [AuthController::class, 'loginPage'])->name('/admin');
Route::post('/admin-login', [AuthController::class, 'Login'])->name('admin-login');
Route::get('/app-dashboard',[AuthController::class,'dashboard'])->middleware('isAdmin')->name('app-dashboard');
Route::post('admin-logout',[AuthController::class,'logout'])->name('admin-logout')->middleware('isAdmin');

//home
Route::get('/dashboard', [IndexController::class, 'home'])->name('/home');
Route::get('/admin-profile',[IndexController::class,'adminProfile'])->name('admin-profile')->middleware('isAdmin');
Route::post('/update-adminprofile/{id}', [IndexController::class, 'adminUpdate'])->name('adminprofile.update/{id}');

//users
Route::get('/add-users', [UserController::class, 'create'])->name('users.add')->middleware('isAdmin');
Route::get('/users', [UserController::class, 'index'])->name('users.show')->middleware('isAdmin');
Route::post('/add-users', [UserController::class, 'store'])->name('user.store')->middleware('isAdmin');
Route::post('/update-users/{id}', [UserController::class, 'update'])->name('user.update/{id}')->middleware('isAdmin');
Route::post('/delete-users/{id}', [UserController::class, 'destroy'])->name('user.delete/{id}')->middleware('isAdmin');

//website-management
Route::get('/admin-home', [AdminHomeController::class, 'index'])->name('admin-home')->middleware('isAdmin');

//gallery
Route::get('/admin-gallery', [AdminGalleryController::class, 'index'])->name('admin-gallery')->middleware('isAdmin');
Route::get('/add-gallery', [AdminGalleryController::class, 'create'])->name('gallery.add')->middleware('isAdmin');
Route::post('/add-gallery', [AdminGalleryController::class, 'store'])->name('gallery.store')->middleware('isAdmin');
Route::post('/update-gallery/{id}', [AdminGalleryController::class, 'update'])->name('gallery.update/{id}')->middleware('isAdmin');
Route::post('/delete-gallery/{id}', [AdminGalleryController::class, 'destroy'])->name('gallery.delete/{id}')->middleware('isAdmin');

//package
Route::get('/packages', [AdminPackageController::class, 'index'])->name('packages.admin')->middleware('isAdmin');
Route::get('/add-package', [AdminPackageController::class, 'create'])->name('package.add')->middleware('isAdmin');
Route::post('/add-package', [AdminPackageController::class, 'store'])->name('package.store')->middleware('isAdmin');
Route::post('/update-package/{id}', [AdminPackageController::class, 'update'])->name('package.update/{id}')->middleware('isAdmin');
Route::post('/delete-package/{id}', [AdminPackageController::class, 'destroy'])->name('package.delete/{id}')->middleware('isAdmin');
Route::get('/view-package/{id}', [AdminPackageController::class, 'show'])->name('package.view/{id}')->middleware('isAdmin');
Route::post('/package.detail.add/{id}', [AdminPackageController::class, 'storeDetail'])->name('package.detail.add/{id}')->middleware('isAdmin');
Route::post('/add-package-media/{id}', [AdminPackageController::class, 'storeMedia'])->name('packagemedia.store/{id}')->middleware('isAdmin');
Route::post('/delete-packagemedia/{id}', [AdminPackageController::class, 'destroyMedia'])->name('packagemedia.delete/{id}')->middleware('isAdmin');

//destination
Route::get('/destination', [AdminDestinationController::class, 'index'])->name('destination.admin')->middleware('isAdmin');
Route::get('/add-destination', [AdminDestinationController::class, 'create'])->name('destination.add')->middleware('isAdmin');
Route::post('/add-destination', [AdminDestinationController::class, 'store'])->name('destination.store')->middleware('isAdmin');
Route::post('/update-destination/{id}', [AdminDestinationController::class, 'update'])->name('destination.update/{id}')->middleware('isAdmin');
Route::post('/delete-destination/{id}', [AdminDestinationController::class, 'destroy'])->name('destination.delete/{id}')->middleware('isAdmin');

//booking
Route::get('/booking', [AdminBookingController::class, 'index'])->name('booking')->middleware('isAdmin');
Route::get('/add-booking', [AdminBookingController::class, 'create'])->name('booking.add')->middleware('isAdmin');
Route::post('/add-booking', [AdminBookingController::class, 'store'])->name('booking.store')->middleware('isAdmin');
Route::post('/update-booking/{id}', [AdminBookingController::class, 'update'])->name('booking.update/{id}')->middleware('isAdmin');
Route::post('/delete-booking/{id}', [AdminBookingController::class, 'destroy'])->name('booking.delete/{id}')->middleware('isAdmin');
Route::get('/view-booking/{id}', [AdminBookingController::class, 'show'])->name('booking.view/{id}')->middleware('isAdmin');
//export
Route::get('/export', [AdminBookingController::class, 'export'])->name('export');
