<?php


include_once '../implements/FArticle.php';

FArticle::delete($_GET['id']);

header('Location: ../list-products.php');