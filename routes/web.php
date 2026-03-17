<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

//:: -> método estático, sem instancia (new) uma classe -> $route = new Route, e na class Route tem static function

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('pagina-principal');

//agrupamento de rotas

Route::prefix('publico')->group(function(){

    Route::get('/contato/{nome}', [App\Http\Controllers\Principal::class, 'contato']); //-> recebe um parâmetro
    Route::get('/contato/{nome}/{sobrenome}', [App\Http\Controllers\Principal::class, 'contatoNomeCompleto']); //-> recebe dois parâmetros
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}', [App\Http\Controllers\Principal::class, 'contatoMensagem']);
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}?{telefone}/{email?}', [App\Http\Controllers\Principal::class, 'contatoTelefone']); //-> somente o ultimo parametro pode ser opcional
    
});

//Pra que serve argupámento de rotas? Para consultas destinadas a um tipo de usuário e consultas para outro tipo

//acesso somente ao admin

// Route::prefix('admin')->group(function(){
//   Route::get('/painel-financeiro', [App\Http\Controllers\Principal::class, 'contato'])
//});

//acesso somente ao programador

// Route::prefix('developer')->group(function(){
//   Route::get('/painel-financeiro', [App\Http\Controllers\Principal::class, 'contato'])
//});

Route::fallback(function(){ //pesquisar rota e não acha a rota
    echo "A rota acessada não existe!";
    echo "<a href='". route('pagina-principal'). "'>Voltar</a>";
});
