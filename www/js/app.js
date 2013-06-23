'use strict';


// Declare app level module which depends on filters, and services
angular.module('myRecipeApp', ['myRecipeAppServices']).
  config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/recipe', {templateUrl: 'partials/RecipeList.html', controller: 'RecipeListCtrl'});
    $routeProvider.when('/recipe/add', {templateUrl: 'partials/RecipeAdd.html', controller: 'SaveRecipeItemCtrl'});
    $routeProvider.when('/recipe/:recipeId', {templateUrl: 'partials/RecipeItem.html', controller: 'RecipeItemCtrl'});
    $routeProvider.otherwise({redirectTo: '/recipe'});
  }]);
