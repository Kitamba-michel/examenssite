<?php


class LigneVente
{

    private $id;
    private $idArticle;
    private $idVente;

    /**
     * LigneVente constructor.
     * @param $id
     * @param $idArticle
     * @param $idVente
     */
    public function __construct($id, $idArticle, $idVente)
    {
        $this->id = $id;
        $this->idArticle = $idArticle;
        $this->idVente = $idVente;
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
    public function getIdVente()
    {
        return $this->idVente;
    }

    /**
     * @param mixed $idVente
     */
    public function setIdVente($idVente)
    {
        $this->idVente = $idVente;
    }




}