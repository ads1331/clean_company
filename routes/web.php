<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ServicesController;


Route::get('/about', [AboutController::class, 'index']) -> name('show.about');

Route::get('/blog', [BlogsController::class, 'index']) -> name('show.blog');
Route::get('/blog-single', [BlogsController::class, 'single']) -> name('show.blog-single');


Route::get('/contact', [ContactController::class, 'index']) -> name('show.contact');

Route::get('/', [IndexController::class, 'index']) -> name('show.index');

Route::get('/portfolio', [PortfolioController::class, 'index']) -> name('show.portfolio');

Route::get('/pricing', [PricingController::class, 'index']) -> name('show.pricing');

Route::get('/services', [ServicesController::class, 'index']) -> name('show.services');







