<?php

include_once 'connecting.php';
include_once 'FLigneCmdClient.php';

class FLigneCmdClient
{

    static function insert(LigneCmdClient $lignecmdclient)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO lignecmdclient SET idArticle=?,idCmdClient=?');
        $req->execute(array(
            $lignecmdclient->getIdArticle(),
            $lignecmdclient->getIdCmdClient()
        ));
    }


    static function update(LigneCmdClient $lignecmdclient)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE lignecmdclient SET idArticle=?,idCmdClient=? WHERE id=?');
        $req->execute(array(
            $lignecmdclient->getIdArticle(),
            $lignecmdclient->getIdCmdClient(),
            $lignecmdclient->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM lignecmdclient WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM lignecmdclient ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE * FROM lignecmdclient  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}