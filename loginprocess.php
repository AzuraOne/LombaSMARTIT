<?php
require "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * from akun where nama='$username' AND password='$password'";
    $ceklogin = mysqli_query($con, $query);
    $quer = mysqli_fetch_array($ceklogin);
    $affectedrows = mysqli_affected_rows($con);
    if ($affectedrows > 0) {
        if ($username == $quer['nama']) {
            if ($password == $quer['password']) {
                echo "Berhasil Login";

            }else {
                echo "Password Salah";
            }
        }else {
            echo "Username Salah";
        }
        
    }else {
        header("location: login.php");
    }






?>