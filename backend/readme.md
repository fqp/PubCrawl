# Backend



## Setup

In MySQL:

    create schema pubcrawl;

    create user <username> identified by '<password>';

    grant all privileges on pubcrawl.* to <username> with grant option;


From command line:

    php artisan migrate

    php artisan db:seed
