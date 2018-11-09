<?php
session_start();
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
$reponse= $DB_con->query("SELECT * FROM users where user_email='$umail' and personnalite='admin' LIMIT 1");
$donnees=$reponse->fetch(PDO::FETCH_ASSOC);
$nb= $reponse->rowCount();

if($nb==0){
	echo $nb;
	header('Location: moncompte.php');
	}
