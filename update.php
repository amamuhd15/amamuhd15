 <?php

$server = "localhost";
$database = "studentform";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username, $password, $database);

$id = $_GET['id'];

if(isset($_POST['save'])){
$spro = $_POST['sprogram'];
$sname = $_POST['sname'];
$sreg = $_POST['sreg'];
$slevel= $_POST['slevel'];

$query = mysqli_query($con, "UPDATE  users SET StudentProgram ='$spro', StudentName = '$sname', StudentRegno ='$sreg', StudentLevel = '$slevel' WHERE id = '$id' ");



if(!$query){
    echo "Error had occur";
    //echo "<script> alert ('')"
}else{
    echo"Record updated successfully";
    header('location:present.php');
}
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset= "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="">
        <style>
        .header{
            width: 100%;
            height:20%;
            background-color:black;
            color:white;
            align-content:center;
            padding-left: 100px;
            padding-top:30px;
            padding-bottom: 30px;
        }
        </style>
    </head>
    <body>
        <h4 class="header">REGISTRATION PAGE</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-log-6">

                    <?php
                        if(isset($_GET['id'])){

                            $id = $_GET['id'];
                            echo $id;
                            
                            $queryOne = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
                        
                            $row = mysqli_fetch_assoc($queryOne);
                        
                        }
                    ?>
                        <form action="#" class="group" method="post">
                            <label for="">Student Program</label><input class="form-control" type="text" required name="sprogram" value="<?php  echo $row['StudentProgram']; ?>"><br><br>
                            <label for="">Student Name</label><input class="form-control" type="text" required  name="sname" value="<?php  echo $row['StudentName']; ?>"><br><br>
                            <label for="">Student RegNo</label><input class="form-control"type="text" required  name="sreg" value="<?php  echo $row['StudentRegno']; ?>"><br><br>
                            <label for="">Student Level</label><input class="form-control" type="text" required  name="slevel" value="<?php  echo $row['StudentLevel']; ?>"><br><br>
                            <input type="submit" class="btn-btn-primary" value="update"  name="save">
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>