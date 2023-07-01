<?php
echo 'Please wait...';
$logedin = false;
$error = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include '../db_config.php';
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    if (isset($_POST['email'])) {
        $sql = "SELECT * FROM `customers` where cust_email = '$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['logedin'] = true;
                $_SESSION['name'] = $row['cust_name'];
                $path = $_SERVER[HTTP_REFERER];
                header("location:$path");
            } else {
                $error = true;
                $path = $_SERVER[HTTP_REFERER];
                header("location:$path");
            }




        } else {

            $path = $_SERVER[HTTP_REFERER];
            header("location:$path");
        }
    }
    
    if (isset($_POST['phone'])) {
        $sql = "SELECT * FROM `customers` where cust_phone = '$phone'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['logedin'] = true;
                $_SESSION['name'] = $row['cust_name'];
                $path = $_SERVER[HTTP_REFERER];
                header("location:$path");
            } else {
                $error = true;
                $path = $_SERVER[HTTP_REFERER];
                header("location:$path");
            }




        } else {

            $path = $_SERVER[HTTP_REFERER];
            header("location:$path");
        }
    }

}
?>