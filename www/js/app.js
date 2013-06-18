'use strict';


// Declare app level module which depends on filters, and services
angular.module('myRecipeApp', ['myRecipeApp.filters', 'myRecipeApp.services', 'myRecipeApp.directives', 'myRecipeApp.controllers','myRecipeAppServices']).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/recipe', {templateUrl: 'partials/RecipeList.html', controller: 'RecipeListCtrl'});
    $routeProvider.when('/recipe/:recipeId', {templateUrl: 'partials/RecipeItem.html', controller: 'RecipeItemCtrl'});
    $routeProvider.otherwise({redirectTo: '/recipe'});
  }]);
