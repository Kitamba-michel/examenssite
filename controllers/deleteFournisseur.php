<?php


include_once '../implements/FFournisseur.php';

FFournisseur::delete($_GET['id']);

header('Location: ../list-fournisseur.php');