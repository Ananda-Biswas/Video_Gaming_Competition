<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    $_SESSION = array();
    header("location: index.php");
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 42000, '/');
    }
}

?>