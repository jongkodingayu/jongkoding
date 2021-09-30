<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('coba-routing/{nama?}', function ($nama = "Nilai Deafult") {
    return "Ini adalah hasil percobaan routing. Kenalin, aku " . $nama;
});



Route::middleware(['auth'])->group(function () {
    //route ini menggunakan middleware auth
    Route::get('/users', [UserController::class, 'index'])->name('list-user');

    //route ini dan selanjutnya juga akan menggunakan middleware auth
    Route::get('/users/profile', function () {
    });
});

Route::prefix('user')->group(function () {
    //URI route akan otomatis diawali user/..
    Route::get('/', [UserController::class, 'index'])
        ->name('list-user'); // pemanggilan route name akan menjadi user.list-user


    Route::get('/profile', function () {
    });
});

Route::resource('group', GroupController::class)->names([
    'index' => 'group.list'
    //tentukan nama action kemudian beri nama setelah prefix group
])->parameters([
    'group' => 'group_type'
    //akan menghasilkan URI /group/{group_type}
]);

Route::get('/halo', function () {
    return view('halo', [
        "name" => "JongKoding",
        "array" => ['aku', 'ikut', 'jongkoding']
    ]);
});

// Route::get('/halo', function () {
//     return view('halo')->with("name", "Jong Koding with");
// });

Route::get('parent', function () {
    return view('parent', ["isExist" => false]);
});

Route::get('siswa', [SiswaController::class, 'index']);
