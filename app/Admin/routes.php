<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\CategoryController;
use App\Admin\Controllers\AuthorController;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\StoryController;
use App\Admin\Controllers\PublishingHomeController;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('categories', CategoryController::class);
    $router->resource('authors', AuthorController::class);
    $router->resource('users', UserController::class);
    $router->resource('publishing-homes', PublishingHomeController::class);
    $router->resource('stories', StoryController::class);
});