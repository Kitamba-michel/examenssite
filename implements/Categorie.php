<?php


class Categorie
{
    private $id;
    private $designation;
    private $code;
    private $listSousCategorie;

    /**
     * Categorie constructor.
     * @param $id
     * @param $designation
     * @param $code
     * @param $listSousCategorie
     */
    public function __construct($id, $designation, $code, $listSousCategorie)
    {
        $this->id = $id;
        $this->designation = $designation;
        $this->code = $code;
        $this->listSousCategorie = $listSousCategorie;
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
    public function getListSousCategorie()
    {
        return $this->listSousCategorie;
    }

    /**
     * @param mixed $listSousCategorie
     */
    public function setListSousCategorie($listSousCategorie)
    {
        $this->listSousCategorie = $listSousCategorie;
    }




}