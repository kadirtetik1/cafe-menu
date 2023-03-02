<?php


try{

    $pdo=new PDO("mysql:host=localhost;dbname=cafemenu;charset=utf8","root","");

}

catch(PDOException $exception){

    echo $exception->getMessage();

}

?>