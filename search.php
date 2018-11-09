<?php

require_once 'db_conf.php';
session_start();
if (isset($_SESSION['user_session'])) {

  $umail=$_SESSION['user_session'];
}
 else{ $umail="";}


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



select{
  font: 200 12px/18px Poppins-Regular,sans-serif;
}

  .about-left{
  	background-color: #fff
  }
  .about-right{
  	background-color: #fff
  }
  .section-categorie{
  	background-color: #fff;
  	position: relative;
  	height: auto;
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





.infor-right p{
       color: #888;
    font: 500 11px/20px "Poppins", Helvetica, sans-serif;
    margin: 0px 0 3px;
    padding-top: 10px ;
    width: 200px

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

.page-heading {
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin: 0 0 10px;
    padding: 0;
}
.title-form{
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}

.form-electro{
	background-color: #fff;

}
.form-electro .electro-img{
	height: 190px;
	padding: 15px 0
}
.form-electro .electro-img img{
	width: 100%;
	height: 100%
}
.electro-desc{
	padding: 20px 15px
}
.electro-desc p {
color: #888;

font:inherit;

letter-spacing: 0.5px;
margin: 0;
font: 400 11px/20px Poppins-Regular, sans-serif;



}
.electro-desc p > strong{
color: #333333;
font-weight: 400;
padding: 10px 0;
font:inherit;
font-size: 13px;
display: block;
letter-spacing: 0.5px

}
.cat-title{
	width: 100%
}
.cat-title .cat-name{
	color: #333333;
    font: 400 16px/26px "Poppins", sans-serif;

}
.cat-title .cat-pro{
    font: 12px/22px "Poppins", Helvetica, sans-serif;
    float: right;
    letter-spacing: 0;
    margin-top: 16px



}
.form-electro .sous-lapot{
	width: 150px;
	display: inline-block;
	text-align: center;
	margin: 0 3px 25px;



}
.form-electro  .sous-cat{

	padding-top: 7px;
	letter-spacing: 0.5px;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.form-electro .sous-lapot a{
	color: #888;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;


}

 .form-electro .sous-lapot img{
	width: 100%;
	border: 1px solid #ccc;
	padding: 7px 20px;
	border-radius: 5px;
	margin-bottom: 3px
}
.select-form{
	margin: 25px 0 ;
	padding: 0
}
.page-heading .res-right{
	float: right;
  color: #888;
  font: 200 11px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
  padding: 0 4px
}
.select-form .list-form{
	color: #999;
	font-size: 16px;
	margin-right: 6px;
	font-style:italic;

}
.select-form .form-page{
	text-align: right;
	padding: 0
}
.select-form label{

margin: 0 10px 0 0;

color: #222;
font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}

.select-form .result p{
	color: #888888;

	padding-top: 6px;
	letter-spacing: 0.5px;
	font: 200 12px/18px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;


}
.select-form .next-page ul{
	float: right;

}
.select-form .next-page ul li{
	float: left;
	margin:0 3px;

}
.select-form .next-page ul li a{
background: white;
border: 1px solid #eee;
border-radius: 4px;
color: black;
display: block;
height: 30px;
margin: 0;
font-size: 12px;
line-height: 30px;
text-align: center;
width: 30px;
text-decoration: none;

}
.select-form .next-page ul li.active a:hover,.select-form .next-page ul li.active a:focus,.select-form .next-page ul li.active a{
background: #f12a43;
color: #fff

}
.select-form .next-page button{
	font: inherit;
    font-size:12px;
    color: white;
    border: none;
    background: #f12a43;
    padding:6px 12px;
    border-radius: 4px;
}

.select-form button:hover{
	outline: none;
	background: #222

}
.select-form .list-form{
	text-decoration: none;
	cursor: default;
}
#form-verti a.mask{
  display: inline-block;

  width: 140%;
  margin-left: -20px;
}
#form-verti .product-bottom{
  width: 100%
}
#form-verti p{
  display: block;
  position: relative;
  padding: 0;
  color: #444
}
.ff-right{
	display: none;
}
#form-verti .ff-right{

  height: 100%;
  display: block;
}
#form-verti .col-sm-7{
  border-right: 1px solid #ddd;

}
.btn-panier{
  display: none;
}
#form-verti .ff-right .btn-panier{
  border-radius: 4px ;
  border: none;
  background: #333333;
  font: 200 11px/18px Poppins-Regular,Helvetica,sans-serif ;
  padding: 7px 16px;
  color: white;
  margin: 10px 0 18px 15px;
  display: block;

}
#form-verti .ff-right .btn-panier:hover{
 background:  #f12a43
}
#form-verti .ff-right .srch{
  display: block;
  margin-top: 20px;

}
#form-verti .ff-right .srch a{
  width: 34px;
  height: 34px;
  line-height: 34px


}
#form-verti .srch-v{
	display: none;
}
.product-left p{display: none;}
.chang-one{padding: 0}


#form-verti a img{
	float: left;
}

#block-visuel{
	background: rgba(0,0,0,0.5);
	width: 100%;
	height:100vh;
	position: fixed;
	z-index: 9999;
	top: 0;
	left: 0;
	display: none;

}

