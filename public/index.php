<?php

//require main files
require_once ('../app/controllers/Controller.php');
require_once ('../app/config/config.php');
require_once('../app/helpers/helper.php');

//autoload libraries
spl_autoload_register(function ($className){
    require_once ('../app/libraries/'. $className . '.php');
});


$router = new Router($_SERVER['QUERY_STRING']);

