<?php

date_default_timezone_set("Asia/Taipei");
session_start();

$Bottom =new DB('bottom');

class DB{
  protected $dsn="mysql:host=localhost;dbname=db04;charset=utf8";
  protected $table="";
  protected $pdo="";

  function __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn, 'root', '');
  }

  function all(...$arg){
    $sql="select * from $this->table ";
  }


  
}


?>