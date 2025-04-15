<?php

$server = "localhost";
$database = "studentform";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username, $password, $database);

if(isset($_POST['save'])){
$spro = $_POST['sprogram'];
$sname = $_POST['sname'];
$sreg = $_POST['sreg'];
$slevel= $_POST['slevel'];

$query = mysqli_query($con, "INSERT INTO users(StudentProgram, StudentName, StudentRegno, StudentLevel) VALUES('$spro', '$sname', '$sreg', '$slevel')");

?>

<?php

if(!$query){
    echo "Error had occur";
}else{
    echo "Record inserted successfully";
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
        .header {
            width: 100%;
            background-color: black;
            color: white;
            text-align: left;
            padding: 20px 100px;
            font-size: 24px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .btn-btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-btn-primary:hover {
            background-color: #0056b3;
        }
        </style>
    </head>
    <body>
        <h4 class="header">REGISTRATION PAGE</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-log-6">

                    
                        <form action="#" class="group" method="post">
                            <label for="">Student Program</label>
                            <input class="form-control" type="text" required name="sprogram"><br><br>
                            <label for="">Student Name</label>
                            <input class="form-control" type="text" required name="sname"><br><br>
                            <label for="">Student RegNo</label>
                            <input class="form-control" type="text" required name="sreg"><br><br>
                            <label for="">Student Level</label>
                            <input class="form-control" type="text" required name="slevel"><br><br>
                            <input type="submit" class="btn-btn-primary" value="save" name="save">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>