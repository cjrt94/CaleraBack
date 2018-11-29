<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//////////////////Recipes

//API for the moments

 Route::group(['middleware' => 'auth'], function () {

	Route::get('recipes', 'RecipeController@recipes' )-> name('recipesList');

	Route::get('recipes/type/{type}', 'RecipeController@recipesType' )-> name('recipesType');

	Route::get('recipes/name/{name}', 'RecipeController@recipesName' )-> name('recipesName');

	Route::get('recipe/{recipe}', 'RecipeController@recipe' )-> name('recipe');

	/////

	Route::get('/recetas', 'RecipeController@index')->name('indexRecipes');

	Route::get('/nueva-receta', 'RecipeController@new')->name('newRecipe');

	Route::get('/receta/editar/{recipe}', 'RecipeController@edit')->name('editRecipe');

	Route::post('/recipe/create', 'RecipeController@create')->name('createRecipe');

	Route::put('/recipe/update/{recipe}', 'RecipeController@update')->name('updateRecipe');

});

 



///////////////////////////////////////////////////

Auth::routes();
