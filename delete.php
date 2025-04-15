<?php

$server = "localhost";
$database = "studentform";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username, $password, $database);

$id = $_GET['id'];


    
    $query = mysqli_query($con, "DELETE FROM users WHERE id = '$id' ");
    
    
    if(!$query){
        echo "Error had occur";
        //echo "<script> alert ('')"
    }else{
        echo"Record updated successfully";
        header('location:present.php');
    }
    

