<?php

#user
Route::post('users/login' , 'UserApi@login');
Route::get('users/getById/{id}', 'UserApi@getById');
Route::get('users/delete/{id}', 'UserApi@delete');
Route::post('users/add', 'UserApi@add');
Route::post('users/update', 'UserApi@update');
Route::get('users/{limit?}/{offset?}', 'UserApi@index');
Route::get('users/getUserByToken' , 'UserApi@getUserByToken');

#page
Route::get('page/getById/{id}/{lang?}', 'PageApi@getById');
Route::get('page/delete/{id}', 'PageApi@delete');
Route::post('page/add', 'PageApi@add');
Route::post('page/update/{id}', 'PageApi@update');
Route::get('page/{limit?}/{offset?}/{lang?}', 'PageApi@index');

#categorie
Route::get('categorie/getById/{id}/{lang?}', 'CategorieApi@getById');
Route::get('categorie/delete/{id}', 'CategorieApi@delete');
Route::post('categorie/add', 'CategorieApi@add');
Route::post('categorie/update/{id}', 'CategorieApi@update');
Route::get('categorie/{limit?}/{offset?}/{lang?}', 'CategorieApi@index');
































Route::get('maincat/getById/{id}/{lang?}', 'MaincatApi@getById');
Route::get('maincat/delete/{id}', 'MaincatApi@delete');
Route::post('maincat/add', 'MaincatApi@add');
Route::post('maincat/update/{id}', 'MaincatApi@update');
Route::get('maincat/{limit?}/{offset?}/{lang?}', 'MaincatApi@index');




#brand
Route::get('brand/getById/{id}/{lang?}', 'BrandApi@getById');
Route::get('brand/delete/{id}', 'BrandApi@delete');
Route::post('brand/add', 'BrandApi@add');
Route::post('brand/update/{id}', 'BrandApi@update');
Route::get('brand/{limit?}/{offset?}/{lang?}', 'BrandApi@index');

#maincar
Route::get('maincar/getById/{id}/{lang?}', 'MaincarApi@getById');
Route::get('maincar/delete/{id}', 'MaincarApi@delete');
Route::post('maincar/add', 'MaincarApi@add');
Route::post('maincar/update/{id}', 'MaincarApi@update');
Route::get('maincar/{limit?}/{offset?}/{lang?}', 'MaincarApi@index');

#car
Route::get('car/getById/{id}/{lang?}', 'CarApi@getById');
Route::get('car/delete/{id}', 'CarApi@delete');
Route::post('car/add', 'CarApi@add');
Route::post('car/update/{id}', 'CarApi@update');
Route::get('car/{limit?}/{offset?}/{lang?}', 'CarApi@index');

#accessories
Route::get('accessories/getById/{id}/{lang?}', 'AccessoriesApi@getById');
Route::get('accessories/delete/{id}', 'AccessoriesApi@delete');
Route::post('accessories/add', 'AccessoriesApi@add');
Route::post('accessories/update/{id}', 'AccessoriesApi@update');
Route::get('accessories/{limit?}/{offset?}/{lang?}', 'AccessoriesApi@index');

#country
Route::get('country/getById/{id}/{lang?}', 'CountryApi@getById');
Route::get('country/delete/{id}', 'CountryApi@delete');
Route::post('country/add', 'CountryApi@add');
Route::post('country/update/{id}', 'CountryApi@update');
Route::get('country/{limit?}/{offset?}/{lang?}', 'CountryApi@index');

#region
Route::get('region/getById/{id}/{lang?}', 'RegionApi@getById');
Route::get('region/delete/{id}', 'RegionApi@delete');
Route::post('region/add', 'RegionApi@add');
Route::post('region/update/{id}', 'RegionApi@update');
Route::get('region/{limit?}/{offset?}/{lang?}', 'RegionApi@index');

#slider
Route::get('slider/getById/{id}/{lang?}', 'SliderApi@getById');
Route::get('slider/delete/{id}', 'SliderApi@delete');
Route::post('slider/add', 'SliderApi@add');
Route::post('slider/update/{id}', 'SliderApi@update');
Route::get('slider/{limit?}/{offset?}/{lang?}', 'SliderApi@index');

#activite
Route::get('activite/getById/{id}/{lang?}', 'ActiviteApi@getById');
Route::get('activite/delete/{id}', 'ActiviteApi@delete');
Route::post('activite/add', 'ActiviteApi@add');
Route::post('activite/update/{id}', 'ActiviteApi@update');
Route::get('activite/{limit?}/{offset?}/{lang?}', 'ActiviteApi@index');