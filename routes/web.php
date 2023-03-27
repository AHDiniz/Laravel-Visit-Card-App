<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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
    return view('welcome', [
        'status' => null,
        'slug' => null
    ]);
});

Route::get('/{name}', function(string $name) {
    return view('card', [
        'card' => CardController::find($name)
    ]);
});

Route::post('/', function(Request $request) {

    $slug = "";
    foreach (explode(" ", $request->name) as $n)
        $slug .= strtolower($n);
    
    if (CardController::find($slug) != null)
        return CardController::edit($request);

    return CardController::store($request);
});
