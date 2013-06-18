'use strict';

/* Controllers */

angular.module('myRecipeApp.controllers', [])
  .controller('RecipeListCtrlx', [function() {

  }])
  .controller('RecipeItemCtrl', [function() {

  }]);
  
function RecipeListCtrl($scope,RecipeList ) {
  print("hello");
  $scope.recipes = RecipeList.query();
}

