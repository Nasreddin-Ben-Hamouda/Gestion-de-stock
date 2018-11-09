<?php
				include 'db_conf.php';


				if (isset($_SESSION['user_session'])) {

					$umail=$_SESSION['user_session'];
				}
				 else{
					$umail="";
				 }
				$reponse= $DB_con->query("SELECT * FROM users where user_email='$umail'");
				$donnees=$reponse->fetch(PDO::FETCH_ASSOC);
				$user=$donnees['user_id'];



?>
<link rel="icon" href="images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<div class="top-header" style="background-color:#4682B4">
		<div class="container" >
			<div class="top-header-main" >

				<div class="col-md-6 top-header-left">
					<p><img src="images/tag.png">Wants to explore Upcoming Deals on Weekends?</p>
				</div>
				<div class="col-md-6 top-header-right">
				<ul class="header-opt">
					<?php

						if ($umail) {
						echo '<li class="listheader"><a href="classe/deconnexion.php"><i class="fa fa-sign-out fa-fw"></i>Déconnexion</a></li>';

						}else
						echo '<li class="listheader"><a href="moncompte.php" ><i class="fa fa-user"></i>Connexion</a></li>';
						?>
						<?php if($umail){
							echo '<li class="listheader"><a href="moncompte2.php" ><i class="fa fa-user"></i>Mon Compte</a></li>';
						}else{echo'<li class="listheader"><a href="inscription1.php" ><i class="fa fa-users"></i>Inscriptions</a></li>';}
							?>
					<li class="listheader"><a href="products.php"><i class="fa fa-phone"></i>Contact</a></li>
				</ul>
            	</div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<?php
	if(isset($_POST['delete_pro'])){
		$valb=$_POST['delete_pro'];
		 $DB_con->exec("DELETE FROM commande WHERE numcom=$valb");
	}
	$reponse = $DB_con->query("SELECT * FROM commande,produit where commande.confirme='' and commande.pro_id=produit.id and  user_id='$user' ");
  	$nbr_com= $reponse->rowCount();
  	if($nbr_com==0){
  		$nbr_com=0;
  	}
	?>


	<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="270" style="background-color:#4682B4">
		  <div class="container">
		  	 <div class="row">
		  	 	<div class="col-sm-3 form-logo" >
		  	 		<a href="acceuille.php">

		  	 		<span><img src="images/logo.png" style="width:230px;height:60px;padding-left:80px;margin-top:-18px"></span>
		  	 	    </a>

		  	 	</div>
		  	 <form method="post" action="search.php">
		  	 	<div class="col-sm-6 form-search">
		  	 		<input type="text"  name="txt-search" onkeyup="showHint(this.value)" placeholder="Enter Your Keyword...">
		  	 		<select style="-moz-appearance:none" name="select-cat">
		  	 			<option value="allcat">All Categories</option>
		  	 			<option value="Electronics">Electronics</option>
		  	 			<option value="Mobile">&nbsp;&nbsp;Mobile</option>
		  	 			<option value="Samsung">&nbsp;&nbsp;&nbsp;&nbsp;Samsung</option>
		  	 			<option value="Nokia">&nbsp;&nbsp;&nbsp;&nbsp;Nokia</option>
		  	 			<option value="Iphone">&nbsp;&nbsp;&nbsp;&nbsp;Iphone</option>
		  	 			<option value="Htc">&nbsp;&nbsp;&nbsp;&nbsp;Htc</option>
		  	 			<option value="Laptop">&nbsp;&nbsp;Laptop</option>
		  	 			<option value="Dell">&nbsp;&nbsp;&nbsp;&nbsp;Dell</option>
		  	 			<option value="Acer">&nbsp;&nbsp;&nbsp;&nbsp;Acer</option>
		  	 			<option value="Hp">&nbsp;&nbsp;&nbsp;&nbsp;Hp</option>
		  	 			<option value="all_ac">All Accesoires</option>
		  	 			<option value="watch">Watch</option>
		  	 		</select>
		  	 		<input type="submit" value="Recherche" style="background-color:#045380">
		  	 		<div id="block-search">
   					</div>
		  	 	</div>
		  	 </form>
		  	 	<div class="col-sm-3 ttcmsheader">
		  	 		<div class="header-tel col-sm-7">
		  	 		<div class="col-sm-2">
		  	 			<img src="images/call.png" style="width:35px;height:30px;">
		  	 		</div>
		  	 		<div class="col-sm-10">
		  	 			<p>Call Center</p>
		  	 			<p>088-888-8888</p>
		  	 		</div>
		  	 		</div>
		  	 		<div class="panier-header col-sm-5">
							<?php

				       $rep= $DB_con->query("SELECT user_id FROM users where user_email='$umail'");
				                    $donnes = $rep->fetch();
				                    $numuser=$donnes['user_id'];
				      ?>
							<?php
								$reponse = $DB_con->query("SELECT *  FROM commande,produit,users
									where commande.confirme='' and commande.user_id=users.user_id and commande.pro_id=produit.id and commande.user_id='$numuser'");
													$nb= $reponse->rowCount();
								 ?>

		  	 		 			<a href="panier.php"><p class="ttpanier"> Votre Panier <i class="fa fa-opencart" ><strong style="font-size:19px;color:#045380;"><?php echo $nb; ?></strong></i></p></a>

		  	 		</div>



		  	 	</div>

		  	 </div>
		  </div>
	</nav>
	<?php /* include "inscription.php";
	       include "moncompte.php";
				 */
	?>


	<script>

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("block-search").innerHTML = "";
        return  ;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("block-search").innerHTML = this.responseText;


            }
        };
        xmlhttp.open("GET", "rech.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
