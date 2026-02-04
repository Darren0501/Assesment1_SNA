<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $db_status = false;
    $profile = null;
    $error_msg = "";

    try {
        if(DB::connection()->getPdo()) {
            $db_status = true;
            $profile = DB::table('users')->first();
        }
    } catch (\Exception $e) {
        $db_status = false;
        $error_msg = $e->getMessage();
    }

    return view('welcome', [
        'is_connected' => $db_status,
        'profile' => $profile,
        'error_msg' => $error_msg
    ]);
});