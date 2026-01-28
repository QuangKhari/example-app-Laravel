<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('product')->middleware('CheckTimeAccess')->group(function () {
    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'Laptop HP', 'price' => '15,000,000 VNĐ'],
            ['id' => 2, 'name' => 'Điện thoại Samsung', 'price' => '8,000,000 VNĐ'],
            ['id' => 3, 'name' => 'Tablet iPad', 'price' => '12,000,000 VNĐ'],
        ];
        return view('product_index', ['products' => $products]);
    })->name('product.index');

    Route::get('/add', function () {
        return view('product_add');
    })->name('product.add');

    Route::get('/{id}', function ($id = '123') {
        return view('product', ['id' => $id]);
    })->name('product.show');
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Đinh Quang Khải', $mssv = '0192866') {
    return view('sinhvien', ['name' => $name, 'mssv' => $mssv]);
})->name('sinhvien.info');

Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => $n]);
})->name('banco.display');
Route::resource('test', TestController::class);

Route::get('/signin', [AuthController::class, 'SignIn']);
Route::post('/checksignin', [AuthController::class, 'CheckSignIn']);

Route::fallback(function() {
    return view('error.404');
});