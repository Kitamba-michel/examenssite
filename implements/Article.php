<?php


class Article
{

    private $id;
    private $designation;
    private $sousCategorie;
    private $code;
    private $prix;
    private $tauxTVA;
    private $prixTTC;
    private $qteStock;

    /**
     * Article constructor.
     * @param $id
     * @param $designation
     * @param $sousCategorie
     * @param $code
     * @param $prix
     * @param $tauxTVA
     * @param $prixTTC
     * @param $qteStock
     */
    public function __construct($id, $designation, $sousCategorie, $code, $prix, $tauxTVA, $prixTTC, $qteStock)
    {
        $this->id = $id;
        $this->designation = $designation;
        $this->sousCategorie = $sousCategorie;
        $this->code = $code;
        $this->prix = $prix;
        $this->tauxTVA = $tauxTVA;
        $this->prixTTC = $prixTTC;
        $this->qteStock = $qteStock;
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
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }

    /**
     * @param mixed $sousCategorie
     */
    public function setSousCategorie($sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getTauxTVA()
    {
        return $this->tauxTVA;
    }

    /**
     * @param mixed $tauxTVA
     */
    public function setTauxTVA($tauxTVA)
    {
        $this->tauxTVA = $tauxTVA;
    }

    /**
     * @return mixed
     */
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    /**
     * @param mixed $prixTTC
     */
    public function setPrixTTC($prixTTC)
    {
        $this->prixTTC = $prixTTC;
    }

    /**
     * @return mixed
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }

    /**
     * @param mixed $qteStock
     */
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;
    }




}