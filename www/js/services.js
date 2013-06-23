'use strict';

/* Services */
angular.module('myRecipeAppServices', ['ngResource'])
        .factory('RecipeList', function($resource){
           return $resource('api/recipe');
        })
        .factory('RecipeItem', function($resource){
           return $resource('api/recipe/:recipeId');
        });
        

  