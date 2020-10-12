<?php
require "DB.php";
class login {
public $email;
public $login;
public $password;
public $button_auto;
public $button_exit;
public $DaBa;
public function __construct($email, $login, $password, $button_auto, $button_exit){
    $this->email=$email;
    $this->password=$password;
    $this->login=$login;
    $this->button_auto=$button_auto;
    $this->button_exit=$button_exit;
    $this->DaBa = new database();
    $this->validation();
}
public function registration(){
    try {
$reg= $this->DaBa->DB->prepare("INSERT INTO `user` (`email`, `login`, `password`) VALUES ('$this->email', '$this->login', MD5('$this->password'))");
$reg->execute();
//$this->DaBa->DB->exec($reg);
echo "Вы зарегестрированы";
    } catch(PDOException $e){
echo $reg. $e->getMessage();
    }
}
public function autorization(){
    $this->DaBa;
}
public function validation(){
    try{
    $val=$this->DaBa->DB->prepare("SELECT * FROM `user` WHERE `email` LIKE '$this->email' AND login ='$this->login' AND password = MD5('$this->password')");
    //$this->DaBa->DB->exec($val);
    $val->execute();
    $val=$this->DaBa->DB->prepare("SELECT FOUND_ROWS()");
    $val->execute();
    $row_count=$val->fetchColumn();
    if($this->email!="" && $this->login !="" && $this->password !="") {
        if(isset($_POST["reg"]) && $row_count == 0) {
            $this->registration();
        }
        else if (isset($_POST["reg"]) && $row_count > 0 && !isset($_POST["auto"])) echo "Вы уже зарегестрированы";
        if(isset($_POST["auto"]) && $row_count > 0){
            header ("Location:OK.php");
        }
        else if(isset($_POST["auto"]) && $row_count == 0 && !isset($_POST["reg"])) echo "Вы не зарегестрированы";
    }
}catch(PDOException $e){
        echo $val. $e->getMessage();
    }
    }
    }

