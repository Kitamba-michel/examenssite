<?php

include_once 'connecting.php';
include_once 'Vente.php';

class FVente
{

    static function insert(Vente $vente)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO vente SET code=?,dateVente=?,listeLigneVente=?');
        $req->execute(array(
            $vente->getCode(),
            $vente->getDateVente(),
            $vente->getListeLigneVente()

        ));
    }


    static function update(Vente $vente)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE vente SET code=?,dateVente=?,listeLigneVente=? WHERE id=?');
        $req->execute(array(
            $vente->getCode(),
            $vente->getDateVente(),
            $vente->getListeLigneVente(),
            $vente->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM vente WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM vente ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM vente  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}