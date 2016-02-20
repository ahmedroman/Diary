<?php
session_start();
session_unset();
//unset($_SESSION["teachername"]);
//unset($_SESSION["studentname"]);

session_destroy();
header("location:index.php");


?>