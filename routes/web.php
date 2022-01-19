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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () { return 'Login'; })->name('site.login');

// prefix -> agrupamento de rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedoresController@index')->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

// Route de fallback -> Página não encontrada
Route::fallback(function () {
    echo 'Página não encontrada, <a href="'.route('site.principal').'"> Clique aqui </a> para ir até a página principal!';
});

/************************* Parâmetros ********************/
// // Parâmetros obrigatórios
// Route::get('contato/{nome}/{idade}/{qtd_filhos}', function (string $nome,int $idade,int $filhos){
//     echo "Olá $nome, você tem $idade anos e possui $filhos filhos, que legal!!!";
// });

// // Parâmetros opcionais
// Route::get('teste/{nome}/{idade?}/{qtd_filhos}', function (string $nome,int $idade = 28,int $filhos){
//     echo "Olá $nome, você tem $idade anos e possui $filhos filhos, que legal!!!";
// });

// // Parâmetros obrigatórios com regex
// Route::get('teste/{nome}/{idade}', function (string $nome,int $idade ){
//     echo "Olá $nome, você tem $idade anos, que legal!!!";
// })->where('nome' , '[A-Za-z]+')->where('idade', '[0-9]+');

/************************* Parâmetros para o Controller ********************/

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');




/************************* Redirecionamento de rotas ********************/

// Route::get('/rota1', function () {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function () {
//     echo 'Rota 2';
// })->name('site.rota2');

// Route::get('/rota3', function () {
//     return redirect()->route('site.rota2');
// })->name('site.rota3');

// Route::redirect('rota2', 'rota1');

/** Final redirecionamento */