<?php

/**
 * Created by PhpStorm.
 * User: jean
 * Date: 12/11/16
 * Time: 12:35
 */
class pdoinit extends \PDO
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
        $this->engine = 'pgsql';
        $this->host = '185.169.96.133';
        $this->port = '3307';
        $this->dbname = 'jksistem_agenda';
        $this->user = 'jksistem_bdadmin';
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