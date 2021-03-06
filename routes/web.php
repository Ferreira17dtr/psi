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

Route::get('/Bem-vindo', function () {
    echo('olá mundo');
});

Route::get('/', function () {
    echo ('<h1>Olá mundo </h1>');
});

Route::get('/bem-vindo', function () {
    echo('<h1> Esta é a página que lhe dará as boas vindas </h1>');
});

Route::get('/bem-vindo/aedah', function () {
    echo('<h1> Esta é só para o Agrupamento :) </h1>');
});

Route::get('/nome/{nome}',function ($nome) {
	echo ('<h1>Olá '. $nome .'</h1>');
});

Route::get('/nome/{nome}/{apelido}', function ($nome, $apelido) {
	echo ('<h1>Olá '.$nome.' '.$apelido.'</h1>');
});

Route::get('/repetir/{nome}/{num}', function ($nome, $n) {$numero = is_numeric ($n) ? $n : 5;
	for ($i=0; $i<$numero; $i++) {
		echo ('<h1>Olá '.$nome. '</h1>');
	};
	return;
});

Route::get('/welcome/',function(){
	return view('bemvindo');
});

Route::get ('nome/{nome}/{apelido}',
function($nome=null,$apelido=null){
	return view ('mostranome', [
		'nome'=>$nome,
		'apelido'=>$apelido
	]);
});

Route::get ('/tarefas',function(){
	$tarefas=[
		'Comprar senha',
		'Imprimir fotocópias',
		'Carregar cartão'
	];
	return view ('tarefas',[
		'tarefas'=>$tarefas
	]);
});
