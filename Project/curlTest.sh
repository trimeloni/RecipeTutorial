
echo 'Get All Recipes\n';
curl -X GET http://localhost/api/recipe

echo 'Get One Recipe\n';
curl -X GET http://localhost/api/recipe/2

echo 'Create New Recipe\n";
curl -X POST -H "Content-Type: application/json"  http://localhost/api/recipe -d '{"name":"recipe X","prepTime":20,"cookTime":21}'

echo 'Update a Recipe\n';
curl -X PUT -H "Content-Type: application/json"  http://localhost/api/recipe/16 16 -d '{"recipeId":16,"name":"recipe UX","prepTime":60,"cookTime":61}'



echo 'Delete a Recipe\n';
