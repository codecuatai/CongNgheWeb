<?php

use Illuminate\Support\Facades\Route;
// TODO 11: Import PageController của bạn ở đầu tệp:
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'showHomepage']);
Route::get('/about', [PageController::class, 'showHomepage']);
