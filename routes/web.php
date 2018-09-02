<?php


//  Default route will deliver a simple splash screen
    Route::get('/', function () {
        return view('splash');
    });


/*  This route will display the details of a random card, pulled from the
    database. If the optional ID parameter is provided, it will display
    that particular card's detail. */
    Route::get('/card/{id?}', 'cardsController@show')
        ->where('id', '[0-9]+')
        ->name('card.show');
