<?php
require_once 'db_conf.php';
include 'classe/user.php';
include 'classe/commande.php';
include 'classe/produit.php';
include "classe/fiche_produit.php";
include 'classe/db_conf.php';
session_start();
if (isset($_SESSION['user_session'])) {

  $umail=$_SESSION['user_session'];
}
 else{
  $umail="";
 }
 $data=["email"=>$umail];
 $users=new user($data);
 $reponse =$users->readuser();
 $donnees=$reponse->fetch();
$user=$donnees['user_id'];
         $msg1="";
         $msg2="";
         $msg="";
        $id=$_GET['id'];
    	if(isset($_POST['ajout-pro'])){
        if($umail==""){

  		    header('Location: moncompte.php');
  	       }
        else{
      $date_com=date("Y-m-d")." ".date("H:i:s");
    	$qte_com=$_POST['quantite_com'];
      $conf="";
      $p="";
      $v="non";
      $data1=["pro_id"=>$id,"user_id"=>$user,"quantité"=>$qte_com,"date_com"=>$date_com,"confirmation"=>$conf,"paiment"=>$p,"vu_admin"=>$v];
	    $com = new commande($data1);
      $res=$com->createcommande();

	      if($res){
          $msg1='<span class="msgsucces">'.$donnees['user_name'].' votre commande a été ajouter au panier  vous pouver l"annuler ou aller au panier pour le modifier et le confirmer   ...</span>';
          $msg2='<button type="sumbit" name="annuler" class="btn-ajpanier" style="background-color:#4682B4">Annuler </button>';
        }
        else {
          $msg1='<span class="msgsucces">'.$donnees['user_name'].' votre commande nété pas  envoye...</span>';}
		}
   }
   $data2=["pro_id"=>$id,"user_id"=>$user];
   $read= new commande($data2);
  $repon= $read->read_single_commande();
  $donne=$repon->fetch(PDO::FETCH_ASSOC);
  $numcom=$donne['numcom'];
  if(isset($_POST['annuler'])){
    $data3=["numcom"=>$numcom];
     $drop= new commande($data3);
     $d=$drop->deletecommande();
     if($d){
       $msg='<span class="msgsucces">'.$donnees['user_name'].' votre commande a été supprimer avec success...</span>';
     }

  }


?>
<!DOCTYPE html>
<html>
<head>
<title>Ozalise Technologie</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />

<link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>

 <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
/* Global */
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }
.carousel-control.left,
.carousel-control.right {
	opacity: 0;
	filter: alpha(opacity=100);
	background-image: none;
	background-repeat: no-repeat;
	text-shadow: none;
}
#carousel-example-generic:hover .left,
#carousel-example-generic:hover .right{
	opacity: 1
}
.carousel-control .fa{
	top: 45%;
	opacity: 0.7;
	position: absolute;
	color: #000;
	border: 2px solid #000;
	padding: 8px 15px;
	border-radius: 50%;
	left:32%;
}

.carousel-control .fa:hover{
	color: #fff;
	background: #000

}





/* Carousel Header Styles */





.thumbnails li> .fff .caption {
    background:#fff !important;
    padding:10px
}

/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
}

.page-header h3 {
    line-height: 0.88rem;
    color: #000;
}

ul.thumbnails {
    margin-bottom: 0px;
}



/* Thumbnail Box */
.caption h4 {
    color: #444;
}

.caption p {
    color: #999;
}



/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    margin-top: -50px
}
.pager img{
	width: 14px;
	opacity: 0.8;
	margin-top:-2px;

}

.thumbnails .col-sm-3{padding-left: 2px;padding-right: 2px}



/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
        text-align: center;
    }
}
@media (max-width: 479px) {
    .caption {
        word-break: break-all;
    }
}


