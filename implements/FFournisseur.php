<?php

include_once 'connecting.php';
include_once 'Fournisseur.php';

class FFournisseur
{

    static function insert(Fournisseur $fournisseur)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO fournisseur SET codeFournisseur=?,nom=?,listeCmd=?');
        $req->execute(array(
            $fournisseur->getCodeFournisseur(),
            $fournisseur->getNom(),
            $fournisseur->getListeCmd()
        ));
        return $con->lastInsertId();
    }


    static function update(Fournisseur $fournisseur)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE fournisseur SET codeFournisseur=?,nom=?,listeCmd=? WHERE id=?');
        $req->execute(array(
            $fournisseur->getCodeFournisseur(),
            $fournisseur->getNom(),
            $fournisseur->getListeCmd(),
            $fournisseur->getId()
        ));
        return $fournisseur->getId();
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM fournisseur WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM fournisseur ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM fournisseur  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}