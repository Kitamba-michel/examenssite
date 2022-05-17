<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/FUtilisateur.php';


if(isset($_POST['username'],$_POST['password']) && !empty($_POST['username'])&& !empty($_POST['password']))
{
    $res=FUtilisateur::login($_POST['username'],$_POST['password']);

    if(is_array($res))
    {
        $_SESSION['username']=$_POST['username'];
        $_SESSION['role']=$res['role'];
        $_SESSION['idUser']=$res['id'];

        header('Location: ../dashboard.php');
    }else{
        $_SESSION['err']="<div class='alert alert-danger'>Username ou Mot de passe incorrect !</div>";
        header('Location: ../login.php');
    }
}else{
    $_SESSION['err']="<div class='alert alert-danger'>Veuillez remplir tous les champs!</div>";
    header('Location: ../login.php');
}