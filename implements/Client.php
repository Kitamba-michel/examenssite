<?php


class Client
{
    private $id;
    private $nom;
    private $adresse;
    private $dateClient;

    /**
     * Client constructor.
     * @param $id
     * @param $nom
     * @param $adresse
     * @param $dateClient
     */
    public function __construct($id, $nom, $adresse, $dateClient)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->dateClient = $dateClient;
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getDateClient()
    {
        return $this->dateClient;
    }

    /**
     * @param mixed $dateClient
     */
    public function setDateClient($dateClient)
    {
        $this->dateClient = $dateClient;
    }




}