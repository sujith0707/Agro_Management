<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "agromanagement";

$con = mysqli_connect($server,$username,$password,$database);


if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $sql2 = "DELETE FROM `cropdb` WHERE `c_id`= '$id'";
    $delete = mysqli_query($con,);
    if($delete){
      Echo "delete success";
    }
    
  }
?>