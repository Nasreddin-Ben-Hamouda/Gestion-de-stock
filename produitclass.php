<?php

class produit
{
  public $cnct;

  public function __construct()
  {
      $db = new dbconnect;
      $connect = $db->database();
      $this->cnct = $connect;
  }

  public function execReq($sql){
      $stmt = $this->cnct->prepare($sql);
      return $stmt;
  }
  public function createproduit($cat,$model,$marq,$ref1,$prix,$img1,$img2,$img3,$etat,$color,$description,$qte,$date,$four_id){
        try{

            $sql = 'INSERT INTO produit(categorie,model,marque,referance,prix,img,img_face,img_darrier,etat,color,description,quantite,date_entre,four_id)
            values(:a,:b,:c,:d,:e,:f,:g,:h,:k,:l,:m,:n,:u,:j)';

            $result = $this->execReq($sql);

            $result->bindparam(":a",$cat);
            $result->bindparam(":b",$model);
            $result->bindparam(":c",$marq);
            $result->bindparam(":d",$ref1);
            $result->bindparam(":e",$prix);
            $result->bindparam(":f",$img1);
            $result->bindparam(":g",$img2);
            $result->bindparam(":h",$img3);
            $result->bindparam(":k",$etat);
            $result->bindparam(":l",$color);
            $result->bindparam(":m",$description);
            $result->bindparam(":n",$qte);
            $result->bindparam(":u",$date);
            $result->bindparam(":j",$four_id);

            $result->execute();
            return $result;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function createfiche($design,$ref,$dimensions,$poid,$processeur,$syse,$resolution,$apphoto,$memoire,$catg,$date_sortie)
   {
       try{
         $sql='INSERT INTO fichet(design,referance,dimensions,poids,processeur,syse,resolusion,apphoto,memoire,catg,date_sortie)
         values(:p,:pa,:pb,:pc,:pd,:pe,:pf,:pg,:ph,:pk,:pl)';
         $result = $this->execReq($sql);
         $result->bindparam(":p",$design);
         $result->bindparam(":pa",$ref);
         $result->bindparam(":pb",$dimensions);
         $result->bindparam(":pc",$poid);
         $result->bindparam(":pd",$processeur);
         $result->bindparam(":pe",$syse);
         $result->bindparam(":pf",$resolution);
         $result->bindparam(":pg",$apphoto);
         $result->bindparam(":ph",$memoire);
         $result->bindparam(":pk",$catg);
         $result->bindparam(":pl",$date_sortie);
         $result->execute();
         return $result;
     }
     catch(PDOException $ex){
         echo $ex->getMessage();
     }
  }
  public function updateproduit($prix,$img1,$img3,$img2,$color,$etat,$qte,$date,$id)
 {
     try
     {
         $sql ='UPDATE produit SET prix=:pr,img=:im1,img_darrier=:im2,img_face=:im3,color=:c,
             etat=:e,quantite=:q,date_entre=:d WHERE id=:i';
         $result = $this->execReq($sql);

         $result->bindparam(":pr",$prix);
         $result->bindparam(":im1",$img1);
         $result->bindparam(":im2",$img3);
         $result->bindparam(":im3",$img2);
         $result->bindparam(":c",$color);
         $result->bindparam(":e",$etat);
         $result->bindparam(":q",$qte);
         $result->bindparam(":d",$date);
         $result->bindparam(":i",$id);
         $result->execute();
         return $result;

     }
     catch (PDOException $exception)
     {
         echo $exception->getMessage();
     }
 }
 public function deleteprod($id)
 {
     try
     {
         $sql = 'DELETE FROM produit WHERE id=:clt_id';
         $result = $this->execReq($sql);
         $result->bindparam(":clt_id",$id);
         $result->execute();
         return $result;
     }
     catch (PDOException $exception)
     {
         echo $exception->getMessage();
     }
 }
 public function readprod($id)
 {
     try
     {
         $sql = 'SELECT * FROM produit WHERE id=:clt_id';
         $result = $this->execReq($sql);
         $result->bindparam(":clt_id",$id);
         $result->execute();
         return $result;
     }
     catch (PDOException $exception)
     {
         echo $exception->getMessage();
     }
 }
 public function deletefiche($ref)
 {
     try
     {
         $sql = 'DELETE FROM fichet WHERE referance=:clt_id';
         $result = $this->execReq($sql);
         $result->bindparam(":clt_id",$ref);
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
