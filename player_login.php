<?php
session_start();


include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];



    $sql = "Select * from players where Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        session_start();
        $_SESSION["loggedin"] = true;
        header("location: player_dashboard.php");

    }

}




?>