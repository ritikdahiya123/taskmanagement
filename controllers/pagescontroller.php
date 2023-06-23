<?php
// namespace controllers;
class pagescontroller{

    public static function home(){
        require './views/index.view.php';
        // return view('index');
        
    }
    public static function about(){
        // require 'views/about.view.php';
        return view('about');
    }
    public static function contact(){
        // require "views/contact.view.php";
        return view('contact');
    }
    public static function addname(){
        // require './controllers/a`ddname.php';
        return view('addname');
    }
    public static function login(){
        return view('login');
    }
    public static function admin(){
        return view('admin');
    }
    public static function customer(){
        
        return view('customer');
    }
    public static function signup(){
        return view('signup');
    }
    public static function assign(){
        return view('assign');
    }
    public static function manager(){
        return view('manager');
    }
    public static function employee(){
        return view('employee');
    }
    public static function forgotpassword(){
        return view('forgotpassword');
    }
    public static function logout(){
        return view('logout');
    }
    public static function register(){
        return view('register');
    }
    public static function update(){
        return view('update');
    }
    public static function viewcustomer(){
        return view('customerlist');
    }
    public static function assignuser(){
        return view('assignuser');
    }
    public static function assignusertask(){
        return view('assignusertask');
    }
}



?>