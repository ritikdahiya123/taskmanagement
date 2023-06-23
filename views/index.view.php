
    
    <?php require 'views/partials/header.php';?>
    <?php require('views/partials/nav.php');?>
    <!-- <form action="name" method="post">
        <input type="text"  id="" name="name">
        <input type="email" name="email" id="">
        <input type="submit" value="submit" name='submit'>
    </form> -->
    <form action="name" method="post">
        <input type="text"  id="" name="name">
        <input type="email" name="email" id="">
        <input type="number" name="number" id="">
        <input type="submit" value="submit" name='submit'>
    </form>
    <?php require 'views/partials/footer.php';?>
  
   <?php 
   $config = require 'config.php';
   $pdo = connection::make($config['database']);
   $o = new querybuilder($pdo);
   
  $show =$o->select('users','1','*','id');
  print_r($show);?>
<!-- print_r($res); -->



