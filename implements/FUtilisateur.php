<?php

include_once 'connecting.php';
include_once 'Utilisateur.php';

class FUtilisateur
{

    static function insert(Utilisateur $utilisateur)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('INSERT INTO utilisateur SET prenom=?,username=?,nom=?,role=?,password=?');
        $req->execute(array(
            $utilisateur->getPrenom(),
            $utilisateur->getUsername(),
            $utilisateur->getNom(),
            $utilisateur->getRole(),
            $utilisateur->getPassword()
        ));
        return $con->lastInsertId();
    }


    static function update(Utilisateur $utilisateur)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE utilisateur SET prenom=?,username=?,nom=?,role=?,password=? WHERE id=?');
        $req->execute(array(
            $utilisateur->getPrenom(),
            $utilisateur->getUsername(),
            $utilisateur->getNom(),
            $utilisateur->getRole(),
            $utilisateur->getPassword(),
            $utilisateur->getId()
        ));
        return $utilisateur->getId();
    }


    static function selectOne($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM utilisateur WHERE id=?');
        $req->execute(array(
           $id
        ));
        return $req->fetch();
    }

    static function selectPicure($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT profil FROM utilisateur WHERE id=?');
        $req->execute(array(
            $id
        ));
        return $req->fetch()['profil'];
    }

    static function login($username,$password)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM utilisateur WHERE username=? AND password=?');
        $req->execute(array(
            $username,$password
        ));
        return $req->fetch();
    }

    static function udpateProfil($name,$idUser)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('UPDATE  utilisateur SET profil=? WHERE id=?');
        $req->execute(array(
            $name,$idUser
        ));

    }


    static function selectAll()
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('SELECT * FROM utilisateur ');
        $req->execute(array(

        ));
        return $req->fetchAll();
    }

    static function delete($id)
    {
        $con=Connecting::getConnexion();
        $req=$con->prepare('DELETE  FROM utilisateur  WHERE id=?');
        $req->execute(array(
            $id
        ));

    }





}