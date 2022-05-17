<?php

include_once 'connecting.php';
include_once 'Categorie.php';

class FCategorie
{

    static function insert(Categorie $categorie)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO categorie SET designation=?,code=?,listeSousCategorie=?');
        $req->execute(array(
            $categorie->getDesignation(),

            $categorie->getCode(),

            $categorie->getListSousCategorie()
        ));
        return $con->lastInsertId();
    }


    static function update(Categorie $categorie)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE categorie SET designation=?,code=?,listeSousCategorie=? WHERE id=?');
        $req->execute(array(
            $categorie->getDesignation(),

            $categorie->getCode(),

            $categorie->getListSousCategorie(),
            $categorie->getId()
        ));
        return $categorie->getId();
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM categorie WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM categorie ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM categorie  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}