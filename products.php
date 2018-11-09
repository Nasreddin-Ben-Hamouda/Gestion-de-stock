<?php
include 'classe/user.php';
include 'classe/mailbox.php';
include 'classe/db_conf.php';
require_once 'db_conf.php';
session_start();
if (isset($_SESSION['user_session'])) {

  $umail=$_SESSION['user_session'];
}
 else{ $umail="";}
 if($umail==""){header('location:moncompte.php');}

 $data=["email"=>$umail];
 $users=new user($data);
 $reponse =$users->readuser();
 $donnees=$reponse->fetch();
$user=$donnees['user_id'];
$msg="";
if(isset($_POST['btn_envoie'])){
if($umail==""){

header('Location: moncompte.php');
}
else{
  $objet=$_POST['objet'];
  $ref=$_POST['referance'];
  $txtmsg=$_POST['txtmsg'];
  $vu_admin='non';
  $date= date("d M Y");
$data=["objet"=>$objet,"ref_produit"=>$ref,"message"=>$txtmsg,"vu_admin"=>$vu_admin,"date_msg"=>$date,"user_id"=>$user];
$mailbox=new mailbox($data);
$res=$mailbox->creatmailbox();

  if ($res->rowCount()>0) {
   $msg='<span class="msgsucces">'.$donnees['user_name'].' votre msg a ete envoye...</span>';
               }
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

#extras{
	border-top: 0px solid rgba(0,0,0,0.07)

}


#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}




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
    font: 400 14px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}

.form-contact{
	background-color: #fff;
	border: 1px solid rgba(0,0,0,0.09);

}
.form-contact label{
	width:60%;
    font: 400 12px/20px Poppins-Regular, Helvetica, sans-serif;
    letter-spacing: 0.7px;
    display: block;
    margin-bottom: 0px

}
.form-contact select,.form-contact input[type="text"],.form-contact input[type="email"]{
	display: block;
	width: 80%;
	height: 27px;
	border: 1px solid rgba(0,0,0,0.2);
	margin-bottom: 10px;
	padding: 2px 5px;
    line-height: 1.42857;
    color: #9c9b9b;
    font: 400 11px/20px Poppins-Regular, Helvetica, sans-serif;
}

.form-contact textarea{
	border: 1px solid rgba(0,0,0,0.2);
	font: 400 12px/20px Poppins-Regular, Helvetica, sans-serif;
	width: 100%;
	height: 160px;
	padding: 2px 5px;

    line-height: 1.42857;
    color: #9c9b9b;

}
.form-contact select:focus ,.form-contact input[type="text"]:focus,.form-contact input[type="email"]:focus,.form-contact textarea:focus{
	outline: none;
	border: 1px solid rgba(0,0,0,0.3);


}
.form-contact button{
	margin: -10px 0 20px 20px ;
    font: 400 12px/18px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
    color: white;
    border: none;
    background: #f12a43;
    padding:6px 12px;
    border-radius: 4px;
}

.form-contact button:hover{
	outline: none;
	background: #222
}
.msgsucces{
	font: 400 12px/18px "Poppins", Helvetica, sans-serif;
	padding: 3px 10px
}

  </style>

</head>
<body>

<?php
	   require_once('header.php');
	?>
	<div class="container tthead">
	<div class="col-sm-12">
		<div class="col-md-6 heade-left">
					<h4> Contact</h4>
		</div>
		<div class="col-md-6 heade-right">
			<a href="index.php"><i class="fa fa-home"></i></a>
			<p><span><i class="fa fa-angle-right"></i></span> Contact</p>
		</div>
	</div>
	</div>






	<!--banner-public-->

	<div class="about" >
		<div class="container">
			<?php
				    include 'navleft.php' ;
				  ?>
            <?php
                 $reponse = $DB_con->query("SELECT * FROM produit");

            ?>
			<div class="col-md-8 about-center">
				<h1 class="page-heading">Service client - Contactez-nous</h1>
				<div class="col-md-12 form-contact">
					<h3 class="title-form">Envoyez un message</h3>
					<form method="post">
					<div class="col-md-5">
						<label>Objet</label>
					    <input type="text" placeholder="Objet" name="objet" >

						<label>Référence de commande</label>
						<select name="referance">
							<option value="">Choisissez</option>
							 <?php
							 while ($donnees = $reponse->fetch())
	                         {
	                         	echo'<option value="'.$donnees['referance'].'">'.$donnees['referance'].'</option>';
	                         }
	                         ?>


						</select>


					</div>
					<div class="col-md-7">
						<label>Message</label>
						<textarea name="txtmsg" ></textarea>
					</div>
					<button type="submit" name="btn_envoie" style="background-color:#4682B4"> Envoyer</button><?php echo $msg; ?>
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
