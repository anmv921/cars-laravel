## Cars | Laravel

This is a website implemented using the Laravel framework, that allows us to track cars, from different
brands, as well as engines and products. In short, it is a CRUD app that follows a MVC logic and
saves the data in a MySQL database.

The project uses the Breeze starter kit to implement the authentification features. 

Tailwind CSS framework is used for styling.

This project follows the tutorial available on YouTube:

[ Complete Laravel Tutorial | Code With Dary ](https://www.youtube.com/watch?v=376vZ1wNYPA 
"Complete Laravel Tutorial | Code With Dary")

The tables present in the database are shown in the following diagram:

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/drawSQL-image-export-2025-01-24.png" 
width="800px" />

To access the features of the site we must first login into the website

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/login.png" 
width="300px" />

The main page is the "/cars" view:

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/cars.png" 
width="500px" />

Here we can perform the CRUD operation by clicking on the links available on the page.

We can create a new car:

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/create.png" 
width="300px" />

We can view the detailed car information:

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/show.png" 
width="500px" />

An update form is available:

> <img alt="ticket form 1" 
src="https://github.com/anmv921/cars-laravel/blob/master/readme_images/edit.png" 
width="300px" />

## Running the project

In order to run the project we need to run the followind command, if we are running it
for the first time.

> composer install

The file "laravel-cars.sql" can be imported into MySQL from the phpMyAdmin. 

The following command allows us to install the required node packages, for example the Tailwind styles

> npm install

To compile the styles we can run:

> npm run dev

And in another terminal we can run:

> php artisan serve --port=9999

The page becomes available on the localhost address, on the port 9999

> http://127.0.0.1:9999/