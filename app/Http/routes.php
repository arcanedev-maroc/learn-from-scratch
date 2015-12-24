<?php

/* ------------------------------------------------------------------------------------------------
 |  Application Routes
 | ------------------------------------------------------------------------------------------------
 | !!! IMPORTANT !!!
 |
 |   NEVER USE `Route::controller()` OR `Route::resource()`.
 |
 |   This is what happen if you used them : (ノ ゜Д゜)ノ ︵ ┻━┻
 */
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
    ], function () {
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

            Route::get('create', [
                'as'   => 'public::topics.create',
                'uses' => 'TopicsController@create',
            ]);

            Route::post('store', [
                'as'   => 'public::topics.store',
                'uses' => 'TopicsController@store',
            ]);

            Route::get('{topic}/edit', [
                'as'   => 'public::topics.edit',
                'uses' => 'TopicsController@edit',
            ]);

            Route::put('{topic}/update', [
                'as'   => 'public::topics.store',
                'uses' => 'TopicsController@store',
            ]);

            Route::delete('{topic}', [
                'as'   => 'public::topics.delete',
                'uses' => 'TopicsController@delete',
            ]);
        });
    });
});
