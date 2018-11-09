<?php

class produit
{
  private $id;
  private $categorie;
  private $model;
  private $marque;
  private $reference;
  private $prix;
  private $image;
  private $image_face;
  private $image_derrier;
  private $etat;
  private $couleur;
  private $quantité;
  private $date_entrer;
  private $description;
  private $fourn_id;
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
  public function setid($id){
    $this->id=$id;
  }
  public function setcategorie($categorie){
    $this->categorie=$categorie;
  }
  public function setmodel($model){
    $this->model=$model;
  }
  public function setmarque($marque){
    $this->marque=$marque;
  }
  public function setreference($reference){
    $this->reference=$reference;
  }
  public function setprix($prix){
    $this->prix=$prix;
  }
  public function setimage($image){
    $this->image=$image;
  }
  public function setimage_face($image_face){
    $this->image_face=$image_face;
  }
  public function setimage_derrier($image_derrier){
    $this->image_derrier=$image_derrier;
  }
  public function setetat($etat){
    $this->etat=$etat;
  }
  public function setcouleur($couleur){
    $this->couleur=$couleur;
  }
  public function setquantité($quantité){
    $this->quantité=$quantité;
  }
  public function setdate_entrer($date_entrer){
    $this->date_entrer=$date_entrer;
  }
  public function setdescription($description){
    $this->description=$description;
  }
  public function setfourn_id($fourn_id){
    $this->fourn_id=$fourn_id;
  }
  public function create_produit(){
        try{

            $sql = 'INSERT INTO produit(categorie,model,marque,referance,prix,img,img_face,img_darrier,etat,color,description,quantite,date_entre,four_id)
            values(:a,:b,:c,:d,:e,:f,:g,:h,:k,:l,:m,:n,:u,:j)';

            $result = $this->execReq($sql);

            $result->bindparam(":a",$this->categorie);
            $result->bindparam(":b",$this->model);
            $result->bindparam(":c",$this->marque);
            $result->bindparam(":d",$this->reference);
            $result->bindparam(":e",$this->prix);
            $result->bindparam(":f",$this->image);
            $result->bindparam(":g",$this->image_face);
            $result->bindparam(":h",$this->image_derrier);
            $result->bindparam(":k",$this->etat);
            $result->bindparam(":l",$this->couleur);
            $result->bindparam(":m",$this->description);
            $result->bindparam(":n",$this->quantité);
            $result->bindparam(":u",$this->date_entrer);
            $result->bindparam(":j",$this->fourn_id);

            $result->execute();
            return $result;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function select_All_produit()
    {
        try
        {
            $sql = 'SELECT * FROM produit ';
            $result = $this->execReq($sql);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function select_produit()
    {
        try
        {
            $sql = 'SELECT * FROM produit WHERE id=:clt_id';
            $result = $this->execReq($sql);
            $result->bindparam(":clt_id",$this->id);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function select_special_produit()
    {
        try
        {
            $sql = 'SELECT count(id) as nbr FROM produit where categorie=:clt_id';
            $result = $this->execReq($sql);
            $result->bindparam(":clt_id",$this->categorie);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
    public function select_limit_produit()
    {
        try
        {
            $sql = 'SELECT * FROM produit where categorie=:clt_id limit 4';
            $result = $this->execReq($sql);
            $result->bindparam(":clt_id",$this->categorie);
            $result->execute();
            return $result;
        }
        catch (PDOException $exception)
        {
            echo $exception->getMessage();
        }
    }
  public function update_produit()
 {
     try
     {
         $sql ='UPDATE produit SET prix=:pr,img=:im1,img_darrier=:im2,img_face=:im3,color=:c,
             etat=:e,quantite=:q,date_entre=:d WHERE id=:i';
         $result = $this->execReq($sql);

         $result->bindparam(":pr",$this->prix);
         $result->bindparam(":im1",$this->image);
         $result->bindparam(":im2",$this->image_derrier);
         $result->bindparam(":im3",$this->image_face);
         $result->bindparam(":c",$this->couleur);
         $result->bindparam(":e",$this->etat);
         $result->bindparam(":q",$this->quantité);
         $result->bindparam(":d",$this->date_entrer);
         $result->bindparam(":i",$this->id);
         $result->execute();
         return $result;

     }
     catch (PDOException $exception)
     {
         echo $exception->getMessage();
     }
 }
 public function delete_produit()
 {
     try
     {
         $sql = 'DELETE FROM produit WHERE id=:clt_id';
         $result = $this->execReq($sql);
         $result->bindparam(":clt_id",$this->id);
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
