<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




Route::get('/', [HomeController::class,'index']);

Route::get('/add_doctor_view', [AdminController::class,'addview']);

Route::post('/upload_doctor', [AdminController::class,'upload']);

Route::get('/home', [HomeController::class,'redirect']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
    return view ('dashboard');
})->name('dashboard');


Route::post('/appointment', [HomeController::class,'appointment']);
Route::get('/myappointment', [HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);
Route::get('/showappointments', [AdminController::class,'showappointments']);

Route::get('/approved/{id}', [AdminController::class,'approved']);

Route::get('/canceled/{id}', [AdminController::class,'canceled']);

Route::get('/showdoctor', [AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);


Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']);


Route::get('/add_children_view',[AdminController::class,'addchild']);

Route::post('/upload_children',[AdminController::class,'uploadchild']);

Route::get('/showchildren',[AdminController::class,'showchildren']);

Route::get('/deletechild/{id}', [AdminController::class,'deletechild']);

Route::get('/updatechild/{id}', [AdminController::class,'updatechild']);

Route::post('/editchild/{id}', [AdminController::class,'editchild']);

Route::get('/showvacc',[AdminController::class,'showvacc']);

Route::get('/addvacc',[AdminController::class,'addvacc']);

Route::post('/upload_vacc',[AdminController::class,'uploadvacc']);

Route::get('/deletevacc/{id}', [AdminController::class,'deletevacc']);

Route::get('/updatevacc/{id}', [AdminController::class,'updatevacc']);

Route::post('/editvacc/{id}', [AdminController::class,'editvacc']);




Route::get('/mychildren', [HomeController::class,'mychildren'])->middleware(['auth']);


Route::get('/searchchild',[AdminController::class,'searchchild']);

Route::post('/showsearch',[AdminController::class,'showsearch']);

///lang

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');



Route::get('/profile', function () {
    return view('user.profile');
})->middleware(['auth']);

Route::get('/lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'ar'])) {
        abort(400);
    }
    Session::put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');

Route::get('/blog-details', function () {
    return view('user.blog-details');
});


Route::get('/blog', function () {
    return view('user.blog');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/index', function () {
    return view('user.index');
});


use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
