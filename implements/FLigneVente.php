<?php

include_once 'connecting.php';
include_once 'LigneVente.php';

class FLigneVente
{

    static function insert(LigneVente $ligneVente)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO ligneVente SET idArticle=?,idVente=?');
        $req->execute(array(
            $ligneVente->getIdArticle(),
            $ligneVente->getIdVente()
        ));
    }


    static function update(LigneVente $ligneVente)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE ligneVente SET idArticle=?,idVente=? WHERE id=?');
        $req->execute(array(
            $ligneVente->getIdArticle(),
            $ligneVente->getIdVente(),
            $ligneVente->getId()
        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM ligneVente WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM ligneVente ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE * FROM ligneVente  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}