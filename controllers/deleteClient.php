<?php


include_once '../implements/FClient.php';

FClient::delete($_GET['id']);

header('Location: ../list-client.php');