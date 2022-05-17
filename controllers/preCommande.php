<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/CmdClient.php';
include_once '../implements/FCmdClient.php';
include_once '../implements/FGlobalFunctions.php';

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
    header('Location: ../preCommande.php');
}


$cmd=new CmdClient('',$_POST['code'],'',$_POST['client'],'');

$return=FGlobalFunctions::ifExist('cmdclient','code',$_POST['code']);
if(is_bool($return))
{
    $res=FCmdClient::insert($cmd);
    //$_SESSION['err']="<div class='alert alert-success'> Categorie ajouter avec succes !</div>";
    header('Location: ../newCommande.php?code='.$_POST['code'].'&id='.$_POST['client']);
}else{
    $_SESSION['err']=$return;
    header('Location: ../preCommande.php');
}







