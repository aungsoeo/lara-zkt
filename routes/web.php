<?php

use Illuminate\Support\Facades\Route;
use Rats\Zkteco\Lib\ZKTeco;
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


Route::get('/zkt', function () {
    $zk = new ZKTeco('169.254.56.191');
    // $zk = new ZKTeco('192.168.10.201');

    $zk->connect();
    // $attendances =  $zk->getAttendance();
    $user =  $zk->getUser(); 
    // $devic=     $zk->deviceName();
    // return $devic;
    dd($user);
});
