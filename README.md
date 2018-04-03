# GATK courses application form

Web application made with Laravel, incorporates a form with a list of fields about the courses of GATK for the inscription about the student.

![screenshot](http://clinbioinfosspa.es/files/image/gatk.png)

This app save the form data in a database.

`This is running Laravel version 5.6.`

## Server Requirements

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

* PHP >= 7.1.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

### To get running

Clone this repo by doing:

    git clone https://github.com/onit4ku/GATK_courses.git

Create an .env file in the root of the project or use the .env-getting-started and rename to .env with your configuration, here is an example of what the template would be:

    APP_NAME=GATK_courses
    APP_ENV=local
    APP_KEY=base64:PX6CDzfFaqmXovLwlRS2u4xm83IVnzEHiQqubS//Eg8=
    APP_DEBUG=true
    APP_LOG_LEVEL=debug
    APP_URL=http://localhost

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=GATKcourses
    DB_USERNAME=root
    DB_PASSWORD=root

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    SESSION_DRIVER=file
    SESSION_LIFETIME=120
    QUEUE_DRIVER=sync

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

* Check the file .env and configure your settings about your database.

  cd GATK_courses
  composer install

To generate the app key use:

    php artisan key:generate

To create the tables of the db use:

    php artisan migrate

And if you want, you can use the built in php server to run the app:

    php artisan serve

For more Laravel documentation go for this link
<https://laravel.com/docs>
