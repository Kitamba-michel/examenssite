<?php
if(!isset($_SESSION))
{
    session_start();
}

include_once '../implements/FUtilisateur.php';

if(isset($_FILES['img']) && !empty($_FILES['img']))
{
    if(!file_exists('../popcorn/'))
    {
        mkdir('../popcorn/');
    }

    include_once '../implements/FUtilisateur.php';


    $ex=new SplFileInfo($_FILES['img']['name']);
    $name=uniqid().'.'.$ex->getExtension();

    if(move_uploaded_file($_FILES['img']['tmp_name'],'../popcorn/'.$_FILES['img']['name']))
    {
        if(file_exists('../popcorn/'.$_FILES['img']['name']))
        {
            rename('../popcorn/'.$_FILES['img']['name'],'../popcorn/'.$name);
            FUtilisateur::udpateProfil($name,$_SESSION['idUser']);
            $_SESSION['err']="<div class='alert alert-success'>Photo profil changer avec succes !</div>";
            header('Location: ../update-profil.php');
        }
    }else{
        $_SESSION['err']="<div class='alert alert-danger'>Impossbile de changer le profil !</div>";
        header('Location: ../update-profil.php');
    }
}else{
    $_SESSION['err']="<div class='alert alert-danger'>Choisir une photo stp !</div>";
    header('Location: ../update-profil.php');
}
