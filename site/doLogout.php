<?php
session_destroy();
$_SESSION['usuario'] = "";
    header("location:index.php");
    exit();
 ?>