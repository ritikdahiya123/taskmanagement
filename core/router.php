<?php

require_once './controllers/pagescontroller.php';
class router
{
   // protected $controller = new pagescontroller;
   protected $routes = [];
   public static function load($file)
   {
      $router = new static;
      require $file;
      return $router;
   }
   public function define($routes)
   {
      $this->routes = $routes;
   }
   public function direct($uri)
   {
      if (array_key_exists($uri, $this->routes)) {
         // echo $this->routes[$uri];
         // die();
         //   return $this->routes[$uri];
         $arr = [...explode('@', $this->routes[$uri])];
         return $this->callaction($arr[0], $arr[1]);
      } else {
         require './views/error.view.php';
         // echo "Page Not Found";
      }
      //  throw new Exception('no route define for this uri');
   }
   protected function callaction($controller, $action)
   {

      // echo $controller;
      // echo $action;
      //   die();
      // if (!method_exists($controller, $action)) {
         // throw new exception("{$controller} does not respond to the {$action} action");   
      // }
      return (new $controller)->$action();
   }
}
