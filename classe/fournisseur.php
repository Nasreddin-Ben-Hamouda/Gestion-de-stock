<?php

class fournisseur
{
  private $fourn_id;
  private $nom;
  private $prenom;
  private $adresse;
  private $ville;
  private $num_tel;
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

  public function setfourn_id($fourn_id){
    $this->fourn_id=$fourn_id;
  }
  public function setnom($nom){
    $this->nom=$nom;
  }
  public function setprenom($prenom){
    $this->prenom=$prenom;
  }
  public function setadresse($adresse){
    $this->adresse=$adresse;
  }
  public function setville($ville){
    $this->ville=$ville;
  }
  public function setnum_tel($num_tel){
    $this->num_tel=$num_tel;
  }
  public function createfourn(){
        try{
            $sql = 'INSERT INTO fournisseur(nom,prenom,adresse,ville,num_tel)
            values(:a,:b,:c,:d,:e)';

            $result = $this->execReq($sql);

            $result->bindparam(":a",$this->nom);
            $result->bindparam(":b",$this->prenom);
            $result->bindparam(":c",$this->adresse);
            $result->bindparam(":d",$this->ville);
            $result->bindparam(":e",$this->num_tel);

            $result->execute();
            return $result;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
  public function select_special_fournisseur(){
      try{
          $sql = 'SELECT * FROM fournisseur where fourn_id=:id';
          $req = $this->execReq($sql);
          $req->bindparam(":id",$this->fourn_id);
          $req->execute();
          return $req;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
  }
  }
  public function read_all_fournisseur()
    {
        try
        {
            $sql = 'SELECT * FROM fournisseur  ORDER BY nom DESC ';
            $result = $this->execReq($sql);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function deletefourn()
    {
        try
        {
            $sql = 'DELETE FROM fournisseur WHERE fourn_id = :clt_id';
            $result = $this->execReq($sql);
            $result->bindparam(":clt_id",$this->fourn_id);
            $result->execute();
            return $result;
        }

        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }





  }
  ?>
