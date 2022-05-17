<?php


include_once '../implements/FCategorie.php';

FCategorie::delete($_GET['id']);

header('Location: ../list-category.php');