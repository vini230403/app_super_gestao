<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'Olá, seja bem vindo ao curso';
});
*/

Route::get('/',[\App\Http\Controllers\PrincipalController::class,'principal']) ->name('site.index');
Route::get('/sobre-nos',[\App\Http\Controllers\SobreNosController::class, 'sobrenos']) ->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']) ->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar']) ->name('site.contato');
Route::get('/login', function(){return 'Login';}) ->name('site.login'); 


Route::prefix('/priv')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';}) ->name('priv.clientes'); 
    Route::get('/fornecedores',[\App\Http\Controllers\FornecedorController::class, 'fornecedores']) ->name('priv.fornecedores'); 
    Route::get('/produtos', function(){return 'Produtos';}) ->name('priv.produtos'); 
}); 

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');




Route::fallback(function(){
    echo 'A rota acessada não existe.<a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});

/* verbo http

get
post
put
patvh
delete
options

*/

