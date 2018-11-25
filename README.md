# Installing the Property App

Using the terminal follow the instructions below:

## 1. Clone the git repository

git clone git@github.com:diegodss/property-app.git

## 2. Install the package dependencies for using composer and node

    cd property-app [enter]
    composer update [enter]
    npm install [enter]

## 3. Create a database

    mysql -u root [enter]
    create database propertyapp [enter]
    quit [enter]

## 4. Create a .env file and change the database settings. That's the only configuration that needs to be changed. 

## 5. If you are using valet to manage virtual hosts, create a virtual environment to run the application.

    valet link [enter]

The App URL should be: http://property-app.test 

## 6. Execute a migration to feed the App.

    php artisan migrate --seed [enter]

## 7. Run PHPunit just to make sure all tests are getting green.

    phpunit [enter]

## 8. Visit the main URL to start searching for properties.

http://property-app.test/

## 9. Alternatively, the search API can be tested using the following link:

http://property-app.test/api/property/search?name=Como&bedroom=4

