<?php

class commande
{
  private $numcom;
  private $pro_id;
  private $user_id;
  private $quantité;
  private $date_com;
  private $confirmation;
  private $paiment;
  private $vu_admin;
  public $cnct;

  public function __construct(array $data)
  {
    foreach ($data as $key => $value) {
      $method="set".ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
      $db = new dbconnect;
      $connect = $db->database();
      $this->cnct = $connect;
  }

  public function execReq($sql){
      $stmt = $this->cnct->prepare($sql);
      return $stmt;
  }
  public function setnumcom($numcom){
		$this->numcom=$numcom;
	}
  public function setpro_id($pro_id){
		$this->pro_id=$pro_id;
	}
  public function setuser_id($user_id){
		$this->user_id=$user_id;
	}
  public function setquantité($quantité){
		$this->quantité=$quantité;
	}
  public function setdate_com($date_com){
		$this->date_com=$date_com;
	}
  public function setconfirmation($confirmation){
		$this->confirmation=$confirmation;
	}
  public function setpaiment($paiment){
		$this->paiment=$paiment;
	}
  public function setvu_admin($vu_admin){
		$this->vu_admin=$vu_admin;
	}
  public function readAllcommande()
    {
        try
        {
            $sql = "SELECT * FROM commande,produit,users
            where commande.confirme='oui' and commande.user_id=users.user_id and commande.pro_id=produit.id order by(numcom) desc";

            $result = $this->execReq($sql);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function read_special_commande()
      {
          try
          {
              $sql = "SELECT * FROM commande,produit,users
              where commande.confirme='oui' and commande.user_id=users.user_id and commande.pro_id=produit.id and commande.numcom=:numcom";

              $result = $this->execReq($sql);
              $result->bindparam(":numcom",$this->numcom);
              $result->execute();
              return $result;
          }
          catch (PDOException $exception)
          {
              echo $exception->getMessage();
          }
      }
      public function read_single_commande(){
          try{
              $sql = 'SELECT * FROM commande where pro_id=:id and user_id=:id1';
              $req = $this->execReq($sql);
              $req->bindparam(":id",$this->pro_id);
              $req->bindparam(":id1",$this->user_id);
              $req->execute();
              return $req;
          }
          catch(PDOException $ex){
              echo $ex->getMessage();
          }
      }

    public function selectpanier(){
        try{
            $sql = 'SELECT *  FROM commande,produit,users
              where commande.confirme="" and commande.user_id=users.user_id and commande.pro_id=produit.id and commande.user_id=:id ';
            $req = $this->execReq($sql);
            $req->bindparam(":id",$this->user_id);
            $req->execute();
            return $req;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function createcommande()
    {
      try{
          $sql = "INSERT INTO commande(pro_id,user_id,qtee,date_com,confirme,paiment,vu) values(:a,:b,:c,:d,:e,:f,:g)";

          $result = $this->execReq($sql);

          $result->bindparam(":a",$this->pro_id);
          $result->bindparam(":b",$this->user_id);
          $result->bindparam(":c",$this->quantité);
          $result->bindparam(":d",$this->date_com);
          $result->bindparam(":e",$this->confirmation);
          $result->bindparam(":f",$this->paiment);
          $result->bindparam(":g",$this->vu_admin);
          $result->execute();
          return $result;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
      }
    }
    public function updatcommande(){
        try{
            $sql = "UPDATE commande SET confirme='oui',date_com=:date_com,paiment=:paiment where user_id=:user and confirme=''";
            $req = $this->execReq($sql);
            $req->bindparam(":date_com",$this->date_com);
            $req->bindparam(":paiment",$this->paiment);
            $req->bindparam(":user",$this->user_id);

            $req->execute();
            return $req;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function updateplus(){
        try{
            $sql = 'UPDATE commande SET qtee=qtee + 1 where user_id=:id and numcom=:id1 ';
            $req = $this->execReq($sql);
            $req->bindparam(":id",$this->user_id);
            $req->bindparam(":id1",$this->numcom);
            $req->execute();
            return $req;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function updatemoins(){
        try{
            $sql = 'UPDATE commande SET qtee=qtee - 1 where user_id=:id and numcom=:id1 ';
            $req = $this->execReq($sql);
            $req->bindparam(":id",$this->user_id);
            $req->bindparam(":id1",$this->numcom);
            $req->execute();
            return $req;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function deletecommande()
    {
        try
        {
            $sql = 'DELETE FROM commande WHERE numcom = :clt_id';
            $result = $this->execReq($sql);
            $result->bindparam(":clt_id",$this->numcom);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }


}
