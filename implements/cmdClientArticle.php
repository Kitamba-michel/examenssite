<?php


class cmdClientArticle
{
    private $id;
    private $idClient;
    private $idArticle;
    private $quantite;

    /**
     * cmdClientArticle constructor.
     * @param $id
     * @param $idClient
     * @param $idArticle
     * @param $quantite
     */
    public function __construct($id, $idClient, $idArticle, $quantite)
    {
        $this->id = $id;
        $this->idClient = $idClient;
        $this->idArticle = $idArticle;
        $this->quantite = $quantite;
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
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * @param mixed $idArticle
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }




}