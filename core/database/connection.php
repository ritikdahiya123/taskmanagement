<?php
 class  connection{
   static  function make($config){
        try{
        //   return new PDO("mysql:host=localhost;user=root;dbname=oopsdb")  ;
        return new PDO(
       $config['connections'].';dbname='.$config['connection'],
       $config['username'],
       $config['password'],
       $config['options']
        );
        }
        catch(PDOException $e){
            die('connection failed');
        }
    }
}


?>