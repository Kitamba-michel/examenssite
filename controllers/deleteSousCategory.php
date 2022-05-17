<?php


include_once '../implements/FSousCategorie.php';

FSousCategorie::delete($_GET['id']);

header('Location: ../list-souscategory.php');