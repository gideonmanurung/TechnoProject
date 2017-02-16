<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('layananMobil' , 'LayananMobilController');

Route::resource('layananMotor' , 'LayananMotorController');

Route::resource('pesananServiceMobil' , 'PesananServiceMobilController');

Route::resource('pesananServiceMotor' , 'PesananServiceMotorController');

Route::resource('pesananSparepartMobil' , 'PesananSparepartMobilController');

Route::resource('pesananSparepartMotor' , 'PesananSparepartMotorController');

Route::resource('pesananFuel' , 'PesananFuelController');

Route::resource('kategoriServiceMotor' , 'KategoriServiceMotorController');

Route::resource('pesananReserve' , 'PesananReserveController');

Route::resource('totalPesanan' , 'TotalPesananController');

Route::resource('daftarteknisi' , 'DaftarTeknisiController');

Route::resource('kebijakan', 'KebijakanController');

Route::resource('fuel', 'FuelController');

Route::resource('service', 'ServiceController');

Route::resource('profilteknisi', 'ProfilTeknisiController');

Route::resource('detail', 'DetailController');

Route::resource('pengirimansparepart', 'pengirimanSparepartController');
