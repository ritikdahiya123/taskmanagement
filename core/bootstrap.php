<?php
$config = require 'config.php';
// require "core/database/connection.php";
// require 'core/router.php';
// require "core/database/querybuilder.php";
$pdo = connection::make($config['database']);
$o = new querybuilder($pdo); //we can pass pdo in this and also return this and make tha object of bootsrap file
// require_once './views/addname.view.php';
function view($name, $data = [])
{
    extract($data);
    return require  "views/{$name}.view.php";
}
$o = new querybuilder($pdo);

// $data=$o->select('users',1,'*','id');
// foreach($data as $row){
// $email=$row['email'];
// $id=$row['id'];
// $password=$row['password'];
// }
// echo $email;
if (isset($_POST['login'])) {
    $loginemail = $_POST['email'];
    $loginpassword = $_POST['password'];

    $data = $o->select('users', $_POST['email'], '*', 'email');

    if ($data) {
        foreach ($data as $row) {
            $role = $row['role'];
            $email = $row['email'];
            $id = $row['id'];
            $name = $row['firstname'];
            $password = $row['password'];

            session_start();

            if ($email == $loginemail && $password == $loginpassword) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['role'] = $role;
                $_SESSION['id'] = $id;
                $_SESSION['name'] = $name;

                if ($role == 'admin') {
                    header('location:admin');
                } elseif ($role == 'manager') {
                    header('location:manager');
                } elseif ($role == 'employee') {
                    header('location:employee');
                } else {
                    header('location:customer');
                }
            } elseif ($email == $loginemail && $password != $loginpassword) {
                echo "Incorrect password";
            }
        }
    } else {
        echo "Invalid email and password";
    }
}


if(isset($_POST['updatepassword'])){
    unset($_REQUEST['updatepassword']);
    $data=$o->select('users',$_POST['email'],'*','email');
// print_r($data);
// die();
foreach($data as $row){
$role=$row['role'];
$email=$row['email'];
$password=$row['password'];}
    // unset($_POST['id']);
    // unset($_POST['url']);
    // unset($_POST['firstname']);
    // unset($_POST['lastname']);
    // unset($_POST['email']);
    // unset($_POST['role']);
    // unset($_POST['updatepassword']);
    if($email==$_REQUEST['email']){
$o->update('users',$_REQUEST,$email,'email');
// echo 'updated';
    }
    else{
        echo "please enter a valid email";
    }
}
// echo $loginemail;
// echo $loginpassword;

      
    //       if($insert){
    //         echo "task updated";
    //       }
    // else{
    //     echo 'not given';
    //  }
    
    // }

    
  //   function update(){
//     $config = require 'config.php';
//     $pdo = connection::make($config['database']);
//     $o = new querybuilder($pdo);
//     if (isset($_POST['edit'])) {
//      $_SESSION['id'] =($_POST['edit']);
//           print_r($_POST);
       
//           // header('location:update')  ;    
     
// }

// }  
        

