<?php

session_start();
$con = mysqli_connect('localhost', 'root', '', 'gaming_contest_project');

include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $team_no = $_POST['team_no'];
    $password = $_POST['password'];
    $sql = "INSERT INTO players (Name,id,email,phone,address,team_no,password) VALUES('$name','$id', '$email','$phone', '$address','$team_no','$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        session_start();
        $_SESSION["loggedin"] = true;
        header("location: index.php");

    }
}
?>