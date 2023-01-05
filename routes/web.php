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

//Route::get('/', function () {
//    return 'ola,seja bem vindo ';
//});

route::get('/', 'PrincipalController@principal')->name('site.index');

route::get('/sobrenos', 'SobreNosController@sobreNos')->name('site.sobrenos');

route::get('/contato', 'ContatoController@contato')->name('site.contato');

route::post('/contato', 'ContatoController@contato')->name('site.contato');

route::get('/login', function(){ return 'Login';})->name('site.login');


Route::prefix('/app')->group(function() {
    route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');

});

route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {echo 'A rota acessara não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial';
});


