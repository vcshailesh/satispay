<?php

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

Route::view('checkout','checkout');

Route::get('payment',function(){
    // Authenticate and generate the keys
    $authentication = \SatispayGBusiness\Api::authenticateWithToken("PYVC26");

    // Export keys
    $publicKey = $authentication->publicKey;
    $privateKey = $authentication->privateKey;
    $keyId = $authentication->keyId;

    \SatispayOnline\Api::setSecurityBearer('osh_...');
    \SatispayOnline\Api::setSandbox(true);

    dd($keyId,$publicKey,$privateKey,$authentication);
});
