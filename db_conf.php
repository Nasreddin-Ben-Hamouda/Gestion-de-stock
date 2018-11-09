<?php
//session_start();
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "Otechnologie";


try {

$DB_con = new
PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
} catch(PDOException $e) {
echo $e->getMessage();
}
if (isset($_SESSION['user_session'])) {

	$umail=$_SESSION['user_session'];
}
 else{
 	$umail="";
 }

$reponsee = $DB_con->query("SELECT * FROM users where user_email='$umail' LIMIT 1");
$donnes=$reponsee->fetch(PDO::FETCH_ASSOC);
$user=$donnes['user_id'];
$userpers=$donnes['personnalite'];





/********* nbre de commande par produit*******/
$reponse = $DB_con->query("SELECT pro_id,count(numcom) as star FROM commande group by(pro_id)");
	while ($donnees = $reponse->fetch()){
		 $nbstar=$donnees['star'];
		 $nbpro=$donnees['pro_id'];
		 $DB_con->exec("UPDATE produit SET star='$nbstar' where id='$nbpro'");


	}

/******* devise *************/
$res=$DB_con->query("SELECT * FROM formweb");
$rows = $res->fetch();

                 $devise="TND";
				  if(isset($_GET['d'])){
                  $devise=$_GET['d'];
                  $devise = strtoupper($devise);
                  }
                  if($devise=="TND"){
					  $dev="DT";
					  $pridev=1;
                	}elseif($devise=="USD"){
                      $dev='<i class="fa fa-usd"></i>';
					  $pridev=2.43847;
					}elseif($devise=="EUR"){
					  $dev='<i class="fa fa-eur "></i>';
					  $pridev=2.573;
				    }











				    /******************** fin date produit *****************/
/*$reponse = $DB_con->query("SELECT * FROM produit");
$datenew=date("Y-m-d")." ".date("H:i:s");
	while ($donnees = $reponse->fetch())
	  {
	   $npro=$donnees['id'];
	   if($donnees['datefinsolde']<$datenew and $donnees['datefinsolde']!=""  and $donnees['prixsolde']!=0){
         $prix=$donnees['prixsolde'];
	   	 $DB_con->exec("UPDATE produit SET prix='$prix',prixsolde='0',datefinsolde='',pourcentage='0' where id=$npro");
	   }

	}*/

?>
