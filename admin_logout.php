<?php

session_start();

unset($_SESSION['id']);
unset($_SESSION['name']);
session_destroy();

header("Location:admin_login.php");
exit();