<?php

include_once 'connecting.php';
include_once 'MvtStock.php';

class FMvtStock
{

    static function insert(MvtStock $mvtStock)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO mvtStock SET dateMvt=?,quantite=?,typeMvt=?,idArticle=?');
        $req->execute(array(
            $mvtStock->getDateMvt(),
            $mvtStock->getQuantite(),
            $mvtStock->getTypeMvt(),
            $mvtStock->getIdArticle()
        ));
    }


    static function update(MvtStock $mvtStock)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE mvtStock SET dateMvt=?,quantite=?,typeMvt=?,idArticle=? WHERE id=?');
        $req->execute(array(
            $mvtStock->getDateMvt(),
            $mvtStock->getQuantite(),
            $mvtStock->getTypeMvt(),
            $mvtStock->getIdArticle(),
            $mvtStock->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM mvtStock WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM mvtStock ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM mvtStock  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}