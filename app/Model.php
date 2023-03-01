<?php

abstract class Model
{
    protected $connexion;
    public    $tables   ;
    public    $id       ;

    private $host     ="localhost";
    private $dbname   = "blog"    ;
    private $username = "root"    ;
    private $password = "orange"  ;

    public function getConnection()
    {
        $this->_connexion = null;
        try
        {
            $this->_connexion = new PDO(
                'mysql:host' . $this->host . ';dbname=' . $this->dbname,
                $this->username,
                $this->password
            );
        }catch(PDOException $exception)
        {
            echo "Err : " . $exception->getMessage();
        }
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this.tables;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne()
    {
        $sql = "SELECT * FROM " . $this.tables . " where id=" . $this->id;
        $query = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
?>