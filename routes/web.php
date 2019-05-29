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

Route::get('/', function() {
    return view('home');
});

Route::get('apie', function() {
    return view('about');
});
Route::get('kontaktai', function() {
    return view('contact');
});

Route::get('aiksteles/{city_id?}', function($city_id = null) {
    return view('search');
});

Route::get('aikstele/{title}', function($title) {
    return view('court');
});

Route::middleware(['auth'])->group(function() { // Sugrupuojam kelis rout'us ir jiems taikom middleware(['auth']). Sugrupuojam, kad nereikėtų kiekvienam rout'uj taikytis atskirai.
    
    Route::get('admin/aiksteles', function() {
        return view('admin.courts');
    });
    
    Route::get('admin/miestai', function() {
        return view('admin.cities');
    });
    
    Route::get('admin/aiksteliu_tipai', function() {
        return view('admin.courts_types');
    });

});

Route::get('puslapis/{title?}', function($title = null) {
  return view('page', ['title' => $title]); // 'title'- perduoda duomenis į failą page.blade.php. Faile page.blade.php 'title' duomenis galime pasiimti per kintamąjį $title
})->middleware('even');

Route::get('json', function() {
  return Response::json(
    ['category' => 'cars', 'item' => 'toyota-prius']);
});

Route::get('download/{file}', function($file) {
  return Response::download($file);
});

Route::get('redirect', array('as' => 'redirectpage', function() { // 'as' => 'redirectpage' - priskiria rout'uj pavadinimą. 'redirectpage' - rout'o pavadinimas
    return view('redirected');
}));

Route::get('try', function() {
  return redirect('redirect')->with('message', 'You was redirected!'); // 'redirect' - nurodo kas atsiras URL'e
});

Route::get('tryagain', function() {
    return redirect()->route('redirectpage'); // 'redirectpage' - routo į kurį redirect'inam pavadinimas
});


