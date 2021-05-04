<?php
 
  Route::get('/',function() { return view('Index1');});
  
  Route::resource('book', 'booksController');
  Route::resource('author', 'authorController');
  Route::resource('publisher', 'publisherController');

  Route::get('/book/(:number)/delete','booksController@destroy');
  Route::get('/author/(:number)/delete','authorController@destroy');
  Route::get('/publisher/(:number)/delete','publisherController@destroy');
 
  //Route::get('book', 'booksController@index');
  //Route::get('book/(:number)', 'booksController@show');
  //Route::get('author','authorController@index');
  //Route::get('author/(:number)', 'authorController@show');
  //Route::get('publisher', 'publisherController@index');
  //Route::get('publisher/(:number)', 'publisherController@show');
  Route::dispatch();
?>
