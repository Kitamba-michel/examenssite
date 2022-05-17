<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once '../implements/Client.php';
include_once '../implements/FClient.php';
include_once '../implements/FGlobalFunctions.php';
if(empty($_POST['up']))
{
    $return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addClient.php');
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addClient.php');
    }


    $client=new Client('',$_POST['nom'],$_POST['adresse'],$_POST['dateClient']);
    $return=FGlobalFunctions::ifExist('client','nom',$_POST['nom']);
    if(is_bool($return))
    {
        $res=FClient::insert($client);
        $_SESSION['err']="<div class='alert alert-success'> Client ajouter avec succes !</div>";
        header('Location: ../addClient.php');

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addClient.php');
    }

}else
{
    $return=FGlobalFunctions::checkEmpty($_POST);
//var_dump($return);
    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addClient.php?id='.$_POST['up']);
    }
    $return=FGlobalFunctions::checkIsset($_POST);

    if(!is_bool($return))
    {
        $_SESSION['err']=$return;
        header('Location: ../addClient.php?id='.$_POST['up']);
    }


    $client=new Client($_POST['up'],$_POST['nom'],$_POST['adresse'],$_POST['dateClient']);
    $return=FGlobalFunctions::ifExist('client','nom',$_POST['nom']);
    if(is_bool($return))
    {
        $res=FClient::update($client);
        $_SESSION['err']="<div class='alert alert-success'> Client Modifier avec succes !</div>";
        header('Location: ../list-client.php');

    }else{
        $_SESSION['err']=$return;
        header('Location: ../addClient.php?id='.$_POST['up']);
    }
}
