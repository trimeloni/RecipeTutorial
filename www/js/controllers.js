'use strict';

/* Controllers */
function RecipeListCtrl($scope,RecipeList ) {
  $scope.recipes = RecipeList.query();
}

function RecipeItemCtrl($scope, $routeParams, $location, RecipeItem ) {
  $scope.recipe = RecipeItem.get({recipeId: $routeParams.recipeId});
  
  $scope.deleteRecipe = function() {
      console.log("delete");
      
      // Delete the item
      RecipeItem.delete({recipeId: $routeParams.recipeId}, function(){
        // redirect after deleted
        $location.path("/");
      });
      
      
  }
}

function SaveRecipeItemCtrl($scope, $location, RecipeList ) {
  $scope.SaveRecipe = function(){
    
    // Save the new recipe
    var newRecipe = new RecipeList();
    newRecipe.name = $scope.name;
    newRecipe.prepTime = $scope.prepTime;
    newRecipe.cookTime = $scope.cookTime;    
    newRecipe.$save(function(item, putResponseHeaders) {
        $location.path('/');
    });    
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

