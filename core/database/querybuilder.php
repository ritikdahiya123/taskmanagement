<?php

class querybuilder
{
    protected $pdo;
    public function __construct( $pdo)
    {
        $this->pdo = $pdo;
    }
    function select($table,$where,$option,$col)
    {

        $select = $this->pdo->prepare("select $option from $table where $col='$where'");
        //  print_r( $select);
        //  die();
        $select->execute();
        return $data=$select->fetchall();
    }
    // function update($table,$where){
    //     $update=$this->pdo->prepare('update into $table $col=$value where $key=$whree ');
    //     $update->execute();
    //     return $data=$update->fetchall();

    // }
    public function update($table, $value, $where,$col)
    {
        // die();
        unset($value['url']);
        unset($value['updatemember']);
        unset($value['changestatus']);
        unset($value['user_id']);
        $key = array_keys($value);
        
        $value = array_values($value);
        // print_r ($key);
        //  echo "<br>";
        //  print_r($value);
        //  die();
        for ($i = 0; $i < count($key); $i++) {
            $update =$this->pdo->query("update  `$table` set `$key[$i]` = '$value[$i]' where `$col`='$where'");
            // $update->bindParam(1,$where);
            // $update->execute();
            print_r($update);
            // die();

        }
        if ($update) {
            // header("location:adminpage.php")
            echo "data updated";
        } else {
            echo "not updated";
        }
    }

    function insert($table,$parameter){
        $sql=sprintf(
            "insert %s (%s) values(%s)",$table,implode(',',array_keys($parameter)),':'.implode(',:',array_keys($parameter))
        );
        try{
        $statement=$this->pdo->prepare($sql);
        $statement->execute($parameter);
        }
        catch(PDOException $e){
            die('something went wrong');
        }
        // var_dump($sql);
        // die();

        // $insert=$this->pdo-prepare("insert into $table ")
        // $statement->execute(['name'=>'joe']);
        // die(var_dump(array_keys(($parameter))));
    }
function select1($table){

    $select = $this->pdo->prepare("select * from $table");
    // echo $select;
    $select->execute();
    return $data=$select->fetchall();
}

  

}
// $o = new querybuilder($pdo);
// $s=$o->select('users',1,'email','id');
// print_r($s);
// die();
// if (isset($_POST['login'])) {
//   $o->insert('userdata', [
//     'name' => $_POST['name'],
//     'email' => $_POST['email'],
//     'number' => $_POST['number']


//   ]);

