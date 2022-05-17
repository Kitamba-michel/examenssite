<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/cmdClientArticle.php';
include_once '../implements/FCmdClientArticle.php';
include_once '../implements/FGlobalFunctions.php';
include_once '../implements/FArticle.php';

$return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
if(!is_bool($return))
{
    $_SESSION['err']=$return;
    header('Location: ../newCommande.php');
}
$return=FGlobalFunctions::checkIsset($_POST);

if(!is_bool($return))
{
    $_SESSION['err']=$return;
    header('Location: ../newCommande.php?code='.$_POST['code'].'&id='.$_POST['id']);
}
$stock=FArticle::checkProduct($_POST['article']);
if($stock < $_POST['qte'] )
{
    $_SESSION['err']="<div class='alert alert-danger'> Impossible d'ajouter Quantité demander ".$_POST['qte'] ." disponible $stock! Stock insufissant</div>";
    header('Location: ../newCommande.php?code='.$_POST['code'].'&id='.$_POST['id']);}

else{
    $cmd=new cmdClientArticle($_POST['code'],$_POST['id'],$_POST['article'],$_POST['qte']);


    $res=FCmdClientArticle::insert($cmd);
    FArticle::updateQte($_POST['article'],$stock-$_POST['qte']);
    $_SESSION['err']="<div class='alert alert-success'> Produit commande ".$_POST['code']." ajouter avec succes !</div>";
    header('Location: ../newCommande.php?code='.$_POST['code'].'&id='.$_POST['id']);
}









