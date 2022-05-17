<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/Utilisateur.php';
include_once '../implements/FUtilisateur.php';
include_once '../implements/FGlobalFunctions.php';

if(empty($_POST['up']))
{
    $return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addUser.php');
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addUser.php');
    }


    $user=new Utilisateur('',$_POST['prenom'],$_POST['nom'],$_POST['username'],$_POST['password'],$_POST['role']);
    $return=FGlobalFunctions::ifExist('utilisateur','username',$_POST['username']);
    if(is_bool($return))
    {
        $res=FUtilisateur::insert($user);
        $_SESSION['err']="<div class='alert alert-success'> Utilisateur ajouter avec succes !</div>";
        header('Location: ../addUser.php');

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addUser.php');
    }
}else{
    $return=FGlobalFunctions::checkEmpty($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addUser.php?id='.$_POST['up']);
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addUser.php?id='.$_POST['up']);
    }


    $user=new Utilisateur($_POST['up'],$_POST['prenom'],$_POST['nom'],$_POST['username'],$_POST['password'],$_POST['role']);
    $return=FGlobalFunctions::ifExist('utilisateur','username',$_POST['username']);
    if(is_bool($return))
    {
        $res=FUtilisateur::update($user);
        $_SESSION['err']="<div class='alert alert-success'> Utilisateur modifier avec succes !</div>";
        header('Location: ../list-users.php');

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addUser.php?id='.$_POST['up']);
    }
}






