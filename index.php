<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="/sur/ppp.php" method="post">
        <label for="">num</label>
        <input type="number" name="id"> 
        <label for="">name</label>
        <input type="text" name="name">
<input type="button" value="">
    </form>
<?php 

// $id = $_POST['id'];
// if ($_SERVER['request_method'] == 'POST'){

// $id = $_POST['id'];
// $name = $_POST['name'];



// }

$servername = "sql10.freesqldatabase.com";
$username = "sql10480041";
$password = "cFxuHIbXvs";
$database = "sql10480041";

$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "SERVER ONNECTED SUCCESSFYLLYYYYYYYYYYYY.......";
    // $sql = "CREATE DATABASE db2";
    // $dsd = mysqli_query($conn, $sql);
    // if ($dsd) {
    //     echo "DATABSE CREATED SUCCESSFULLY";
    // } else {
    //     echo "DATABSE NOOOT CREATED SUCCESSFULLY";
    // }

    $newtable = "CREATE TABLE `sql10480041`.`moonuuuuu` ( `sr` INT NOT NULL AUTO_INCREMENT , `id` INT(225) NOT NULL , `name` VARCHAR(225) NOT NULL , PRIMARY KEY (`sr`));";
    $table1 = mysqli_query($conn , $newtable);
    if ($table1) {
        echo "DATA ADDED";
    } else {
        echo "ERROR";
    }

    $inn = "INSERT INTO `moonuuuuu` (`sr`, `id`, `name`) VALUES (NULL, '50', 'TAMILANDA');";
    $ta = mysqli_query($conn, $inn);
    if ($ta) {
        echo "DATA ADDingggggggggggggggggg";
    } else {
        echo "ERROR";
    }
}
else {

    echo mysqli_connect_error();
}


?>



</body>
</html>