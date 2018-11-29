<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Ingredient;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

   public function index() {
      $recipes=  Recipe::paginate(10);
      return view('recipes.app', ['recipes' => $recipes]);
   }

   public function new() {

   	return view('recipes.new');
   	
   }

   public function create( Request $request) {

   		 
   		$image= $request->file('image');
   	 
   		$recipe= Recipe::create([

   			'name' => $request->input('name'),
   			'portion' => $request->input('portion'),
   			'weather' => $request->input('time'),
   			'calories' => $request->input('calories'),
   			'type' => $request->input('type'),
   			'description' => $request->input('description'),
   			'image' => $image->store('recipes','public')


   		]);

          $ingredients= $request->get('ingredients');

         foreach($ingredients as $ingredient){

            if(strlen($ingredient)>0) {

               $ingredient = new Ingredient(['description' => $ingredient ]);

               $recipe->ingredients()->save($ingredient);

            }

         }        


   		return redirect('/recetas');
       
        
   }

   public function edit(Recipe $recipe){
         
      return view('recipes.edit', ['recipe' => $recipe]);
   }

   public function update(Recipe $recipe,Request $request) {

      $image= $request->file('image');
      
      if(isset($image) ) {
          $url= $image->store('recipes','public');
           $recipe->image= $url;
      }
     

      $recipe->name = $request->input('name');
      $recipe->portion = $request->input('portion');
      $recipe->weather = $request->input('time');
      $recipe->calories = $request->input('calories');
      $recipe->description = $request->input('description');
      $recipe->type = $request->input('type');
  
      $recipe->save();

      $ingredients= $recipe->ingredients;

       foreach($ingredients as $ingredient){

         $ingredient->delete();

       }

        $ingredients= $request->get('ingredients');

         foreach($ingredients as $ingredient){

            if(strlen($ingredient)>0) {

               $ingredient = new Ingredient(['description' => $ingredient ]);

               $recipe->ingredients()->save($ingredient);

            }

         } 

         return redirect('/recetas');
        
   }

   public function recipes() {
      
      $recipes= Recipe::all()->random(4);

      return response()->json($recipes);
   }

   public function recipesType($type) {
      
      $recipes= Recipe::type($type)->get();

      return response()->json($recipes);
   }

   public function recipesName($name) {
      
      $recipes= Recipe::name($name)->get();

      return response()->json($recipes);
   }


   public function recipe($id) {

      $recipe= Recipe::with('Ingredients')->find($id);

      return response()->json($recipe);

   }


}
