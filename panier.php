<?php
include 'classe/commande.php';
include 'classe/db_conf.php';
include 'classe/user.php';
require_once 'db_conf.php';
session_start();
if (isset($_SESSION['user_session'])) {

  $umail=$_SESSION['user_session'];
}
 else{ $umail="";}
 if($umail==""){header('location:moncompte.php');}



?>
<!DOCTYPE html>
<html>
<head>
<title>Otechnologie</title>
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
.tthead{
  height: 0px
}


.tthead .heade-right span{
  padding: 5px;

}
.tthead .heade-right p{
  display: inline-block;
  color: #555;
  font-size: 12px;
  letter-spacing: 0px;
  opacity: 1

}
.page-heading {
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 0px;
    margin: 0 0 10px;
    padding: 0;
}
.page-heading .right-hading{
  font-size: 11px;
  float: right;
  letter-spacing: 0
}
.page-heading > strong{
    font-size: 35px;
    padding-right: 10px;
    font-weight: bold;
    font-style: italic;
}
.title-form{
    font: 400 15px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 1px;
    margin-bottom: 12px;
    padding: 8px 0;
}

.form-compte{
  background-color: #fff;
}
.form-compte .list-compte li{
  margin: 15px 5px;
  border: 1px solid #ccc
}
.form-compte .list-compte li a{

  display: block;
  color: #888;
   font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
   text-decoration: none;
}
.form-compte .list-compte li:hover{

  border: 1px solid #777;

}

.form-compte .list-compte li a i{
  border-right: 1px solid #ccc;
  display: inline-block;
  height: 100%;
  padding: 15px 17px;
  margin-right: 15px
}
.form-compte .list-compte li:hover  a {

  color: #555
}

.form-compte .list-compte li:hover  a i {
  border-right: 1px solid #777;

}





.about-center .pg-modifl{
  color: #aaa;
    font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
}
.table-bordered{
  border: 1px solid #eee;
  background: #fff
}
.table-bordered > thead > tr > td {
  background: #fff;
  border: 1px solid #e5e5e5;
  font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}

.table-bordered > tbody > tr > td {

  font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #999;
  border:  1px solid #e5e5e5;
  line-height: 55px;

}
.table-bordered > tbody > tr > td  span {
    display: inline-block;
    margin-top: 12px;
    padding: 4px
}
.table-bordered > tbody > tr > td > .prix {
    float: right;
    line-height: 54px;
    color: #f12a43;
    font-size: 12.5px

}
.table-bordered > tfoot > tr > td > .prix {
    float: right;
    color: #f12a43;
    font-size: 12.5px;
    margin-bottom: -10px

}

.table-bordered > tfoot > tr > td > .prix {
    float: right;
    color: #f12a43;
    font-size: 14px;
    margin-bottom: -10px

}

.table-bordered > tbody > tr > td > h2 {

  font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
 color: #999;
 margin: 2px 0 0

}
.table-bordered > tbody > tr > td > p {

  font:200 10px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
 color: #999;
 margin:0

}

