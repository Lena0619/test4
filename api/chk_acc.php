<?php

include_once "../base.php";

// echo $Mem->count(['acc'=>$_GET[$acc]]);-->最簡化的版本只需一行

$acc=$_GET['acc'];

$chk=$Mem->count(['acc'=>$acc]);

echo $chk;


?>