li { list-style-type:none;}

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

  .affix {
      top: 0;
      width: 100%;
      z-index: 7777;

      margin-top: -42px;
      height: 100px;
      margin-bottom: 70px;

      -webkit-transition: all 0.9s ease-in-out;
      transition: all 1s ease-in-out;
         }
          .affix-top {
       position: static;
       top: -85px;

        }





  }

  .affix + .container-fluid {
      padding-top: 70px;
  }







  .section-categorie{
  	background-color: #fff;
  	position: relative;
  	height: auto;
  }
  .title_block{
  	color: #333;
font: 400 16px/18px "Poppins", sans-serif;
padding: 10px;
position: relative;

width: 100%;
letter-spacing: 1px;
margin: 0;
border: none;
  }
.section-categorie .tt_sf-menu > li{
	padding: 0 16px;
	width: 100%
}
 .tt_sf-menu li a{

    color: #777777;
    display: block;
    font: 400 12px/20px "Poppins", Helvetica, sans-serif;
    padding: 5px 0;
    text-decoration: none;

}

 .tt_sf-menu li a:hover{

    color: #333;


}

 .tt_sf-menu li a .fa{
    float: right;
    margin-top: -6px;
    margin-right: -16px;
    font-size: 13px;
    text-align: center;
    line-height: 32px;
    height: 32px;
    width: 32px;
    color: #aaa

}
.tt_sf-menu li a .fa:hover{
    background: #eeeeee;
}

.col-md-2{
	padding: 0
}
.col-md-2 >.col-sm-8,.col-sm-4,.col-sm-7,.col-sm-5{
	padding: 0
}

.col-md-2 .col-sm-10{

	border-bottom: 1px solid  rgba(0,0,0,0.05);
	padding:10px 0;
	margin-left: 17px;
	letter-spacing: 0.3px

}
.about-right .award{
	border-bottom: 1px solid #fff;

}

.about-right .public-right{
	padding: 5px ;
	border-top: 1px solid rgba(0,0,0,0.08);
	border-bottom: 1px solid rgba(0,0,0,0.08);


}
.about-left .public-left{
	padding: 5px ;
	border-top: 1px solid rgba(0,0,0,0.08);
	border-bottom: 1px solid rgba(0,0,0,0.08);


}
.nou-produit .title_block{
	padding:10px 0 0 0;
	 }

.nou-produit img{
	width: 70px;
	height: 70px;
	border: 1px solid #f0f0f0;
	padding: 0px;
	margin-left: -10px
}


.about-right {
    background-color: #fff;
}

.nou-produit a:hover{
	color: #333

}
.nou-produit h3{
		font-size:12.5px;
		 color: #f12a43;
		 font-weight: 600px;
		 margin:0px;

}
.nou-produit a h2{
	font-size: 11.4px;
	padding: 10px 0 0;
	background-color: white;
	margin-top: -20px;
	width: 100%


}
.nou-produit a:hover h2{

	color: #222;
	text-decoration: underline;

}
.tab-content .col-md-3{
	padding-left: 5px;
	padding-right: 5px
}

.infor-right ul li p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 0px ;
    width: 250px


}
.infor-bottom{
	padding: 10px


}
.infor-bottom ul{
	margin-left: 18%;

}

.infor-bottom ul li a{
	float: left;
	    color: #888888;
    font: 400 12px/24px "Poppins", Helvetica, sans-serif;
    text-decoration: none;

}
.infor-bottom ul li a:hover{

	    color:#f12a43;


}
#extras{
	border-top: 0px solid rgba(0,0,0,0.07)

}
.ttarticl{
	border-bottom: 1px solid rgba(0,0,0,0.07);
	border-top: 1px solid rgba(0,0,0,0.07)
}
.ttarticl a h3{
	font-size: 12.3px;
	float: right;
	color: #222;
	padding: 0 9px 0 0;
	margin-top: 2px
}
.ttarticl a:hover h3{

	color: #222;
	text-decoration: underline;

}
.ttarticl a{

}
.ttarticl h4{margin-left: -10px}
.ttarticl img{

	width: 100%;
	height: 100%;
	padding: 8px 5px
}
#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}

/*    index.html     */

.about {
    margin-top: -30px;
}

