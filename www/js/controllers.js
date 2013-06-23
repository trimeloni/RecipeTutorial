'use strict';

/* Controllers */
function RecipeListCtrl($scope,RecipeList ) {
  $scope.recipes = RecipeList.query();
}

function RecipeItemCtrl($scope, $routeParams, RecipeItem ) {
  $scope.recipe = RecipeItem.get({recipeId: $routeParams.recipeId});
}

function SaveRecipeItemCtrl($scope, RecipeList ) {
  $scope.SaveRecipe = function(){
    console.log("did this run?");
    var newRecipe = new RecipeList();
    newRecipe.name = $scope.name;
    newRecipe.prepTime = $scope.prepTime;
    newRecipe.cookTime = $scope.cookTime;
    
    newRecipe.$save();
  }
}



/*
function PhoneDetailCtrl($scope, $routeParams, Phone) {
  $scope.phone = Phone.get({phoneId: $routeParams.phoneId}, function(phone) {
    $scope.mainImageUrl = phone.images[0];
  });

  $scope.setImage = function(imageUrl) {
    $scope.mainImageUrl = imageUrl;
  }
}

*/

