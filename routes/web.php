<?php
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        $status = 'connected';
    } catch (\Exception $e) {
        $status = 'error';
    }

    return view('welcome', compact('status'));
});