.table-bordered > tbody > tr > td > .btnplus {
   background: transparent;
   border: 1px solid #ddd;
   outline: none;
   width: 20px;
   height: 20px;
   border-radius: 4px;
   margin: 0 0 -20px 2px;
   display: inline-block;
   line-height: 0
}
.table-bordered > tbody > tr > td > input {
   background: transparent;
   border: 1px solid #ddd;
   text-align: center;
   width: 50px;
   border-radius: 4px;
   height: 30px;
   margin-bottom: -10px;
   display: block;

   outline: none;
}
.table-bordered > tbody > tr > td > button {
   background: transparent;
   border: none;
   outline: none;
}
.table-bordered > tfoot > tr > td {
   font:200 11px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    color: #555;
  border:  1px solid #e5e5e5;
  text-align: right;
}
.table-bordered > tfoot > tr > td > strong {
   font:200 14px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

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
.btn-panier {
    border-radius: 4px;
    background: #333333;
    font: 200 11px/18px Poppins-Regular,Helvetica,sans-serif;
    padding: 7px 16px;
    color: white;
    margin: 10px 0 36px 0px;
    display: block;
    width: 155px;
    }
    .btn-panier:hover {
    text-decoration: none;
    color: #fff;
    background: #f12a43
    }

.form-insc {
    background-color: #fff;
    border: 1px solid rgba(0,0,0,0.09);
    margin-bottom: 30px
}
.form-insc > p{
 font: 200 11px/18px Poppins-Regular,Helvetica,sans-serif;
 color: #777
}
.title-form {
    font: 400 13px/20px "Poppins", sans-serif;
    color: #444;
    letter-spacing: 0px;
    margin-bottom: 12px;
    padding: 8px 0;
}
.btn-met{

    margin: 10px 0;
    font: 400 11px/18px "Poppins", Helvetica, sans-serif;
    letter-spacing: 0.7px;
    color: white;
    border: none;
    width: 120px;
    text-align: center;
    background: #f12a43;
    padding: 6px 12px;
    border-radius: 4px;
    display: block;

}
.btn-met:hover{
  background: #333333;
  color: #fff;
  text-decoration: none;
}
.choix_paiment li{
  background: #fff;
  border: 1px solid #ddd;
  margin: 10px 0
}
.choix_paiment li a{
  color: #777;
  padding: 12px;
  display: block;
   font: 500 13px/18px Poppins-Regular,Helvetica,sans-serif;
}
.choix_paiment li a:hover{
  color: #f12a43;
  text-decoration: none;

}
.choix_paiment li a .fa-angle-right{
  float: right;
}
.choix_paiment li a .fa{
 padding-right: 10px;
 font-size: 15px
}
  </style>

</head>
<body>
   <?php
        include 'header.php';
       ?>
  <!--banner-public-->
  <div class="container tthead">
  <div class="col-sm-12">
    <div class="col-md-6 heade-left">
          <h4> Panier</h4>
    </div>
    <div class="col-md-6 heade-right">
      <a href="index.php"><i class="fa fa-home"></i></a>
      <p><span><i class="fa fa-angle-right"></i></span> Panier</p>
    </div>
  </div>
  </div>






  <!--banner-public-->

  <div class="about" >
    <div class="container">
      <?php
        include 'navleft.php';
       ?>
      <?php
      $data=["email"=>$umail];
      $users=new user($data);
      $reponse =$users->readuser();
      $donnees=$reponse->fetch();
      $numuser=$donnees['user_id'];
      ?>
      <?php
        if(isset($_POST['pqte'])){
            $numcom= $_POST['pqte'];
            $dataplus=["user_id"=>$numuser,"numcom"=>$numcom];
            $com=new commande($dataplus);
            $req=$com->updateplus();

          }
          if(isset($_POST['mqte'])){
             $numcom= $_POST['mqte'];
             $datamoins=["user_id"=>$numuser,"numcom"=>$numcom];
             $com1=new commande($datamoins);
             $req=$com1->updatemoins();

          }
        ?>
      <?php
        if(isset($_POST['delete_list'])){
          $numcom= $_POST['delete_list'];
          $datadel=["numcom"=>$numcom];
          $com2=new commande($datadel);
          $req=$com2->deletecommande();
          }
        ?>


      <div class="col-md-8 about-center">
        <?php
        $datasel=["user_id"=>$numuser];
        $com3=new commande($datasel);
        $req=$com3->selectpanier();
        $nb= $req->rowCount();
           ?>
        <h1 class="page-heading"> Récapitulatif de la commande

                <p class="right-hading">Votre panier contient <?php echo $nb; ?> produits</p>
              </h1>
        <?php


                    if($nb>0){
          echo '

          <form method="post">
          <table class="table table-bordered">
                     <thead>
                       <tr>
                        <td>Produit</td>
                        <td>Description</td>
                        <td>Disponibilité</td>
                        <td>Prix unitaire</td>
                        <td>Quantité</td>
                        <td></td>
                        <td>Total</td>
                       </tr>
                     </thead>
                     <tbody>';
                   $prixtp=0;

                    while ($donnees = $req->fetch())
            {     $prixt=$donnees['prix']*$donnees['qtee'];
                  $prixtp=$prixtp+$prixt;
                  $prixtt=$prixtp+7.00;
              echo'
                    <tr>
                      <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                        <td>
                        <h2>'.$donnees['marque'].'</h2>
                        <p>Référance: '.$donnees['referance'].'</p>
                        <p>Color: '.$donnees['color'].'</p>
                        </td>
                      <td>
                         <p class="quantitystock">
                         <span class="quantityins">In stock</span>
                         </p>
                      </td>
                      <td><p class="prix">'.$donnees['prix'].'</p></td>
                      <td>
                          <input type="text" value="'.$donnees['qtee'].'">
                          <button type="sumbit" name="mqte" class="btnplus" value="'.$donnees['numcom'].'">-</button>
                          <button type="sumbit" name="pqte" class="btnplus" value="'.$donnees['numcom'].'" >+</button>
                      </td>
                      <td><button type="submit" name="delete_list" value="'.$donnees['numcom'].'"><i class="fa fa-trash-o"></i></button></td>
                      <td><p class="prix">'.$prixt.'</p></td>
                     </tr>';
                      }
                      echo '</tbody>';
                      echo'<tfoot>
                          <tr>
                            <td colspan="3"rowspan="3" ></td>
                            <td colspan="3">Total Produits</td>
                            <td><p class="prix">'.$prixtp.'</p></td>
                          </tr>';
                           echo'<tr>
                           <td  colspan="3">Frais de port</td>
                            <td><p class="prix">7.00</p></td>

                          </tr>';
                           echo'<tr>
                           <td colspan="3"><strong>Total</strong></td>
                            <td><p class="prix"><strong>'.$prixtt.'</strong></p></td>

                          </tr>
                         </tfoot> ';
                     echo'
             </table>
          </form>';
          $data=["email"=>$umail];
          $users=new user($data);
          $reponse =$users->readuser();

           echo '<a href="acceuille.php" class="btn-panier" style="background-color:#4682B4">Continuer mes achats</a>';
            echo '<h1 class="page-heading"><strong>1</strong> Adresses </h1>
                  <div class="col-md-12 form-insc">
                   <h3 class="title-form">Votre adresses</h3>';
                   $donnees = $reponse->fetch();
                   echo '<p>'.$donnees['user_name'].' '.$donnees['user_prenom'].'</p>
                         <p>'.$donnees['societe'].'</p>
                         <p>'.$donnees['adresse'].'</p>
                         <p>'.$donnees['etat'].','.$donnees['ville'].' '.$donnees['cod_postal'].'</p>
                         <p>'.$donnees['pays'].' </p>
                         <p>'.$donnees['num_tel'].' </p>
                         <a href="adresse.php" class="btn-met" style="background-color:#4682B4">Mettre à jour</a>

                  </div>

                <h1 class="page-heading"><strong>2</strong> Choisissez votre moyen de paiement </h1>
                <ul class="choix_paiment">
                  <li><a href="virementban.php?x='.$prixtt.'"><i class="fa fa-credit-card"></i> Payer par virement bancaire (le traitement de la commande sera plus long)
                  <i class="fa fa-angle-right"></i></a></li>
                  <li><a href="paiment.php?x='.$prixtt.'"><i class="fa fa-edit"></i> Payer par chèque (le traitement de la commande sera plus long)
                  <i class="fa fa-angle-right"></i></a></li>
                </ul>

            ';

            }else{
              echo '<div class="col-sm-12 alertmsg"><p>Votre panier est vide<p></div>';

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
</body>
</html>
