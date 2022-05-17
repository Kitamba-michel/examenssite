<?php


class SousCategorie
{

    private $id;
    private $code;
    private $designation;
    private $listeArticle;

    /**
     * SousCategorie constructor.
     * @param $id
     * @param $code
     * @param $designation
     * @param $listeArticle
     */
    public function __construct($id, $code, $designation, $listeArticle)
    {
        $this->id = $id;
        $this->code = $code;
        $this->designation = $designation;
        $this->listeArticle = $listeArticle;
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
    public function getListeArticle()
    {
        return $this->listeArticle;
    }

    /**
     * @param mixed $listeArticle
     */
    public function setListeArticle($listeArticle)
    {
        $this->listeArticle = $listeArticle;
    }


}