/*premier block*/
.pri_bloc{
	background-color: #fff;
	padding: 20px 5px;
	margin-bottom: 20px


}
.tabs-one {
	border-bottom: 1px solid rgba(0,0,0,0.2);
	margin-bottom: 10px
}

.tabs-one li a{
	padding: 5px 10px;


}
.tabs-one > li > a:hover,.tabs-one > li > a:focus{
	color: #444;
	transition:0s;

}
.tabs-one > li.active > a, .tabs-none > li.active > a:hover, .tabs-one > li.active > a:focus {
	color: #444;
	border-bottom: 2px solid #444;

}
.tab-content p{
	color: #777;
	min-height: 1px;
	padding: 3px 10px;
	font:inherit;
	font-size: 14px
}

.block-vu .fa-close{
	font-weight: 100;
	font-size: 12px
}
.pri_bloc  .carousel-inner{
   width: 95%
}
.pri_bloc .hide-bullets{
  margin-left: 12%
}
.pri_bloc .hide-bullets .col-sm-4 {
	width: 27%;
}
.pri_bloc .single-top-right{
	padding: 10px 0;

}
.panier-header p{

	padding-bottom: 15px
}
.panier-header ul li a{
	text-decoration: none;


}

.panier-header .panier-com{
	position: absolute;
	display: none;
	background: #fff;
	width: 210px;
	border-radius: 5px;
	margin-left: -140px;
	float: left;
	z-index: 1;
	padding: 0 10px
}
.panier-header .panier-com .btn-delete{
	background: transparent;
	border: none;
	float: right;
	margin-bottom: -10px;
	color: #aaa;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
	padding: 5px
}
.panier-header .panier-com .btn-delete:focus{

	outline: none;
}
.panier-header .panier-com .btn-com{
	padding: 6px;
	background: #f12a43;
	width: 110px;
	margin: 7px;
	border-radius: 4px;
	color: #fff;
	float: right;
	text-align: center;
	display: inline-block;
	font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.panier-header .panier-com .block-panier{
	padding: 10px 0;
	border-bottom: 1px solid #eee
}
.panier-header .panier-com .dx-panier{
	padding:0 10px
}
.panier-header .panier-com img{
	width: 90%;
	border: 1px solid #eee
}
.panier-header .panier-com h2{
	margin: 0;
	color: #888;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.panier-header .panier-com h3{
	margin: 5px 0;
	color: #f12a43;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.panier-header .panier-com h4{
	margin: 0 0 7px;
	color: #888;
	font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.panier-header .panier-com p{
	margin: 0 0 7px;
	padding: 0;
	color: #444;
	text-align: right;
	font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.panier-header > ul:hover .panier-com{
	display: block;
    transition:4s;
}
.tab-content table > tbody > tr > td{
	font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
	color: #888
}
.tab-content table > tbody > tr > th{
	font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
	color: #444
}
.btn-ajpanier .font-fa{
	font-size:13px;
	padding-right:3px
}
.single-para > .btn-aliste{
	background: transparent;
	color: #888;
	margin: 0;
	padding: 0;
	display: block;
}
.single-para > .btn-aliste:hover{
	background: transparent;

}
.product-left .star5{
  margin-top: -4px;
  margin-bottom: 4px
}
.star5 .fa-star-o{
  font-size: 10px;
  padding: 2px;
  color: #888
}
.star5 .fa-star{
  font-size: 10px;
  padding: 2px;
  color: #ffd24d
}
</style>

<script type="text/javascript">

  $(document).ready(function(){
    $("#close-art").click(function(){
        $("#block-visuel").fadeOut(400);
        $(".block-vu").fadeOut(500);
    });
    $(".open-show").click(function(){
    	        $("#block-visuel").fadeIn(1000);
    	        $("#loding").fadeIn(1000).delay(2000).fadeOut(800);
    	        $(".block-vu").delay(2500).fadeIn(1000);

    });


   });
</script>
<script>

$(document).ready(function(){
    $(".open-show").click(function(){
         var uid = $(this).data('id');
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;




            }
        };



         xmlhttp.open("GET", "get.php?q=" + uid, true);
         xmlhttp.send();

  });
 });
</script>
</head>
<body>
	<!--top-header-->


	<!--top-header-->

	<?php
	  require_once('header.php');
	?>



    <?php
    $data=["id"=>$id];
    $prod=new produit($data);
		$reponse = $prod->select_produit();
		$row = $reponse->fetch();
		$ref=$row['referance'];


	?>
	<div class="container tthead">
	<div class="col-sm-12">
		<div class="col-md-6 heade-left"><h4><?php echo $row['marque'];?></h4></div>
		<div class="col-md-6 heade-right">
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span>
			<?php echo $row['marque'];?></p>
		</div>
	</div>
</div>





	<!--banner-public-->

	<div class="about" >
		<div class="container">
			<?php
        include 'navleft.php';
       ?>
			<div class="col-md-8 about-center">
				<div class="pri_bloc col-sm-12">


            <div class="col-md-6">
                <div id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" >
                            <div class="carousel slide flexslider" id="myCarousel">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                	<?php

                                    if($row['img']!=""){
                                        echo '<div class="active item thumb-image" data-slide-number="0">';
									 	echo '<img src="produit/'.$row['img'].'" data-imagezoom="true" class="img-responsive">';
									    echo '</div>';
									}if($row['img_face']!=""){
		   		    				    echo '<div class="item" data-slide-number="1">';
		                                echo '<img src="produit/'.$row['img_face'].'">' ;
		                                echo '</div>';
		                            }if($row['img_darrier']!=""){
                                        echo '<div class="item" data-slide-number="2">';
                                        echo '<img src="produit/'.$row['img_darrier'].'">';
                                     	echo '</div>';
                                    }
								  	?>





                                </div>
                                <!-- Carousel nav -->

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom switcher of slider -->
                 <ul class="hide-bullets">
                 	<?php
                 	if($row['img']!=""){
                    echo '<li class="col-sm-4">
	                        <a class="thumbnail" id="carousel-selector-0">
	                            <img src="produit/'.$row['img'].'">
	                        </a>
	                    </li>';
                    }if($row['img_face']!=""){
	                echo  '<li class="col-sm-4">
	                        <a class="thumbnail" id="carousel-selector-1">
	                         <img src="produit/'.$row['img_face'].'">
	                        </a>
	                    </li>';
                    }if($row['img_darrier']!=""){
	                echo  '<li class="col-sm-4">
	                        <a class="thumbnail" id="carousel-selector-2">
	                       	 <img src="produit/'.$row['img_darrier'].'">
	                        </a>
	                       </li>';
	                   }
	                  ?>
                </ul>

            </div>

            <!--/Slider-->
            <script src="js/imagezoom.js"></script>
						<script defer src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnail"
						  });
						});
			</script>


                  <form method="post">
					<div class="col-md-6 single-top-right">
						<div class="single-para simpleCart_shelfItem">
					<?php

					  $prix=$row['prix'];

					  $prix=number_format($prix*$pridev,1).$dev;

                        ?>
					 	<h2><?php echo $row['marque'];?></h2>
						<p>Référence : <span><?php echo $ref;?></span></p>
						<p>État : <span><?php echo $row['etat'];?></span></p>
						<p id="desc-prod"><?php echo $row['description'];?></p>
						<p class="quantitystock">
							<span id="quantitynumb"><?php echo $row['quantite'];?></span>
							<span id="quantitypro">Produits</span>
							<span class="quantityins">In stock</span>
						</p>
						<p id="partage-social">
							<button id="btn-fa"><i class="fa fa-facebook"></i>Facebook</button>
							<button id="btn-tw"><i class="fa fa-twitter"></i>Twitter</button>
							<button id="btn-go"><i class="fa fa-google-plus"></i>Google+</button>
						</p>



						<p class="prix_display">

							<?php echo $prix;?>

						</p>
						<p style="padding:16px 0 5px">Color</p>
                        <p><?php echo'<span style="background:'.$row['color'].';width:17px;height:17px;display:block;border-radius:4px"></span>'; ?></p>

						<input type="number" name="quantite_com" min="1" value="1">
						<button type="sumbit" name="ajout-pro" class="btn-ajpanier" style="background-color:#4682B4">

						Ajouter Au Panier
          </button><br><?php echo $msg1; ?> <br> <?php echo $msg2; echo $msg; ?>


						</div>
					</div>
				</form>

				</div>
				<ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home" style="color:#444">Fiche technique</a></li>



					  </ul>

					  <div class="tab-content" style="background:transparent">
					    <div id="home" class="tab-pane fade in active">
					    	<table class="table" style="background:#fff;border-radius:4px;border:1px solid #ddd" >
					    		<tbody>
					    		<?php

                  $d=["reference_produit"=>$ref];
                  $f=new fiche_produit($d);
                  $reponse=$f->select_fiche_produit();

						        $donnees = $reponse->fetch();
						        echo '
						        <tr><th>Design</th><td>'.$donnees['design'].'</td></tr>
						        <tr><th>Dimensions</th><td>'.$donnees['dimensions'].'</td></tr>
						        <tr><th>Poids</th><td>'.$donnees['poids'].'</td></tr>
						        <tr><th>Processeur</th><td>'.$donnees['processeur'].'</td></tr>
						        <tr><th>Système d\'exploitation (OS)</th><td>'.$donnees['syse'].'</td></tr>
						        <tr><th>Resolusion</th><td>'.$donnees['resolusion'].'</td></tr>
						        <tr><th>Appareil photo</th><td>'.$donnees['apphoto'].'</td></tr>
						        <tr><th>Mémoire interne</th><td>'.$donnees['memoire'].'</td></tr>
						        <tr><th>4G</th><td>'.$donnees['catg'].'</td></tr>
						        <tr><th>Date sortie</th><td>'.$donnees['date_sortie'].'</td></tr>


						        ';
						        ?>
						        <tbody>
					    	</table>

					     </div>


					 </div>
		  <ul class="nav nav-tabs">
		  	         <?php
		  	             $cat=$row['categorie'];
                     $da=["categorie"=>$cat];
                     $p=new produit($da);
                     $reponse=$p->select_special_produit();

						 $donnees = $reponse->fetch();

		  	             ?>
					    <li class="active"><a data-toggle="tab" href="#home" style="color:#444"><?php echo $donnees['nbr'];?> Autres Produits Dans La Même Catégorie :</a></li>

			 </ul>
			 <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">


						   <nav>
								<ul class="control-box pager">
									<li><a data-slide="prev" href="#myCarousel1" class=""><img src="images/br_prev.png"></a></li>
									<li><a data-slide="next" href="#myCarousel1" class=""><img src="images/br_next.png"></li>
								</ul>
							</nav>
					<div class="carousel slide" id="myCarousel1" >
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                    	<?php
                      $table=["categorie"=>$cat];
                      $pr=new produit($table);
                      $reponse=$pr->select_limit_produit();

                    	 while ($donnees = $reponse->fetch())
				    	{
				        echo'<li class="col-sm-3 product-left">
							     <div class="product-main simpleCart_shelfItem">
							     <a href="single.php?id='.$donnees['id'].'"	 class="mask">
							     <img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt="">
								 </a>
								 <div class="product-bottom">
								 <a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>
							     <h4>'.$donnees['prix']. ' TD</h4>
							     </div>
								 								 <div class="srch">
									<a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
									<a href="single.php?id='.$donnees['id'].'"><i class="fa fa-eye"></i></a>
								 </div>
								</div>
		                        </li>';

                        }
                        ?>


                    </ul>
              </div><!-- /Slide1 -->


        </div>


	   <!-- /.control-box -->

    </div><!-- /#myCarousel -->
					    </div>
					</div>
		    </div>



<?php
        include 'navright.php';
       ?>
</div>
</div>

	<?php
    include 'footer.php' ;
     ?>

	<script type="text/javascript">
	  jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
                interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
	  </script>
</body>
</html>
