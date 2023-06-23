
<?php

require 'vendor/autoload.php';
$database=require 'core/bootstrap.php';

$router=new router();
require 'routes.php';
// require $router->direct($_SERVER['REQUEST_URI']);
// ->direct(request::uri());

router::load('routes.php') -> direct(request::uri());


?>