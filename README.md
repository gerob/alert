# Laravel API Alert

This is a package for returning messages when you aren't dealing with sessions. For 
example when you're using Laravel to return only API responses.

## Installation

### First install the package

    composer require gerob/alert:dev-master

### Then add the provider to app/config/app.php

    'Gerob\Alert\AlertServiceProvider'


### Finally add the alias to make it easier to use

    'Alert' => 'Gerob\Alert\Facades\Alert'


Enjoy and feel free to make PR or open issues if you want to improve the package.

#### Happy Coding!
    
