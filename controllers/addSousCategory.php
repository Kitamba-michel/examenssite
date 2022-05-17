<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/SousCategorie.php';
include_once '../implements/FSousCategorie.php';
include_once '../implements/FGlobalFunctions.php';

$return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
if(!is_bool($return))
{
    $_SESSION['err']=$return;
    header('Location: ../addSousCategory.php');
}
$return=FGlobalFunctions::checkIsset($_POST);

if(!is_bool($return))
{
    $_SESSION['err']=$return;
    header('Location: ../addSousCategory.php');
}


$category=new SousCategorie('',$_POST['code'],$_POST['designation'],$_POST['categorie']);
$return=FGlobalFunctions::ifExist('souscategorie','designation',$_POST['designation']);
if(is_bool($return))
{
    $return=FGlobalFunctions::ifExist('souscategorie','code',$_POST['code']);
    if(is_bool($return))
    {
        $res=FSousCategorie::insert($category);
        $_SESSION['err']="<div class='alert alert-success'>Sous Categorie ajouter avec succes !</div>";
        header('Location: ../addSousCategory.php');
    }else{
        $_SESSION['err']=$return;
        header('Location: ../addSousCategory.php');
    }


}else{
    $_SESSION['err']=$return;
    header('Location: ../addSousCategory.php');
}




