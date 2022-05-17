<?php

include_once 'connecting.php';
include_once 'CmdClient.php';

class FCmdClient
{

    static function insert(CmdClient $cmdClient)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO cmdClient SET code=?,idClient=?');
        $req->execute(array(
            $cmdClient->getCode(),
            $cmdClient->getIdClient()
        ));
        return $con->lastInsertId();
    }


    static function update(CmdClient $cmdClient)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE cmdClient SET code=?,dateCmd=?,idClient=?,listeLigneClient=? WHERE id=?');
        $req->execute(array(
            $cmdClient->getCode(),
            $cmdClient->getDateCmd(),
            $cmdClient->getIdClient(),
            $cmdClient->getListeCmdClient(),
            $cmdClient->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdClient WHERE id=? or code=?');
        $req->execute(array(
           $id,$id
        ));
        return $req->fetch();
    }

    static function selectCmd()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdClient c,client t WHERE t.id=c.idClient');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdClient ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM cmdClient  WHERE id=? OR code=?');
        $req->execute(array(
            $id,$id
        ));

    }


    static function updateEtat($code,$etat)
    {

        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE cmdClient SET etat=?  WHERE code=?');
        $req->execute(array(
            "Traiter",$code
        ));
    }





}