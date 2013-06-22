'use strict';

/* Controllers */
function RecipeListCtrl($scope,GetRecipeList ) {
  $scope.recipes = GetRecipeList.query();
}

function RecipeItemCtrl($scope, $routeParams, GetRecipeItem ) {
  $scope.recipe = GetRecipeItem.get({recipeId: $routeParams.recipeId});
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

