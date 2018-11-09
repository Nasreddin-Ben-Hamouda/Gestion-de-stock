<?php
include 'classe/db_conf.php';
include 'classe/user.php';
session_start();

if(isset($_POST['btn-login'])) {

$umail = $_POST['uname_email'];
$upass = $_POST['uname_pass'];
$_SESSION['user_session'] =$umail;
$data=["email"=>$umail];
$users=new user($data);
$reponse =$users->readuser();
$donnees=$reponse->fetch();
$nb= $reponse->rowCount();
  if ($nb>0) {
   if($donnees['user_pass']==$upass){
   	  if(  $donnees['personnalite']=="user" ){
   	  	header('Location: acceuille.php');
   	  }
      else if($donnees['personnalite']=="admin" ){
   	  	header('Location: produit.php');
   	  }


         }else{
        	$error="Mot de passe incorrect";
          }
      }else {
        	$error = "Adresse e-mail invalide.";
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




  .about-left{
  	background-color: #fff
  }
  .about-right{
  	background-color: #fff
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



.tab-content .col-md-3{
	padding-left: 5px;
	padding-right: 5px
}
.ttcmssubbanners{

	margin: 22px 0;
	padding: 0
}

.ttcmssubbanners img{
	background-color: #fff;
	padding: 10px;
	width: 100%
}

#extras{
	border-top: 0px solid rgba(0,0,0,0.07)

}


/*    index.html     */
.about {
    margin-top: -30px;
}

.page-heading {
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin: 0 0 10px;
    padding: 0;
}
.title-form{
    font: 400 13px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}
.form-inscrie, .form-login{
	padding: 0;

}
.form-login form{
	background-color: #fff;
	padding: 1px 12px;
	margin-left: 70px;
		border: 1px solid rgba(0,0,0,0.09);
		height:300px;

}
.form-inscrie form{
	background-color: #fff;
	padding: 1px 12px;
	margin-right: 10px;
	border: 1px solid rgba(0,0,0,0.09);
	height:260px;
}
.form-inscrie p{
	font: inherit;
	color: #999;
	padding: 0;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.form-login a{
	color: #999;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
	text-decoration: underline;
	margin-left: 280px
}
.about-center label{
	width: 32%;
    font: 400 12px/20px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
}
.about-center input{
	width:250px;
    padding: 2px 5px;
    height: 30px;
    font-size: 13px;
    line-height: 1.42857;
    color: #9c9b9b;
    vertical-align: middle;
    background-color: white;
    border: 1px solid #d6d4d4;
    margin: 3px 0;
    border: 1px solid rgba(0,0,0,0.2);
    font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}
.about-center input:focus{
	outline: none;
	border: 1px solid rgba(0,0,0,0.3);


}
.about-center button{
	margin: 10px 0 30px 118px;
    font: 400 12px/18px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
    color: white;
    border: none;
    background: #4682B4;
    padding:6px 12px;
    border-radius: 4px;

}
.about-center button:hover{
	outline: none;
	background: #222
}


  </style>

</head>
<body>
	<?php
	  include 'header.php';
	?>
	<div class="container tthead">
	<div class="col-sm-12">
		<div class="col-md-6 heade-left">
					<h4>Identifiez-Vous</h4>
		</div>
		<div class="col-md-6 heade-right">
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span>Identifiez-Vous</p>
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
				<h1 class="page-heading">Identifiez-vous</h1>
				<div id="error">
                                 <?php

                                if((isset($_POST['btn-login']))&&(isset($error))) {
                                 ?>
                                 <div class="alert alert-danger">


                                 <img src="images/close.png" class="fa-close" data-dismiss="alert" aria-hidden="true">
                                <?php
                                echo "&nbsp;1. ".$error; ?>
                                 </div>
                                 <?php
                                }
                                 ?>

                    </div>

				<div class="col-md-11 form-login">
					<form method="post">
					<h3 class="title-form">Déja inscrit?</h3>

					<label>Adresse e-mail</label><input type="email" class="form-input" name="uname_email" <?php if(isset($_POST['uname_email'])){
           echo 'value="'.$_POST['uname_email'].'"';
          } ?>><br/>
					<label>Mot de passe</label><input type="password" class="form-input" name="uname_pass"><br/><br>
					<a href="">Mot de passe oublie ?</a><br/><br>
					<button type="sumbit" name="btn-login"> Connexion</button><br>
            <a class="d-block small" href="inscription1.php">Inscripter vous </a>
					</form>

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
</body>
</html>
