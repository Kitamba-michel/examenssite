<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/Fournisseur.php';
include_once '../implements/FFournisseur.php';
include_once '../implements/FGlobalFunctions.php';
if(empty($_POST['up']))
{
    $return=FGlobalFunctions::checkEmpty($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php');
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php');
    }


    $fournisseur=new Fournisseur('',$_POST['codeFournisseur'],$_POST['nom'],'');

    $return=FGlobalFunctions::ifExist('fournisseur','codeFournisseur',$_POST['codeFournisseur']);

    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('fournisseur','nom',$_POST['nom']);
        if(is_bool($return))
        {
            $res=FFournisseur::insert($fournisseur);
            $_SESSION['err']="<div class='alert alert-success'> Fournisseur ajouter avec succes !</div>";
            header('Location: ../addFournisseur.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addFournisseur.php');
        }

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php');
    }
}else{
    $return=FGlobalFunctions::checkEmpty($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php?id='.$_POST['up']);
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php?id='.$_POST['up']);
    }


    $fournisseur=new Fournisseur($_POST['up'],$_POST['codeFournisseur'],$_POST['nom'],'');

    $return=FGlobalFunctions::ifExist('fournisseur','codeFournisseur',$_POST['codeFournisseur']);

    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('fournisseur','nom',$_POST['nom']);
        if(is_bool($return))
        {
            $res=FFournisseur::update($fournisseur);
            $_SESSION['err']="<div class='alert alert-success'> Fournisseur Modifier avec succes !</div>";
            header('Location: ../list-fournisseur.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addFournisseur.php?id='.$_POST['up']);
        }

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addFournisseur.php?id='.$_POST['up']);
    }
}






