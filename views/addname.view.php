<?php

require 'core/bootstrap.php';
// $o->insert('users',[
//     'name'=>$_POST['name'],
//     'email'=>$_POST['email']

// ]);
// $config = require 'config.php';
// $pdo = connection::make($config['database']);
// $o = new querybuilder($pdo);
// if (isset($_POST['name'])) {
//   $o->insert('userdata', [
//     'name' => $_POST['name'],
//     'email' => $_POST['email'],
//     'number' => $_POST['number']


//   ]);
  $o = new querybuilder($pdo);
$s=$o->select('users',1,'email','id');
$email=$s['email'];





 
