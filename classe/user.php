
<?php
class user
{
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $pwd;
  private $date;
  private $img;
  private $sexe;
  private $personnalité;
  private $société;
  private $adresse;
  private $ville;
  private $etat;
  private $code;
  private $pays;
  private $num;
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
  public function setid($id){
		$this->id=$id;
	}
  public function setnom($nom){
		$this->nom=$nom;
	}
  public function setprenom($prenom){
		$this->prenom=$prenom;
	}
  public function setemail($email){
		$this->email=$email;
	}
  public function setpwd($pwd){
		$this->pwd=$pwd;
	}
  public function setdate($date){
		$this->date=$date;
	}
  public function setimg($img){
    $this->img=$img;
  }
  public function setsexe($sexe){
    $this->sexe=$sexe;
  }
  public function setpersonnalité($personnalité){
    $this->personnalité=$personnalité;
  }
  public function setsociété($société){
    $this->société=$société;
  }
  public function setadresse($adresse){
    $this->adresse=$adresse;
  }
  public function setville($ville){
    $this->ville=$ville;
  }
  public function setetat($etat){
    $this->etat=$etat;
  }
  public function setcode($code){
    $this->code=$code;
  }
  public function setpays($pays){
    $this->pays=$pays;
  }
  public function setnum($num){
    $this->num=$num;
  }

  public function execReq($sql){
      $stmt = $this->cnct->prepare($sql);
      return $stmt;
  }
  public function readuser(){
      try{
          $sql = 'SELECT * FROM users where user_email=:user_email ';
          $req = $this->execReq($sql);
          $req->bindparam(":user_email",$this->email);
          $req->execute();
          return $req;
      }
      catch(PDOException $ex){
          echo $ex->getMessage();
  }
  }
  public function createuser(){
        try{
            $sql = 'INSERT INTO users(user_name,user_prenom,user_email,user_pass,user_date,user_img,user_sexe,personnalite,societe,adresse,ville,etat,cod_postal,pays,num_tel)
            values(:a,:b,:c,:d,:e,:f,:g,:h,:k,:l,:m,:n,:u,:w,:x)';

            $result = $this->execReq($sql);

            $result->bindparam(":a",$this->nom);
            $result->bindparam(":b",$this->prenom);
            $result->bindparam(":c",$this->email);
            $result->bindparam(":d",$this->pwd);
            $result->bindparam(":e",$this->date);
            $result->bindparam(":f",$this->img);
            $result->bindparam(":g",$this->sexe);
            $result->bindparam(":h",$this->personnalité);
            $result->bindparam(":k",$this->société);
            $result->bindparam(":l",$this->adresse);
            $result->bindparam(":m",$this->ville);
            $result->bindparam(":n",$this->etat);
            $result->bindparam(":u",$this->code);
            $result->bindparam(":w",$this->pays);
            $result->bindparam(":x",$this->num);

            $result->execute();
            return $result;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
    }

public function readAlluser()
  {
      try
      {
          $sql = 'SELECT * FROM users where personnalite="user" ORDER BY user_name,user_prenom DESC ';
          $result = $this->execReq($sql);
          $result->execute();
          return $result;
      }
      catch (PDOException $exception)
      {
          echo $exception->getMessage();
      }
  }
  public function deleteuser()
  {
      try
      {
          $sql = 'DELETE FROM users WHERE user_id = :clt_id';
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
  public function update_adresse()
 {
     try
     {
         $sql ="UPDATE users SET adresse=:a,ville=:b,etat=:c,cod_postal=:d,pays=:e,num_tel=:f where user_email=:j";

         $result = $this->execReq($sql);

         $result->bindparam(":a",$this->adresse);
         $result->bindparam(":b",$this->ville);
         $result->bindparam(":c",$this->etat);
         $result->bindparam(":d",$this->code);
         $result->bindparam(":e",$this->pays);
         $result->bindparam(":f",$this->num);
         $result->bindparam(":j",$this->email);
         $result->execute();
         return $result;

     }
     catch (PDOException $exception)
     {
         echo $exception->getMessage();
     }
 }
 public function updat_information_personnel()
{
    try
    {
        $sql ="UPDATE users SET  user_prenom=:a,user_name=:b,user_pass=:c,
         user_date=:d,user_sexe=:e where user_email=:f";

        $result = $this->execReq($sql);

        $result->bindparam(":a",$this->prenom);
        $result->bindparam(":b",$this->nom);
        $result->bindparam(":c",$this->pwd);
        $result->bindparam(":d",$this->date);
        $result->bindparam(":e",$this->sexe);
        $result->bindparam(":f",$this->email);
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
