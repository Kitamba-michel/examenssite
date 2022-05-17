<?php


class LigneCmdClient
{

    private $id;
    private $idArticle;
    private $idCmdClient;

    /**
     * LigneCmdClient constructor.
     * @param $id
     * @param $idArticle
     * @param $idCmdClient
     */
    public function __construct($id, $idArticle, $idCmdClient)
    {
        $this->id = $id;
        $this->idArticle = $idArticle;
        $this->idCmdClient = $idCmdClient;
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
    public function getIdCmdClient()
    {
        return $this->idCmdClient;
    }

    /**
     * @param mixed $idCmdClient
     */
    public function setIdCmdClient($idCmdClient)
    {
        $this->idCmdClient = $idCmdClient;
    }





}