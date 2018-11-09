<?php
require_once 'db_conf.php';

$q = $_GET["q"];


          $reponse = $DB_con->query("SELECT * from produit where id='$q'");

              $donnees = $reponse->fetch() ;

                      $prix=$donnees['prix'];

                      $prix=number_format($prix*$pridev,1).$dev;


                 echo'



                        <div class="col-md-6">
                 <div id="slider">
                  <div class="row"  >




                        <div class="col-sm-12" >
                            <div class="carousel slide flexslider" id="myCarousel5">
                                <!-- Carousel items -->
                                <div class="carousel-inner">';
                                                if($donnees['img']!=""){
                                        echo '<div class="active item thumb-image" data-slide-number="0">';
                                        echo '<img src="produit/'.$donnees['img'].'" data-imagezoom="true" class="img-responsive">';
                                          echo '</div>';
                                      }if($donnees['img_face']!=""){
                                              echo '<div class="item" data-slide-number="1">';
                                                        echo '<img src="produit/'.$donnees['img_face'].'">' ;
                                                        echo '</div>';
                                                    }if($donnees['img_darrier']!=""){
                                                            echo '<div class="item" data-slide-number="2">';
                                                            echo '<img src="produit/'.$donnees['img_darrier'].'">';
                                                          echo '</div>';
                                                        }


                                echo'</div>
                                <!-- Carousel nav -->

                          </div>
                      </div>
                      </div>
                      </div>
                      <ul class="hide-bullets">';
                          if($donnees['img']!=""){
                        echo '<li class="col-sm-4">
                              <a class="thumbnail" id="carousel-selector-0">
                                  <img src="produit/'.$donnees['img'].'">
                              </a>
                          </li>';
                        }if($donnees['img_face']!=""){
                      echo  '<li class="col-sm-4">
                              <a class="thumbnail" id="carousel-selector-1">
                               <img src="produit/'.$donnees['img_face'].'">
                              </a>
                          </li>';
                        }if($donnees['img_darrier']!=""){
                      echo  '<li class="col-sm-4">
                              <a class="thumbnail" id="carousel-selector-2">
                               <img src="produit/'.$donnees['img_darrier'].'">
                              </a>
                             </li>';
                     }

                      echo'</ul>
                      </div>

                        <div class="col-md-6 single-top-right">
                        <div class="single-para simpleCart_shelfItem">
                        <h2> '.$donnees['marque'].'</h2>
                        <p>Référence :<span> '.$donnees['referance'].' </span></p>
                        <p>État : <span> '.$donnees['etat'].' </span></p>
                        <p id="desc-prod">'.$donnees['description'].'</p>
                        <p id="quantitystock">
                          <span id="quantitynumb">'.$donnees['quantite'].'</span>
                          <span id="quantitypro">Produits</span>
                          <span id="quantityins">In stock</span>
                        </p>
                        <p id="partage-social">
                          <button id="btn-fa"><i class="fa fa-facebook"></i>Facebook</button>
                          <button id="btn-tw"><i class="fa fa-twitter"></i>Twitter</button>
                          <button id="btn-go"><i class="fa fa-google-plus"></i>Google+</button>
                        </p>


                        <p style="padding:16px 0 5px">Color</p>
                        <p><span style="background:'.$donnees['color'].';width:17px;height:17px;display:block;border-radius:4px"></span></p>

                        

                        </div>
                      </div>







        ';



?>
