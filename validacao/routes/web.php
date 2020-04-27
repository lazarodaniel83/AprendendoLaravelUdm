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

Route::get('/novocliente','ClienteControlador@create');
Route::get('/','ClienteControlador@index');
Route::post('/cliente','ClienteControlador@store');
Route::get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $user = \App\User::create([
        'name'         => 'daniel',
        'email'     => 'ldxss158@gmail.com.br',
        'password'     => bcrypt('Ldss1209!'),
    ]);
    // Se quiser exibir os dados do usuário: dd($user);
 
    // Listando os usuários
    $users = \App\User::get();
 
    echo '<hr>';
    foreach ($users as $user) {
        echo "{$user->name} <br>";
    }
    echo '<hr>';
});