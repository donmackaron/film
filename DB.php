<?php
class database{
    public $servername='';
    public $dbname='';
    public $name='';
    public $password='';
    public $DB;
    function __construct(){
        try{
            $this->servername="localhost";
            $this->dbname="films";
            $this->name="don_mackaron";
            $this->password="Bezborodov48";
            $this->DB=new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->name,$this->password);
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e){
echo "connection failed". $e->getMessage();
        }
    }
}