<?php

include_once 'connecting.php';
include_once 'Client.php';

class FClient
{

    static function insert(Client $client)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO client SET nom=?,adresse=?,dateClient=?');
        $req->execute(array(
            $client->getNom(),
            $client->getAdresse(),
            $client->getDateClient()

        ));
        return $con->lastInsertId();
    }


    static function update(Client $client)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE client SET nom=?,adresse=?,dateClient=? WHERE id=?');
        $req->execute(array(
            $client->getNom(),
            $client->getAdresse(),
            $client->getDateClient(),
            $client->getId()
        ));
        return $client->getId();
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM client WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM client ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM client  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}