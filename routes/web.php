<?php

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

/* Route::get('/', function () {
    return 'a';
});
 */

 Route::get('/', 'PrincipalController@Principal')->name('site.index');
 Route::get('/sobre-nos', 'SobreNosController@SobreNos')->name('site.sobrenos');
 Route::get('/contato', 'ContatoController@Contato')->name('site.contato');
 Route::get('/login', function() { return 'Login'; })->name('site.login');

 Route::prefix('/app')->group(function() {
    Route::get('/Clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/Fornecedores', function() { return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/Produtos', function() { return 'Produtos'; })->name('app.produtos');
 });

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

 Route::fallback(function(){
    echo 'Rota inexistente. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
 }); 

/*  Route::get(
    '/contato/{nome}/{categoria_id}' , //
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1
    ) {                                                         //teste de rota com parametro
        echo "Estamos aqui: $nome - $categoria_id";
    }
) ->where('categoria_id' , '[0-9]+') ->where('nome' , '[A-Z a-z]+'); */




