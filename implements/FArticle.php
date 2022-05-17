<?php

include_once 'connecting.php';
include_once 'Article.php';

class FArticle
{

    static function insert(Article $article)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO article SET designation=?,sousCategorie=?,code=?,prix=?,tauxTVA=?,prixTTC=?,qteStock=?');
        $req->execute(array(
            $article->getDesignation(),
            $article->getSousCategorie(),
            $article->getCode(),
            $article->getPrix(),
            $article->getTauxTVA(),
            $article->getPrixTTC(),
            $article->getQteStock()
        ));
        return $con->lastInsertId();
    }


    static function update(Article $article)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE article SET designation=?,sousCategorie=?,code=?,prix=?,tauxTVA=?,prixTTC=?,qteStock=? WHERE id=?');
        $req->execute(array(
            $article->getDesignation(),
            $article->getSousCategorie(),
            $article->getCode(),
            $article->getPrix(),
            $article->getTauxTVA(),
            $article->getPrixTTC(),
            $article->getQteStock(),
            $article->getId()
        ));
        return $article->getId();
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM article WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }

    static function updateQte($id,$newStock)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE article SET qteStock=? WHERE id=?');
        $req->execute(array(
            $newStock,$id
        ));

    }

    static function getCountArticleDay($idArticle)
    {
        $con=Connecting::getConnexion();
        $count=0;
        $req=$con->prepare('SELECT quantite FROM cmdclientarticle  WHERE idArticle=? AND DAY (dateCmd)=?');
        $req->execute(array(
            $idArticle,date('d')
        ));
        if($req->rowCount()>1)
        {
            foreach ($req->fetchAll() as $r)
            {
                $count+=$r['quantite'];
            }
            return $count;
        }
        return $req->fetch()['quantite'];
    }

    static function getCountArticleMonth($idArticle)
    {
        $con=Connecting::getConnexion();
        $count=0;
        $req=$con->prepare('SELECT quantite FROM cmdclientarticle  WHERE idArticle=? AND MONTH(dateCmd)=?');
        $req->execute(array(
            $idArticle,date('m')
        ));
        if($req->rowCount()>1)
        {
            foreach ($req->fetchAll() as $r)
            {
                $count+=$r['quantite'];
            }
            return $count;
        }
        return $req->fetch()['quantite'];
    }
    static function getCountArticleYear($idArticle)
    {
        $con=Connecting::getConnexion();
        $count=0;
        $req=$con->prepare('SELECT quantite FROM cmdclientarticle  WHERE idArticle=? AND YEAR(dateCmd)=?');
        $req->execute(array(
            $idArticle,date('Y')
        ));
        if($req->rowCount()>1)
        {
            foreach ($req->fetchAll() as $r)
            {
                $count+=$r['quantite'];
            }
            return $count;
        }
        return $req->fetch()['quantite'];
    }


    static function checkProduct($idArtictle)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT qteStock FROM article WHERE id=?');
        $req->execute(array(
            $idArtictle

        ));
        return $req->fetch()['qteStock'];

    }    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM article ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE FROM article  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}