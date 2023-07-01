<?php
session_start();
session_unset();
session_destroy();
$path = $_SERVER[HTTP_REFERER];
                header("location:$path");
?>