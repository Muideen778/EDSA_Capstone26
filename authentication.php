<?php
if(!isset($_SESSION['id']) && !isset($_SESSION['name'])){
    header("Location:admin_login.php?error=The page you visited requires login");
    
}