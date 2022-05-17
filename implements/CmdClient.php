<?php


class CmdClient
{

    private $id;
    private $code;
    private $dateCmd;
    private $idClient;
    private $listeCmdClient;

    /**
     * CmdClient constructor.
     * @param $id
     * @param $code
     * @param $dateCmd
     * @param $idClient
     * @param $listeCmdClient
     */
    public function __construct($id, $code, $dateCmd, $idClient, $listeCmdClient)
    {
        $this->id = $id;
        $this->code = $code;
        $this->dateCmd = $dateCmd;
        $this->idClient = $idClient;
        $this->listeCmdClient = $listeCmdClient;
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
    public function getDateCmd()
    {
        return $this->dateCmd;
    }

    /**
     * @param mixed $dateCmd
     */
    public function setDateCmd($dateCmd)
    {
        $this->dateCmd = $dateCmd;
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
    public function getListeCmdClient()
    {
        return $this->listeCmdClient;
    }

    /**
     * @param mixed $listeCmdClient
     */
    public function setListeCmdClient($listeCmdClient)
    {
        $this->listeCmdClient = $listeCmdClient;
    }





}