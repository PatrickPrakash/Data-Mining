<?php
include "cnctn.php";
session_destroy();
header("location:login.php");
?>