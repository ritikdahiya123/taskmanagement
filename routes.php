<?php

$router->define([
    '/mvc/'=>'pagescontroller@home',
    '/mvc/about'=>'pagescontroller@about',
    '/mvc/contact'=>'pagescontroller@contact',
    '/mvc/name'=>'pagescontroller@addname',
    '/mvc/login'=>'pagescontroller@login',
    '/mvc/admin'=>'pagescontroller@admin',
    '/mvc/customer'=>'pagescontroller@customer',
    '/mvc/customer/login'=>'pagescontroller@login',
    '/mvc/signup'=>'pagescontroller@signup',
    '/mvc/assign'=>'pagescontroller@assign',
    '/mvc/manager'=>'pagescontroller@manager',
    '/mvc/employee'=>'pagescontroller@employee',
    '/mvc/forgotpassword'=>'pagescontroller@forgotpassword',
    '/mvc/logout'=>'pagescontroller@logout',
    '/mvc/register'=>'pagescontroller@register',
    '/mvc/update'=>'pagescontroller@update',
    // '/mvc/update/{$id}'=>'pagescontroller@update',
    '/mvc/viewcustomer'=>'pagescontroller@viewcustomer',
    '/mvc/assignuser'=>'pagescontroller@assignuser',
    '/mvc/assignusertask'=>'pagescontroller@assignusertask',

    //
    '/mvc/assigntask'=>'userscontroller@assigntask',
    '/mvc/addcustomer'=>'userscontroller@addcustomer',
    '/mvc/assigntask1'=>'userscontroller@assigntask1',
    '/mvc/assigntask2'=>'userscontroller@assigntask2',
    '/mvc/addmember'=>'userscontroller@addmember',
    '/mvc/addemployee'=>'userscontroller@addemployee',
    '/mvc/updatemember'=>'userscontroller@updatemember',
    '/mvc/employeestatus'=>'userscontroller@employeestatus',
    '/mvc/managerstatus'=>'userscontroller@managerstatus',
    '/mvc/customerstatus'=>'userscontroller@customerstatus',



    



]);

?>