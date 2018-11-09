<?php

class fiche_produit
{
  private $reference_produit;
  private $design;
  private $dimensions;
  private $poids;
  private $processeur;
  private $system;
  private $resolution;
  private $appareil_photo;
  private $memoire;
  private $catalogue;
  private $date_sortie;
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

  public function setreference_produit($reference_produit){
    $this->reference_produit=$reference_produit;
  }
  public function setdesign($design){
    $this->design=$design;
  }
  public function setdimensions($dimensions){
    $this->dimensions=$dimensions;
  }
  public function setpoids($poids){
    $this->poids=$poids;
  }
  public function setprocesseur($processeur){
    $this->processeur=$processeur;
  }
  public function setsystem($system){
    $this->system=$system;
  }
  public function setresolution($resolution){
    $this->resolution=$resolution;
  }
  public function setappareil_photo($appareil_photo){
    $this->appareil_photo=$appareil_photo;
  }
  public function setmemoire($memoire){
    $this->memoire=$memoire;
  }
  public function setcatalogue($catalogue){
    $this->catalogue=$catalogue;
  }
  public function setdate_sortie($date_sortie){
    $this->date_sortie=$date_sortie;
  }

    public function create_fiche_produit()
   {
       try{
         $sql='INSERT INTO fichet(design,referance,dimensions,poids,processeur,syse,resolusion,apphoto,memoire,catg,date_sortie)
         values(:p,:pa,:pb,:pc,:pd,:pe,:pf,:pg,:ph,:pk,:pl)';
         $result = $this->execReq($sql);
         $result->bindparam(":p",$this->design);
         $result->bindparam(":pa",$this->reference_produit);
         $result->bindparam(":pb",$this->dimensions);
         $result->bindparam(":pc",$this->poids);
         $result->bindparam(":pd",$this->processeur);
         $result->bindparam(":pe",$this->system);
         $result->bindparam(":pf",$this->resolution);
         $result->bindparam(":pg",$this->appareil_photo);
         $result->bindparam(":ph",$this->memoire);
         $result->bindparam(":pk",$this->catalogue);
         $result->bindparam(":pl",$this->date_sortie);
         $result->execute();
         return $result;
     }
     catch(PDOException $ex){
         echo $ex->getMessage();
     }
  }
  public function select_fiche_produit()
  {
      try
      {
          $sql = 'SELECT * FROM fichet WHERE referance=:clt_id';
          $result = $this->execReq($sql);
          $result->bindparam(":clt_id",$this->reference_produit);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }

 public function delete_fiche_produit()
 {
     try
     {
         $sql = 'DELETE FROM fichet WHERE referance=:clt_id';
         $result = $this->execReq($sql);
         $result->bindparam(":clt_id",$this->reference_produit);
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
