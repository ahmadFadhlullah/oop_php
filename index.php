<?php
require "init.php";

use App\Controllers\Route;
use App\Controllers\Hello;

$helo = new Hello();

Route::get('/tampil',$helo,'index');
Route::get('/buat', $helo, 'buat');

 ?>
