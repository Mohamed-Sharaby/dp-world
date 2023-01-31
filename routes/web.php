<?php

use App\Exports\UsersExport14;
use App\Exports\UsersExport17;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/export/14', function () {
    return Excel::download(new UsersExport14, 'JAFZA-14.xlsx');
});

Route::get('/export/17', function () {
    return Excel::download(new UsersExport17, 'JAFZA-17.xlsx');
});
