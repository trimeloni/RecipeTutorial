'use strict';

/* Services */
angular.module('myRecipeAppServices', ['ngResource'])
        .factory('GetRecipeList', function($resource){
           return $resource('api/recipe', {}, {
               query: {method:'GET', params:{}, isArray:true}
            });
        })
        .factory('GetRecipeItem', function($resource){
           return $resource('api/recipe/:recipeId', {}, {
               query: {method:'GET', params:{}, isArray:false}
            });
        });
        

  