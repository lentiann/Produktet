# Products
Project includes basic operations in Laravel as in the following.

Cloning of project can be done using Github Shell or Git Bash using following command
Git clone https://github.com/lentiann/Produktet.git and to save in local enviroment.

Steps mentioned below will be solution to work application:
 -copy .env.example .env and change DB name, DB username and DB password.
 -composer update and wait untill finishing it.
 -php artisan key:generate to generate key for application.
 -php artisan serve to server project.

Setup of project in local machine isn't hard part we need to use XAMPP or WAMPP as server to save databases, project needs to be in HTDOCS in XAMPP or WAMPP, another solution is to use php artisan serve which is replace for XAMPP or WAMPP as server.

-Routing
-Migrations
-Models
-Database seeder with Faker
-Eloquent
-HTTP Calls.

Project has Controller named ProductsController which contains methods to make RESTful API.

- method GET path /products should get list of all products
- method GET path /viewProduct/1 should get detail of product 1
- method DELETE path /deleteProduct/1 should delete product 1
