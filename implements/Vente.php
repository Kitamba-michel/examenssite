<?php


class Vente
{

    private $id;
    private $code;
    private $dateVente;
    private $listeLigneVente;

    /**
     * Vente constructor.
     * @param $id
     * @param $code
     * @param $dateVente
     * @param $listeLigneVente
     */
    public function __construct($id, $code, $dateVente, $listeLigneVente)
    {
        $this->id = $id;
        $this->code = $code;
        $this->dateVente = $dateVente;
        $this->listeLigneVente = $listeLigneVente;
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
    public function getDateVente()
    {
        return $this->dateVente;
    }

    /**
     * @param mixed $dateVente
     */
    public function setDateVente($dateVente)
    {
        $this->dateVente = $dateVente;
    }

    /**
     * @return mixed
     */
    public function getListeLigneVente()
    {
        return $this->listeLigneVente;
    }

    /**
     * @param mixed $listeLigneVente
     */
    public function setListeLigneVente($listeLigneVente)
    {
        $this->listeLigneVente = $listeLigneVente;
    }


}