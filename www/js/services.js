'use strict';

/* Services */
angular.module('myRecipeAppServices', ['ngResource'])
        .factory('RecipeList', function($resource){
           return $resource('api/recipe');
        })
        .factory('RecipeItem', function($resource){
           return $resource('api/recipe/:recipeId');
        })
        .factory('IngredientList', function($resource){
            return $resource('api/ingredient');
        })
        .factory('IngredientItem', function($resource){
            return $resource('api/ingredient/:ingredientId');
        })
        .factory('RecipeIngredientList', function($resource){
            return $resource('api/recipeingredient');
        })
        .factory('RecipeIngredientItem', function($resource){
            return $resource('api/recipeingredient/:recipeingredientId');
        })
        .factory('ReviewList', function($resource){
            return $resource('api/reviewlist');
        })
        .factory('reviewItem', function($resource){
            return $resource('api/reviewlist/:reviewlistId');
        });
        

  