# Products
Project includes basic operations in Laravel as in the following.

-Routing
-Migrations
-Models
-Database seeder with Faker
-Eloquent
-HTTP Calls.

Project has Controller named ProductsController which contains methods to make RESTful API.

//This route is used to get data as JSON format.
  Route::get('/products','ProductsController@getProducts');
  // This route is used to insert data in DB and back it as JSON.
  Route::post('/addProduct','ProductsController@addProduct');
  
  // This Route is used to view specific Product with ID
  Route::get('/viewProduct/{id}','ProductsController@viewProduct');
  
  // This route is used to delete specific Product with ID
  Route::delete('/deleteProduct/{id}','ProductsController@deleteProduct');

