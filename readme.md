## ChenkaCrud

## Configuration

* Go to the package directory

        cd workbench/josreload/chenka-crud

* Install composer dependencies

        composer update

* Go to the project's root and install composer dependencies

        composer update

* Create the .env.development.php file based on the env.example.php

        'DB_HOST' => '',
        'DB_NAME' => '',
        'DB_USER' => '',
        'DB_PASSWORD' => ''

* Run migration

        php artisan migration --bench="josreload/chenka-crud"

* Seed the database

        php artisan db:seed --class="Josreload\ChenkaCrud\Seeds\UserTableSeeder"

* Also you can install bower and npm dependencies to work with the front-end

        npm install
        bower install

* Run grunt

        grunt serve

And that's it, you're ready!

### License

