<?php

Route::redirect('/', 'blog');

Auth::routes();

// cliente
Route::get('/blog', 'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');

// admin
