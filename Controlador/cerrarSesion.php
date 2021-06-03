<?php
session_start();
$_SESSION = array();
session_destroy();
$_COOKIE['sesionIniciada']="";
header("Location: ../index.php");