.block-vu{
	width: 70%;
	height: 79%;
	position: absolute;
	padding: 15px;
	background: #fff;
	top: 10%;
	left: 16%;
	box-shadow: 0 0 27px 0px rgba(0,0,0,0.6);
	display: none;


}
.block-vu #close-art{
	position: absolute;
	right: -10px;
	top: -10px;
	width: 25px;
	display: block;
	height: 25px;
	line-height: 20px;
	border-radius: 50%;
	text-align: center;
	border: 2px solid #fff;
	color: #fff;
	background: #222;
	box-shadow: 0 0 6px #000;
	z-index: 9999


}
.block-vu .fa-close{
	font-weight: 100;
	font-size: 12px
}
#block-visuel  .carousel-inner{
   width: 87%
}
#block-visuel .hide-bullets{
  margin-left: 12%
}
#block-visuel .pri_bloc .hide-bullets .col-sm-4 {
	width: 24%;
}
#block-visuel .single-top-right{
	padding: 10px 0;
	margin-left: -10px
}
#loding{
	background:#111;
	height: 48px;
	text-align: center;
	border-radius: 4px;
	width: 48px;
	line-height: 58px;

	position: absolute;
	top: 44%;
	left: 50%;

}
#loding .fa{
	color: #fff
}

            	.alertmsg{
	background-color: #FFF1F2;
	border:1px solid #F13340;

	height: 45px
}
.alertmsg p{

	font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #F13340;
    line-height: 44px;


}
  </style>
  <script>



   function triselect(str,val) {

  var xhttp;
  if (str == "") {


    return ;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tri").innerHTML = this.responseText;
      if(this.responseText!=""){
      document.getElementById("select-for").innerHTML = "";
    }
    }
  };


  xhttp.open("GET", "trisel.php?q="+str+"&val="+val, true);
  xhttp.send();
}



</script>

       <script type="text/javascript">

  $(document).ready(function(){
    <?php $i=$_GET['x'];?>
    $('.nbr-page li').removeClass("active");
    $('.nbr-page li:eq(<?php echo $i ?>)').addClass("active");

   });
</script>
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
  <script type="text/javascript">


  $(document).ready(function(){
    $("#list-verticle").click(function(){
    	$('.chang-list').attr('id',"form-verti");
        $('.chang-list').attr('class',"col-sm-12 chang-list product-left");
        $('.chang-one').attr('class',"col-sm-2 chang-one");
        $('.change-two').attr('class',"col-sm-7 change-two");



    });
     $("#list-horizantal").click(function(){
    	$('.chang-list').attr('id',"");
        $('.chang-list').attr('class',"col-sm-3 chang-list product-left");
        $('.chang-one').attr('class',"col-sm-12 chang-one");
        $('.change-two').attr('class',"col-sm-12 change-two");



    });

   });
</script>

</head>
<body>
	<?php
        include 'header.php';

   ?>



<div class="container tthead">
  <div class="col-sm-12">
    <div class="col-md-6 heade-left">
          <h4>Search</h4>
    </div>
    <div class="col-md-6 heade-right">
      <a href="index.php"><i class="fa fa-home"></i></a>
      <p><span><i class="fa fa-angle-right"></i></span>Search</p>
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

				<?php
			  $req="";
			 $txtsearch=$_POST['txt-search'];
			 $txtcat=$_POST['select-cat'];
			 $nb=0;



			 if($txtcat=="electronics"){
			 	$req="SELECT * FROM produit where (categorie='mobile' or categorie='laptop') and marque LIKE '%$txtsearch%'";
			 }elseif($txtcat=="Mobile"){
			 	$req="SELECT * FROM produit where categorie='mobile' and marque LIKE '%$txtsearch%'";
			 }elseif($txtcat=="laptop"){
			 	$req="SELECT * FROM produit where categorie='laptop' and marque LIKE '%$txtsearch%'";
			 }elseif($txtcat=="all_ac"){
			 	$req="SELECT * FROM produit where categorie='laptop' and marque LIKE '%$txtsearch%'";
			 }elseif($txtcat=="watch"){
			 	$req="SELECT * FROM produit where categorie='laptop' and marque LIKE '%$txtsearch%'";
			 }elseif($txtcat=="allcat"){
			 	$req="SELECT * FROM produit  where marque LIKE '%$txtsearch%'";
			 }else{
			 	$req="SELECT * FROM produit where model='$txtcat' and marque LIKE '%$txtsearch%'";
			 }
			 $reponse = $DB_con->query($req);
			 if($txtsearch!=""){
			 	$nb= $reponse->rowCount();
			 }



			?>


				<h1 class="page-heading">Search&nbsp;<?php echo '<span style="color:#888"> "'.$txtsearch.'"</span>';?>
        <span class="res-right"><?php echo $nb;?> resultat </span>
         </h1>
		    <?php
				 if($nb!=0){
				    echo'<div class="col-md-12 select-form">
    						<a class="list-form" id="list-horizantal"><i class="fa fa-th"></i> </a>
    						<a class="list-form" id="list-verticle"><i class="fa fa-list"></i> </a>
				    </div>
				  <div class="col-md-12 form-electro thumbnails" > ';



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
						                    <h4>'.$donnees['prix'].' TD</h4>
						                    <p>'.$donnees['description'].'</p>
						                    <p class="quantitystock">
						                      <span id="quantitynumb">'.$donnees['quantite'].'</span>
						                      <span id="quantitypro">Produits</span>
						                      <span class="quantityins">In stock</span>
						                    </p>

						                </div>
						             </div>

						                  <div class="srch" id="srch1">
						                    <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
						                    <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
						                  </div>
						             <div class="col-sm-3 ff-right">

						                

						                  <div class="srch">
						                    <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-heart-o"></i></a>
						                    <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
						                  </div>
						            </div>









								</div>
	                          </div>';
	                      }


                  echo '</div>';
         }
                     ?>

       <?php
             if ($nb==0) {


        echo '<div class="col-sm-12 alertmsg"><p>No results were found for your search "'.$txtsearch.'"</p></div>';
       }
       ?>

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

        $('#myCarousel5').carousel({
                interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selectr-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel5').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel5').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    </script>

				</div>

			</div>

	</div>

</body>
</html>
