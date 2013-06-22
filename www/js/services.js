'use strict';

/* Services */
angular.module('myRecipeAppServices', ['ngResource'])
        .factory('GetRecipeList', function($resource){
           return $resource('api/recipe');
        })
        .factory('GetRecipeItem', function($resource){
           return $resource('api/recipe/:recipeId');
        });
        

  