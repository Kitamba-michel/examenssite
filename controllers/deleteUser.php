<?php


include_once '../implements/FUtilisateur.php';

FUtilisateur::delete($_GET['id']);

header('Location: ../list-users.php');