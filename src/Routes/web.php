<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-5-18
 * Time: 12:03
 */

use Illuminate\Routing\Router;
Route::group(['namespace'=>'Readytan\Article\Controllers'],function (Router $router){

    $router->resource('article',ArticleController::class);
});

