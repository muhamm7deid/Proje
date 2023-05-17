<?php
include "baglan.php";
ob_start();
session_start();
$email=$_POST["email"];
$pass=$_POST["pswd"];

    $uyesorgula=$db->prepare("select * from uyeler where email=:mail and sifre=:password ");
    $uyesorgula->execute(array(
        'mail' => $email,
        'password' =>$pass
    ));

    $say=$uyesorgula->rowCount();

        if($say==1)
        {
            echo $_SESSION['userkullanici_mail']=$email;

            header("Location:admin.php");
            exit;
        }
        else
        {
            header("Location:Login.html");
        }
?>