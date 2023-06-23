<?php

class userscontroller{
 
    public function assigntask(){
        // require "./core/bootstrap.php";
        // require './core/database/connection.php';
        // require  './core/database/querybuilder.php';
        $config = require 'config.php';
// require "core/database/connection.php";
// require 'core/router.php';
// require "core/database/querybuilder.php";
$pdo = connection::make($config['database']);
$o = new querybuilder($pdo);
        if(isset($_POST['workorder'])){
            unset($_POST['workorder']);
            print_r($_POST);
            // die();
           $insert= $o->insert('workorder', [
                'title' => $_POST['title'],
                'note' => $_POST['note'],
                'c_id'=>$_POST['c_id'],
                'status'=>"pending",
             
               
              ]);
              

        }
        header('location:customer');
    }
    public function addcustomer(){
        $config = require 'config.php';
        $pdo = connection::make($config['database']);
        $o = new querybuilder($pdo);
        if (isset($_POST['addcustomer'])) {
            $o->insert('users', [
              'firstname' => $_POST['fname'],
              'lastname' => $_POST['lname'],
              'email' => $_POST['email'],
              'role'=>'customer',
              'password'=>$_POST['password'],
            ]);
          }
          header('location:signup');
    }
    public function assigntask1(){
        $config = require 'config.php';
        $pdo = connection::make($config['database']);
        $o = new querybuilder($pdo);
        if (isset($_POST['assigntask'])) {
            // if($_POST['password']==$_POST['cpassword']){
              // print_r($_POST);
              // die();
             $insert= $o->insert('assigntask', [
                'message' => $_POST['message'],
                'task' => $_POST['task'],
                'user_id' => $_POST['user_id'],
                'role'=>$_POST['role'],
                'status'=>"pending",
              ]);
            }
            header('location:admin');
    }

    public function assigntask2(){
      $config = require 'config.php';
      $pdo = connection::make($config['database']);
      $o = new querybuilder($pdo);
      if (isset($_POST['assigntask'])) {
          // if($_POST['password']==$_POST['cpassword']){
            // print_r($_POST);
            // die();
           $insert= $o->insert('assigntask', [
              'message' => $_POST['message'],
              'task' => $_POST['task'],
              'user_id' => $_POST['user_id'],
              'role'=>$_POST['role'],
              'status'=>"pending",
            ]);
          }
          header('location:manager');
  }
    function addmember(){
        $config = require 'config.php';
        $pdo = connection::make($config['database']);
        $o = new querybuilder($pdo);
        if (isset($_POST['addmember'])) {
          
            // if($_POST['password']==$_POST['cpassword']){
              $o->insert('users', [
                'firstname' => $_POST['fname'],
                'lastname' => $_POST['lname'],
                'email' => $_POST['email'],
                'role'=>$_POST['role'],
                'password'=>$_POST['password'],
              ]);
            }
            header('location:register');

    }
    function addemployee(){
      $config = require 'config.php';
      $pdo = connection::make($config['database']);
      $o = new querybuilder($pdo);
      if (isset($_POST['assignemployee'])) {
        unset($_POST['assignemployee']);
          // if($_POST['password']==$_POST['cpassword']){
            // print_r($_POST);
            // die();
            $emp=$_POST['emp'];
            foreach($emp as $item){

            
            $o->insert('assignuser', [
              'm_id' => $_POST['m_id'],
              // 'emp_id'=>$_POST['emp_id'],
              'employee'=>$item,
            ]);
          }
          header('location:assignuser');
        }
        else{
          echo "not inserted";
        }
          
       
  }
  function updatemember(){
    $config = require 'config.php';
    $pdo = connection::make($config['database']);
    $o = new querybuilder($pdo);
    if (isset($_POST['updatemember'])) {
      $email=$_POST['email'];
    
        unset($_POST['updatemember']);
    // print_r($_POST);
$o->update('users',$_REQUEST,$email,'email');
// echo 'updated';
    }
    header('location:admin')  ; 
}


function employeestatus(){
  $config = require 'config.php';
  $pdo = connection::make($config['database']);
  $o = new querybuilder($pdo);
  if (isset($_REQUEST['changestatus'])) {
    // $email=$_POST['email'];
    unset($_POST['changestatus']);
    // print_r($_POST);
// die();
  $name=($_POST['id']);
$o->update('assigntask',$_REQUEST,$name,'id');
// echo 'updated';
  }
  header('location:employee')  ; 
}       
   
function managerstatus(){
  $config = require 'config.php';
  $pdo = connection::make($config['database']);
  $o = new querybuilder($pdo);
  if (isset($_REQUEST['changestatus'])) {
    // $email=$_POST['email'];
    unset($_POST['changestatus']);
    // print_r($_POST);
// die();
  $name=($_POST['id']);
$o->update('assigntask',$_REQUEST,$name,'id');
// echo 'updated';
  }
  header('location:manager')  ; 
} 
function customerstatus(){
  $config = require 'config.php';
  $pdo = connection::make($config['database']);
  $o = new querybuilder($pdo);
  if (isset($_REQUEST['changestatus'])) {
    // $email=$_POST['email'];
    unset($_POST['changestatus']);
    // unset($_POST['id']);
    // print_r($_POST);
// die();
  $name=($_POST['id']);
$o->update('workorder',$_REQUEST,$name,'c_id');
// echo 'updated';
  }
  header('location:viewcustomer')  ; 
} 

}




