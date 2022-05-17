<?php

include_once 'connecting.php';
include_once 'SousCategorie.php';

class FSousCategorie
{

    static function insert(SousCategorie $sousCategorie)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO sousCategorie SET code=?,designation=?,idCategorie=?');
        $req->execute(array(
            $sousCategorie->getCode(),
            $sousCategorie->getDesignation(),

            $sousCategorie->getListeArticle()
        ));
        return $con->lastInsertId();
    }


    static function update(SousCategorie $sousCategorie)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE sousCategorie SET code=?,designation=?,listeArticle=? WHERE id=?');
        $req->execute(array(
            $sousCategorie->getCode(),
            $sousCategorie->getDesignation(),

            $sousCategorie->getListeArticle(),
            $sousCategorie->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM sousCategorie WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM sousCategorie ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM sousCategorie  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}