<?php

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 12:35
 */
class pdoinit extends PDO
{
    private $engine;
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pass;

    /**
     * pdoinit constructor.
     */
    public function __construct()
    {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->port = '3307';
        $this->dbname = 'agenda';
        $this->user = 'root';
        $this->pass = '84089554';
        $dns = $this->engine.':dbname='.$this->dbname.';host='.$this->host;

        try{
            parent::__construct($dns,$this->user, $this->pass);
        }catch (PDOException $exception){
            echo $exception->getCode();
            echo "<br/>";
            echo $exception->getMessage();
        }
    }
}