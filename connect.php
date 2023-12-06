<?php

$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);


session_start();
$con=mysqli_connect("localhost","root","","food_db");

if(isset($_POST['save_datetime']))
{
    $db_name=$_POST['name'];
    $current_dt=$_POST['current_dt'];

    $query= "INSERT INTO DEMO(name currentdt) VALUES('$db_name','db_current_dt')";
    $query_run=mysqli-query($con,$query);

    if($query-run)
    {
        $_SESSION['status']="Date and Time Inserted successfully";
        header("Location:checkout.php");
    }
    else{
        $_SESSION['status']="Date and Time is Not Inserted";
        header("Location:checkout.php");
    }
}


?>