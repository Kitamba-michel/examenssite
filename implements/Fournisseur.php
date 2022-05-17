<?php


class Fournisseur
{
    private $id;
    private $codeFournisseur;
    private $nom;
    private $listeCmd;

    /**
     * Fournisseur constructor.
     * @param $id
     * @param $codeFournisseur
     * @param $nom
     * @param $listeCmd
     */
    public function __construct($id, $codeFournisseur, $nom, $listeCmd)
    {
        $this->id = $id;
        $this->codeFournisseur = $codeFournisseur;
        $this->nom = $nom;
        $this->listeCmd = $listeCmd;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCodeFournisseur()
    {
        return $this->codeFournisseur;
    }

    /**
     * @param mixed $codeFournisseur
     */
    public function setCodeFournisseur($codeFournisseur)
    {
        $this->codeFournisseur = $codeFournisseur;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getListeCmd()
    {
        return $this->listeCmd;
    }

    /**
     * @param mixed $listeCmd
     */
    public function setListeCmd($listeCmd)
    {
        $this->listeCmd = $listeCmd;
    }


    

}