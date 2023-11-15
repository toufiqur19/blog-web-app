<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\CommentController;
use App\Livewire\AdPage;
use App\Livewire\AdService;
use App\Livewire\BlogDetails;
use App\Livewire\BlogPage;
use App\Livewire\ContractPage;
use App\Livewire\Login;
use App\Livewire\LoginRegister;
use App\Livewire\Register;
use App\Livewire\ShowAboutPage;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\TeamPage;
use Illuminate\Support\Facades\Artisan;
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


Route::get('/',ShowHome::class)->name('home');
Route::get('/add',AdPage::class)->name('adService');
Route::get('/services',ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}',ShowService::class)->name('servicesDetals');
Route::get('/about',ShowAboutPage::class)->name('aboutUs');
Route::get('/blog',BlogPage::class)->name('blogPage');
Route::get('/blog/{id}',BlogDetails::class)->name('blogDetailsPage');
Route::get('/team',TeamPage::class)->name('teamPage');
Route::get('/contract',ContractPage::class)->name('contractPage');

// login & registration
Route::get('/login',LoginRegister::class)->name('login');
Route::get('/registration',Register::class)->name('registration');

