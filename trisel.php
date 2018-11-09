<!DOCTYPE html>
<html>
<head>


</head>
<body>

<?php
include 'db_conf.php';
?>
<?php
$q=$_GET['q'];

  $val= $_GET['val'];
  $str = strtoupper($val);





				     if($str=="ELECTRONICS"){
					     	$req="SELECT  * FROM produit Order by($q) ";
					     	if($q=="prixdes"){
					     	    $req="SELECT  * FROM produit Order by(prix) desc ";
					     	}
					     	if($q=="titledes"){
					     		$req="SELECT  * FROM produit Order by(marque) desc ";
					     	}
					     }elseif($str=="MOBILE"){
					     	$req="SELECT  * FROM produit where categorie='$str'  Order by($q) ";
					     	if($q=="titledes"){
					     		$req="SELECT  * FROM produit where categorie='$str' Order by(marque) desc ";
					     	}if($q=="prixdes"){
					     	    $req="SELECT  * FROM produit where categorie='$str' Order by(prix) desc ";
					     	}
					     }elseif($str=="LAPTOP"){
					     	$req="SELECT  * FROM produit where categorie='$str' Order by($q) ";
					     	if($q=="titledes"){
					     		$req="SELECT  * FROM produit where categorie='$str' Order by(marque) desc ";
					     	}if($q=="prixdes"){
					     	    $req="SELECT  * FROM produit where categorie='$str' Order by(prix) desc ";
					     	}
					     }else{
					     	$req="SELECT  * FROM produit where model='$str'  Order by($q) ";
					     	if($q=="titledes"){
					     		$req="SELECT  * FROM produit where model='$str' Order by(marque) desc ";
					     	}if($q=="prixdes"){
					     	    $req="SELECT  * FROM produit where model='$str' Order by(prix) desc ";
					     	}
					     }

				      $reponse = $DB_con->query($req);

		 				 while ($donnees = $reponse->fetch()){
						  echo'<div class="col-sm-3 product-left chang-list">
								<div class="product-main col-sm-12 simpleCart_shelfItem">

									<div class="col-sm-12 chang-one">
					                  <a href="single.php?id='.$donnees['id'].'" class="mask">
					                    <img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt="" >
					                  </a>
					                 </div>
					                 <div class="col-sm-12 change-two" >
						                  <div class="product-bottom">
						                    <a href="single.php?id='.$donnees['id'].'" >'.$donnees['marque'].'</a>
						                    <h4>'.$donnees['prix'].'</h4>
						                    <p>
						                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis scelerisque feugiat dui eget luctus. Aliquam eu leo dolor. Vivamus non neque eu lectus pulvinar aliquet
						                    </p>
						                    <p class="quantitystock">
						                      <span id="quantitynumb">400</span>
						                      <span id="quantitypro">Produits</span>
						                      <span class="quantityins">In stock</span>
						                    </p>

						                </div>
						             </div>
						             <p class="new">New</p>
						                  <div class="srch" id="srch1">
						                    <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
						                    <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
						                  </div>
						             <div class="col-sm-3 ff-right">

						                  <button class="btn-panier">Ajoute Au Panier</button>

						                  <div class="srch">
						                    <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-heart-o"></i></a>
						                    <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
						                  </div>
						            </div>









								</div>
	                          </div>';
	                      }


?>
</body>
</html>
