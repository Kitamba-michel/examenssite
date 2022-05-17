<?php

include_once '../implements/FCmdClient.php';


if(isset($_GET['id']) && !empty($_GET['id']))
{
    FCmdClient::updateEtat($_GET['id'],'');
    header('Location: ../list-command.php');

}