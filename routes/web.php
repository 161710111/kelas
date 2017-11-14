<?php

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/about',function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});

Route::get('/about/2',function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});

Route::get('/about/3',function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});

Route::get('/about/4',function() {
	return '<h1>Hallo</h1>'
	.'selamat datang di webapp saya<br>'
	.'laravel, emang keren.';
});

Route::get('/about/5',function() {
	return '<h1>Hallo</h1>'
	.'selamat pagi<br>'
	.'selamat beraktivitas<br>'
	.'jangan lupa bahagia.';
});*/


Route::get('/kontak',function() {
	return view('kontak');
});

//router parameter
Route::get('/about/{id}',function($a){
	return 'ini halaman about saya<b>'.$a.'<br>';
});

// Route::get('/kantin/bakso/susu/bolu',function(){
// 	return view ('kantin');
// })

//router parameter
Route::get('/kantin/{firas}/{mau}/{lida}' ,function($a,$b,$c){
	return 'saya makan '.$a.'<br>'
		.'saya minum '.$b.'<br>'
		.'saya ngemil '.$c.'<br>';
});

//ROUTER OPTIONAL PARAMETER
Route::get('user/{name?}', function($name='jhon'){
	return 'Nama Saya ' .$name;
});