#Laravel Product API
This application is bootstrapped with Laravel 9

## Steps for running the application 

> Create MySql database on your local machine by using xampp , lampp or any other server.
> Change database credentials in .evn file . you can find it in root of project.

### Available Scripts

In the project directory, you can run:

### `composer install`

Once composer installation is done run the below commands for db seeding.
I place 10 user and 100 products inside factory.

>All users have password (password)

### `php artisan migrate`
### `php artisan db:seed`
### `php artisan db:seed --class=ProductSeeder`
### `php artisan serve`
Last command will start the localhost server on port 8000 (http://127.0.0.1:800)

### Available Api Routes

#### POST /register 

> This route accepts params (name,email,password,c_password).
> This will create a new user but it cant link the user with existing products.
> For testing please login with existing users created by factory.

#### POST  /login
> Route provide you the santum token for accessing the products record.

#### GET /products

> Products route return all products for authenticated user.
> For search I use 3 param for now we can use me individually means param combination will not implemented.
> Params (userName , productName , createDate)    

