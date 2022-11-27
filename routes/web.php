<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\commentsController;

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

Route::get('/add', [commentsController::class, 'add_comment']);

Route::get('/delete', [commentsController::class, 'delete_comment_by_id']);

Route::get('/update', [commentsController::class, 'update_comment_by_id']);

Route::get('/get', [commentsController::class, 'get_comments']);

Route::get('/by_id', [commentsController::class, 'get_comment_by_id']);
