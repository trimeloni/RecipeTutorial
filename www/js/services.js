'use strict';

/* Services */
angular.module('myRecipeAppServices', ['ngResource']).
        factory('RecipeList', function($resource){
           return $resource('api/recipe', {}, {
               query: {method:'GET', params:{}, isArray:true}
        });
 });