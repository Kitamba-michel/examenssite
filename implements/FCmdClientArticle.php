<?php

include_once 'connecting.php';
include_once 'cmdClientArticle.php';
class FCmdClientArticle
{  static function insert(cmdClientArticle $cmdClientArticle)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO cmdclientarticle SET idclient=?,idarticle=?,quantite=?,code=?');
        $req->execute(array(
            $cmdClientArticle->getIdClient(),
            $cmdClientArticle->getIdArticle(),
            $cmdClientArticle->getQuantite(),
            $cmdClientArticle->getId()


        ));
        return $con->lastInsertId();
    }



    static function selectAllByIdAndCode($id,$code)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdclientarticle c ,article a WHERE a.id=c.idArticle AND c.idClient=? AND c.code=?');
        $req->execute(array($id,$code));
        return $req->fetchAll();
    }
    static function update(cmdClientArticle $cmdClientArticle)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE cmdclientarticle SET idclient=?,idarticle=?,quantite=? WHERE id=?');
        $req->execute(array(
            $cmdClientArticle->getIdClient(),
            $cmdClientArticle->getIdArticle(),
            $cmdClientArticle->getQuantite(),
            $cmdClientArticle->getId()


        ));
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdclientarticle WHERE id=?');
        $req->execute(array(
            $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM cmdclientarticle ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM cmdclientarticle  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }



}