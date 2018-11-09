
<?php
				include 'db_conf.php';

session_start();
				if (isset($_SESSION['user_session'])) {

					$umail=$_SESSION['user_session'];
				}
				 else{
					$umail="";
				 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Ozalise Technologie 1</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style2.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />


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

.thumbnails .col-sm-3{padding-left: 2px;padding-right: 2px}



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




li { list-style-type:none;}


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


  .form-search{
  	padding: 25px 45px 15px
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

#marq img{opacity: 0.7}
#marq img:hover{opacity: 1}

input[type="radio"]{
	width: 100px;
	position: absolute;
	opacity: 0


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

.star5{
  margin-top: -2px;
  margin-bottom: -4px
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

	<?php

	   include 'header.php' ;
	?>

	<div class="col-sm-12 publichaut" >
		<div class="container">

		<img <?php echo 'src="images/'.$rows['imgtop'].'"';?> style="width:100%;height:110px;padding:0 10px 0 0px"  >
		</div>

	</div>




	<!--banner-public-->

	<div class="about" >
		<div class="container">
			 <?php
        include 'navleft.php';
       ?>

			<div class="col-md-8 about-center">
  					<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
			    <div class="item active">
			    	<img  <?php echo 'src="images/'.$rows['imgcarousel1'].'"';?> alt="First slide">
                    <!-- Static Header -->
                   </div>
			    <div class="item">
			    	<img <?php echo 'src="images/'.$rows['imgcarousel2'].'"';?> alt="Second slide">

			    </div>

			</div>
			<!-- Controls -->

		</div><!-- /carousel -->
				<div class="col-sm-12" style="padding:20px 0">
					<img <?php echo 'src="images/'.$rows['imgbcar'].'"';?> style="width:100%;height:50px;margin-top:-20px;padding:0 5px">

				</div>


					  <ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home">New Products</a></li>


					  </ul>

					  <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">


						   <nav>
								<ul class="control-box pager">
									<li><a data-slide="prev" href="#myCarousel" class=""><img src="images/br_prev.png"></a></li>
									<li><a data-slide="next" href="#myCarousel" class=""><img src="images/br_next.png"></li>
								</ul>
							</nav>
					<div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
            	<form method="post">
                    <ul class="thumbnails">
                    		<?php


						   $reponse = $DB_con->query("SELECT * FROM produit  Limit 8 OFFSET 0");
							while ($donnees = $reponse->fetch())
							{      $prix=$donnees['prix'];

						         $prix=number_format($prix*$pridev,1).$dev;




							echo'<li class="col-sm-3 product-left">
							     <div class="product-main simpleCart_shelfItem">';
							echo '<a href="single.php?id='.$donnees['id'].'"	 class="mask">';
							echo '<img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt=""></a>';
							echo '<div class="product-bottom">';
							echo '<a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>';

							echo '</div>';

								echo '<div class="srch">
									<a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
									<a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
									<button type="submit" value="'.$donnees['id'].'" name="addlist"><i class="fa fa-heart-o"></i></button>
								</div>
									</div>
		                        </li>';

							}?>

                    </ul>
                  </form>
              </div><!-- /Slide1 -->
            <div class="item">
							<form method="post">
										<ul class="thumbnails">
                          <?php

								 $reponse = $DB_con->query('SELECT * FROM produit  Limit 8 OFFSET 8');

							while ($donnees = $reponse->fetch())
              {      $prix=$donnees['prix'];

                     $prix=number_format($prix*$pridev,1).$dev;




              echo'<li class="col-sm-3 product-left">
                   <div class="product-main simpleCart_shelfItem">';
              echo '<a href="single.php?id='.$donnees['id'].'"   class="mask">';
              echo '<img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt=""></a>';
              echo '<div class="product-bottom">';
              echo '<a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>';
              echo '<p class="star5">';

              echo '  <div class="srch">
                  <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
                  <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
                  <button type="submit" value="'.$donnees['id'].'" name="addlist"><i class="fa fa-heart-o"></i></button>
                </div>
                  </div>
                            </li>';

              }?>



                    </ul>
										</form>
              </div><!-- /Slide2 -->

        </div>


	   <!-- /.control-box -->

    </div><!-- /#myCarousel -->
					    </div>


			 </div>
			 <div class="col-sm-12 ttcmssubbanners">
			 	<div class="col-sm-4">
			 		<img <?php echo 'src="images/'.$rows['imgbot1'].'"';?>>
			 	</div>
			 	<div class="col-sm-4">
			 		<img <?php echo 'src="images/'.$rows['imgbot2'].'"';?>>
			 	</div>
			 	<div class="col-sm-4">
			 		<img <?php echo 'src="images/'.$rows['imgbot3'].'"';?>>
			 	</div>




			 </div>
			 <ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home" style="color:#444">Specials</a></li>

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
              <form method="post">
                    <ul class="thumbnails">
                         <?php

								 $reponse = $DB_con->query('SELECT * FROM produit  ORDER by rand() Limit 4 OFFSET 0');
							while ($donnees = $reponse->fetch())
              {      $prix=$donnees['prix'];

                     $prix=number_format($prix*$pridev,1).$dev;




              echo'<li class="col-sm-3 product-left">
                   <div class="product-main simpleCart_shelfItem">';
              echo '<a href="single.php?id='.$donnees['id'].'"   class="mask">';
              echo '<img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt=""></a>';
              echo '<div class="product-bottom">';
              echo '<a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>';
              echo '<p class="star5">';

                echo '<div class="srch">
                  <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
                  <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
                  <button type="submit" value="'.$donnees['id'].'" name="addlist"><i class="fa fa-heart-o"></i></button>
                </div>
                  </div>
                            </li>';

              }?>


                    </ul>

              </div><!-- /Slide1 -->
            <div class="item">
                    <ul class="thumbnails">
                         <?php

								 $reponse = $DB_con->query('SELECT * FROM produit  Limit 4 OFFSET 4');

							while ($donnees = $reponse->fetch())
              {      $prix=$donnees['prix'];

                     $prix=number_format($prix*$pridev,1).$dev;




              echo'<li class="col-sm-3 product-left">
                   <div class="product-main simpleCart_shelfItem">';
              echo '<a href="single.php?id='.$donnees['id'].'"   class="mask">';
              echo '<img class="img-responsive zoom-img" src="produit/'.$donnees['img'].'" alt=""></a>';
              echo '<div class="product-bottom">';
              echo '<a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>';
              echo '<p class="star5">';

              echo '  <div class="srch">
                  <a href="single.php?id='.$donnees['id'].'"><i class="fa fa-opencart"></i></a>
                  <a class="open-show" data-id="' .$donnees['id'].'"  ><i class="fa fa-eye"></i></a>
                  <button type="submit" value="'.$donnees['id'].'" name="addlist"><i class="fa fa-heart-o"></i></button>
                </div>
                  </div>
                            </li>';

              }?>




                    </ul>
                     </form>
              </div><!-- /Slide2 -->

        </div>


	   <!-- /.control-box -->

    </div><!-- /#myCarousel -->
					    </div>
					</div>

					<ul class="nav nav-tabs">
					    <li class="active"><a data-toggle="tab" href="#home" style="color:#444;margin-top:25px">Manufacturers</a></li>

			 </ul>
			   <div class="tab-content">
					    <div id="home" class="tab-pane fade in active">
					    	<MARQUEE BEHAVIOR="alternate" id="marq">
					    		<img src="images/33.jpg">
					    		<img src="images/44.jpg">
					    		<img src="images/55.jpg">
					    		<img src="images/66.jpg">
					    		<img src="images/77.jpg">
					    		<img src="images/88.jpg">
					    		<img src="images/10.jpg">
					    		 </MARQUEE>




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





</body>

</html>
