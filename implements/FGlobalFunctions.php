<?php

include_once 'connecting.php';
class FGlobalFunctions
{


    static function checkEmpty($data)
    {
        foreach ($data as $k => $datum)
        {
            if (empty($datum))
            {
                return "<div class='alert alert-danger'>Champs $k vide !</div>";
            }
        }
        return true;
    }

    static function checkIsset($data)
    {
        foreach ($data as $k => $datum)
        {
            if (!isset($datum))
            {
                return "<div class='alert alert-danger'> Données $k requis(e) !</div>";
            }
        }
        return true;
    }

    static function ifExist($table,$champ,$value)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM '.$table.' WHERE '.$champ.' =?');
        $req->execute(array($value));
        if($req->rowCount()>0)
        {
            return "<div class='alert alert-danger'> $value deja utilisé !</div>";
        }
        return false;
    }
}