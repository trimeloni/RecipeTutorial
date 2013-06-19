'use strict';

/* Controllers */

function RecipeItemCtrl($scope,RecipeList ) {
  print("hello");
  $scope.recipes = RecipeList.query();
}
  
  
function RecipeListCtrl($scope,RecipeList ) {
  print("hello");
  $scope.recipes = RecipeList.query();
}

