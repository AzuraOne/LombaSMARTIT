<?php
require "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * from akun where nama='$username' AND password='$password'";
    $ceklogin = mysqli_query($con, $query);
    $affectedrows = mysqli_affected_rows($con);
    if ($affectedrows > 0) {
        if ($username == $query['nama']) {
            if ($password == $query['password']) {
                
            }
        }else {
            echo "Password Salah";
        }
        
    }else {
        header("location: login.php");
    }






?>