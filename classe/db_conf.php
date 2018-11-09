<?php

class dbconnect{

public $bdclient;
public function database(){

 try {
   $this->bdclient = new PDO('mysql:host=localhost;dbname=Otechnologie;charset=utf8', 'root', '');
  }
  catch (Exception $e) {
     die('Erreur : ' . $e->getMessage());
    }

  return $this->bdclient;
}




}



 ?>
