<?php

/* ------------------------------------------------------------------------------------------------
 |  Application Routes
 | ------------------------------------------------------------------------------------------------
 | !!! IMPORTANT !!!
 |
 |   NEVER USE `Route::controller()` OR `Route::resource()`.
 |
 |   This is what happen if you used them : (ノ ゜Д゜)ノ ︵ ┻━┻
 */ // This is group for /web
Route::group(['middleware' => ['web']], function () {
    /* ------------------------------------------------------------------------------------------------
     |  Frontend Routes
     | ------------------------------------------------------------------------------------------------
     */
    Route::group([
        'namespace' => 'Frontend',
    ], function () {

        /**
         * Pages Routes
         */
        Route::get('/', [
            'as'   => 'public::home',
            'uses' => 'PagesController@index',
        ]);

        /**
         * Topics Routes
         */
        Route::group([
            'prefix' => 'topics',
        ], function () {
            Route::get('/', [
                'as'   => 'public::topics.index',
                'uses' => 'TopicsController@index',
            ]);

            Route::get('{topic}', [
                'as'   => 'public::topics.show',
                'uses' => 'TopicsController@show',
            ]);
        });
    });

    /* ------------------------------------------------------------------------------------------------
     |  Backend Routes
     | ------------------------------------------------------------------------------------------------
     */
    Route::group([
        'namespace' => 'Backend',
        'prefix'    => 'admin',
    ], function () {
        Route::get('/', [
            'as'   => 'admin::index',
            'uses' => 'PagesController@index',
        ]);

        /**
         * Topics Routes
         */
        Route::group([
            'prefix' => 'topics',
        ], function () {
            Route::get('/', [
                'as'   => 'admin::topics.index',
                'uses' => 'TopicsController@index',
            ]);

            Route::get('create', [
                'as'   => 'admin::topics.create',
                'uses' => 'TopicsController@create',
            ]);

            Route::post('store', [
                'as'   => 'admin::topics.store',
                'uses' => 'TopicsController@store',
            ]);
            Route::get('{topic}', [
                'as'   => 'admin::topics.show',
                'uses' => 'TopicsController@show',
            ]);
            Route::get('{topic}/edit', [
                'as'   => 'admin::topics.edit',
                'uses' => 'TopicsController@edit',
            ]);

            Route::put('{topic}/update', [
                'as'   => 'admin::topics.update',
                'uses' => 'TopicsController@update',
            ]);

            Route::delete('{topic}', [
                'as'   => 'admin::topics.delete',
                'uses' => 'TopicsController@delete',
            ]);
        });
    });
});
