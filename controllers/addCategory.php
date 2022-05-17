<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/Categorie.php';
include_once '../implements/FCategorie.php';
include_once '../implements/FGlobalFunctions.php';

if(empty($_POST['up']))
{
    $return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php');
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php');
    }


    $category=new Categorie('',$_POST['designation'],$_POST['code'],'');
    $return=FGlobalFunctions::ifExist('categorie','designation',$_POST['designation']);
    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('categorie','code',$_POST['code']);
        if(is_bool($return))
        {
            $res=FCategorie::insert($category);
            $_SESSION['err']="<div class='alert alert-success'> Categorie ajouter avec succes !</div>";
            header('Location: ../addCategory.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addCategory.php');
        }


    }else{
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php');
    }





}else{
    $return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php?id='.$_POST['up']);
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php?id='.$_POST['up']);
    }


    $category=new Categorie($_POST['up'],$_POST['designation'],$_POST['code'],'');
    $return=FGlobalFunctions::ifExist('categorie','designation',$_POST['designation']);
    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('categorie','code',$_POST['code']);
        if(is_bool($return))
        {
            $res=FCategorie::update($category);
            $_SESSION['err']="<div class='alert alert-success'> Categorie Modifier avec succes !</div>";
            header('Location: ../list-category.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addCategory.php?id='.$_POST['up']);
        }


    }else{
        $_SESSION['err']=$return;
        header('Location: ../addCategory.php?id='.$_POST['up']);
    }





}
