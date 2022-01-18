<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
"Usted a realizado un pago de:5, Se envio un token (629500) y el id de session (KUZWEeUWB8Vw8X4Dp2pLSf8RIdUfqpXyogMPuaEN) a su correo para confirmar el pago"
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function ()  {
    
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle(str_repeat($pool, 5)), 0, 32);
});



$router->post('registro',  ['as' => 'registro',  'uses' => 'ApiWalletController@registro']);
$router->get('consulta',  ['as' => 'consulta',  'uses' => 'ApiWalletController@consulta']);
$router->put('recargar',   ['as' => 'recargar',   'uses' => 'ApiWalletController@recargar']);
$router->post('pagar', 	  ['as' => 'pagar',     'uses' => 'ApiWalletController@pagar']);
$router->post('confirmar', ['as' => 'confirmar', 'uses' => 'ApiWalletController@confirmar']);

