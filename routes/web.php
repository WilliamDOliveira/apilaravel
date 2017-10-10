<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Http\Controllers\Controller;

$router->get( '/' , function () use ( $router ) {
    return $router->app->version();
});

$router->group( [ 'prefix' => 'api/v1' ] ,function () use ( $router ){
    $router->get(   '/posts/index',      'PostsController@index'     );
    $router->get(   '/posts/show/{id}',  'PostsController@show'      );
    $router->post(  '/posts/add',        'PostsController@store'     );
    $router->put(   '/posts/view/{id}',  'PostsController@update'    );
    $router->delete('/posts/delete/{id}','PostsController@delete'    );
});