<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/Article.php';
include_once '../implements/FArticle.php';
include_once '../implements/FGlobalFunctions.php';



if(empty($_POST['up']))
{
    $return=FGlobalFunctions::checkEmpty($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php');
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php');
    }


    $product=new Article('',$_POST['designation'],$_POST['sousCategorie'],$_POST['code'],$_POST['prix'],$_POST['tauxTVA'],$_POST['prixTTC'],$_POST['qteStock']);
    $return=FGlobalFunctions::ifExist('article','designation',$_POST['designation']);
    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('article','code',$_POST['code']);
        if(is_bool($return))
        {
            $res=FArticle::insert($product);
            $_SESSION['err']="<div class='alert alert-success'> Article ajouter avec succes !</div>";
            header('Location: ../addProduct.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addProduct.php');
        }


    }else{
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php');
    }
}else
{
    $return=FGlobalFunctions::checkEmpty($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php?id='.$_POST['up']);
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php?id='.$_POST['up']);
    }


    $product=new Article($_POST['up'],$_POST['designation'],$_POST['sousCategorie'],$_POST['code'],$_POST['prix'],$_POST['tauxTVA'],$_POST['prixTTC'],$_POST['qteStock']);
    $return=FGlobalFunctions::ifExist('article','designation',$_POST['designation']);
    if(is_bool($return))
    {
        $return=FGlobalFunctions::ifExist('article','code',$_POST['code']);
        if(is_bool($return))
        {
            $res=FArticle::update($product);
            $_SESSION['err']="<div class='alert alert-success'> Article modifier avec succes !</div>";
            header('Location: ../list-products.php');
        }else{
            $_SESSION['err']=$return;
            header('Location: ../addProduct.php?id='.$_POST['up']);
        }


    }else{
        $_SESSION['err']=$return;
        header('Location: ../addProduct.php?id='.$_POST['up']);
    }
}





