<?php

session_start();

unset($_SESSION['id']);
unset($_SESSION['name']);
session_destroy();

header("Location:page-login.php");
exit();