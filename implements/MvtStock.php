<?php


class MvtStock
{

    private $id;
    private $dateMvt;
    private $quantite;
    private $typeMvt;
    private $idArticle;

    /**
     * MvtStock constructor.
     * @param $id
     * @param $dateMvt
     * @param $quantite
     * @param $typeMvt
     * @param $idArticle
     */
    public function __construct($id, $dateMvt, $quantite, $typeMvt, $idArticle)
    {
        $this->id = $id;
        $this->dateMvt = $dateMvt;
        $this->quantite = $quantite;
        $this->typeMvt = $typeMvt;
        $this->idArticle = $idArticle;
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
    public function getDateMvt()
    {
        return $this->dateMvt;
    }

    /**
     * @param mixed $dateMvt
     */
    public function setDateMvt($dateMvt)
    {
        $this->dateMvt = $dateMvt;
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

    /**
     * @return mixed
     */
    public function getTypeMvt()
    {
        return $this->typeMvt;
    }

    /**
     * @param mixed $typeMvt
     */
    public function setTypeMvt($typeMvt)
    {
        $this->typeMvt = $typeMvt;
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




}