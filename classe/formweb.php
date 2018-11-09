<?php
class formweb
{
  private $image_left;
  private $image_right;
  private $image_top;
  private $image_carousel1;
  private $image_carousel2;
  private $image_bot1;
  private $image_bot2;
  private $image_bot3;
  private $image_bcar;


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

  public function setimage_left($image_left){
    $this->image_left=$image_left;
  }
  public function setimage_right($image_right){
    $this->image_right=$image_right;
  }
  public function setimage_top($image_top){
    $this->image_top=$image_top;
  }
  public function setimage_carousel1($image_carousel1){
    $this->image_carousel1=$image_carousel1;
  }
  public function setimage_carousel2($image_carousel2){
    $this->image_carousel2=$image_carousel2;
  }
  public function setimage_bot1($image_bot1){
    $this->image_bot1=$image_bot1;
  }
  public function setimage_bot2($image_bot2){
    $this->image_bot2=$image_bot2;
  }
  public function setimage_bot3($image_bot3){
    $this->image_bot3=$image_bot3;
  }
  public function setimage_bcar($image_bcar){
    $this->image_bcar=$image_bcar;
  }
 public function selectformweb()
{

  try{

    $sql = 'SELECT * FROM formweb ';
    $req = $this->execReq($sql);
    $req->execute();
    return $req;

  }
  catch (PDOException $exception)
  {
      echo $exception->getMessage();
  }
}
public function update_formweb()
{
   try
   {
       $sql ="UPDATE formweb SET imgtop=:a,imgleft=:b,imgright=:c,imgcarousel1=:d,
       imgcarousel2=:e,imgbcar=:f,imgbot1=:j,imgbot2=:h,imgbot3=:k";

       $result = $this->execReq($sql);

       $result->bindparam(":a",$this->image_top);
       $result->bindparam(":b",$this->image_left);
       $result->bindparam(":c",$this->image_right);
       $result->bindparam(":d",$this->image_carousel1);
       $result->bindparam(":e",$this->image_carousel2);
       $result->bindparam(":f",$this->image_bcar);
       $result->bindparam(":j",$this->image_bot1);
       $result->bindparam(":h",$this->image_bot2);
       $result->bindparam(":k",$this->image_bot3);
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
