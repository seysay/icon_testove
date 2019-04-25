<?php

// main
    $router->get('/', 'App\Controllers\Controller@index');

//  creating form
    $router->get('/create.html',  'App\Controllers\Controller@create');

//  edit form
    $router->get('/edit.html', 'App\Controllers\Controller@edit');
//  form save post
    $router->post('/create.html', 'App\Controllers\Controller@create');
    $router->post('/edit.html', 'App\Controllers\Controller@edit');

//  delete student
    $router->get('delete.html', 'App\Controllers\Controller@delete');
