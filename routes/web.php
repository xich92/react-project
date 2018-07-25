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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

/**
 * Routes for resource posts-controller
 */



/**
 * Routes for resource posts
 */
$router->group(['prefix'=>'api/v1'],function() use ($router){
    $router->group(['prefix'=>'posts'],function() use ($router){
        $router->get('add', 'PostsController@createPost');
        $router->put('edit/{id}', 'PostsController@updatePost');
        $router->get('view/{id}', 'PostsController@viewPost');
        $router->delete('delete/{id}', 'PostsController@deletePost');
        $router->get('index', 'PostsController@index');

    });
    $router->group(['prefix'=>'users'],function() use ($router){
        $router->post('add', 'UsersController@add');
        $router->get('view/{id}', 'UsersController@view');
        $router->post('edit/{id}', 'UsersController@edit');
        $router->put('delete/{id}', 'UsersController@delete');
        $router->delete('index', 'UsersController@index');


    });


});


/**
 * Routes for resource users
 */

