'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myRecipeApp.services', []).
  value('version', '0.1');

angular.module('myRecipeAppServices', ['ngResource']).
        factory('RecipeList', function($resource){
           return $resource('api/recipe', {}, {
               query: {method:'GET', params:{}, isArray:true}
        });
 });