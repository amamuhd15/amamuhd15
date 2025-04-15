<?php

$server = "localhost";
$database = "studentform";
$username = "root";
$password = "";

//Establish a connection
$conn = mysqli_connect($server,$username, $password, $database);

//check connection
if(!$conn){
    die("Connection failed:". mysqli_connect_error());
}

if(isset($_POST['save'])){
    $spro = $_POST['sprogram'];
    $sname = $_POST['sname'];
    $sreg = $_POST['sreg'];
    $slevel= $_POST['slevel'];

    //insert Query
    $query = mysqli_query($con, "INSERT INTO users(StudentProgram, StudentName, StudentRegno, StudentLevel) VALUES('$spro', '$sname', '$sreg', '$slevel')");

    if(!$query){
        echo "Error had occur";
    }else{
        echo"Record inserted successfully";
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

        table{
            width: 100%;
            border-collapse:collapse;
            border:2px solid black; /*makes the borders visible*/
        }  
        
        th, td{
            border:2px solid black;
            padding:10px;
            text-align:center;

        }

        .btn-update{
            background-color: #007bff;
            color:white;
        }

        .btn-delete{
            background-color: #dc3545;
            color:white;
        }
        </style>
    </head>
    <body>
        <h4 class="header">PRESENTATION PAGE</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="strip">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Student Program</th>
                            <th>Student Name</th>
                            <th>Student Registration</th>
                            <th>Studen Level</th>
                            <th>Update</th>
                            <th>Delete</th>
                            </tr>
                        </thead>






    <tbody>
                            
                       

        <?php

        $result = mysqli_query($conn, "SELECT * FROM users");

       
        while($row = mysqli_fetch_assoc($result)){
            ?> 
            <tr>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['StudentProgram']; ?> </td>
            <td><?php echo $row['StudentName']; ?> </td>
            <td><?php echo $row['StudentRegno']; ?> </td>
            <td><?php echo $row['StudentLevel']; ?> </td>
            <td> <a class="btn btn-update" href = "update.php?id=<?php echo $row['id']; ?>">Update</a> </td>
            <td> <a class="btn btn-delete" href = "delete.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
            </tr>
            <?php
        }
        ?> 

    </tbody>
</table>                 
                </div>
            </div>
        </div>

    </body>
</html>


    

