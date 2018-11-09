<?php
class mailbox
{
  private $nummail;
  private $user_id;
  private $message;
  private $objet;
  private $ref_produit;
  private $vu_admin;
  private $date_msg;


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

  public function setnummail($nummail){
    $this->nummail=$nummail;
  }
  public function setuser_id($user_id){
		$this->user_id=$user_id;
	}
  public function setmessage($message){
		$this->message=$message;
	}
  public function setobjet($objet){
    $this->objet=$objet;
  }
  public function setref_produit($ref_produit){
    $this->ref_produit=$ref_produit;
  }
  public function setvu_admin($vu_admin){
    $this->vu_admin=$vu_admin;
  }
  public function setdate_msg($date_msg){
    $this->date_msg=$date_msg;
  }

  public function creatmailbox(){
        try{
            $sql= 'INSERT INTO mailbox(user_id,message,refcom,objet,vu,date_msg) values(:a,:b,:c,:d,:e,:f)';
            $result=$this->execReq($sql);

            $result->bindparam(":a",$this->user_id);
            $result->bindparam(":b",$this->message);
            $result->bindparam(":c",$this->ref_produit);
            $result->bindparam(":d",$this->objet);
            $result->bindparam(":e",$this->vu_admin);
            $result->bindparam(":f",$this->date_msg);
            $result->execute();
            return $result;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function readmailbox(){
        try{
            $sql = 'SELECT * FROM mailbox,users where mailbox.user_id=users.user_id order by(nummail) desc ';
            $req = $this->execReq($sql);
            $req->execute();
            return $req;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }
    public function update_mailbox()
   {
       try
       {
           $sql ="UPDATE mailbox SET vu='oui'";

           $result = $this->execReq($sql);
           $result->execute();
           return $result;

       }
       catch (PDOException $exception)
       {
           echo $exception->getMessage();
       }
   }
   public function deletemailbox()
   {
       try
       {
           $sql =" DELETE FROM mailbox WHERE nummail=:clt_id ";
           $result = $this->execReq($sql);
           $result->bindparam(":clt_id",$this->nummail);
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
