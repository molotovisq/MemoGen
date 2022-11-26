<?php

session_start();
unset($_SESSION['user_id']);
unset($_SESSION['login_status']);
session_destroy();
header("location: ../login");
?>
