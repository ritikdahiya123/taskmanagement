<?php

// require 'core/bootstrap.php';
// $o->insert('users',[
//     'name'=>$_POST['name'],
//     'email'=>$_POST['email']
    
// ]);
  $o->insert('userdata',[
    'name'=>$_POST['name'],
    'email'=>$_POST['email'],
    'number'=>$_POST['number']
    
    
]);
//  $o->select('users','1','*','id');



?>