<div class="col-md-2 about-left">
				<div class="section-categorie">
				  <h4 class="title_block"><span class="cattit">Categories</span></h4>

         <ul class="ttmenub">
          <li><a class="ttmenu">Menu</a>
				  <ul class="tt_sf-menu">
				  	<li class="dropdown"><a href="categorie.php?v=Electronics&x=1&d=<?php echo $devise; ?>"  class="dropdown-toggle">Electronics <i class="fa fa-angle-right" ></i></a>
					   <ul class="dropdown-menu dropdown-menu-right">
						      <li><a href="categorie.php?v=Mobile&x=1&d=<?php echo $devise; ?>">MOBILE</a>
						      	<ul>
						        	<li><a href="categorie.php?v=samsung&x=1&d=<?php echo $devise; ?>">Samsung</a></li>
						        	<li><a href="categorie.php?v=nokia&x=1&d=<?php echo $devise; ?>" >Nokia</a></li>
						        	<li><a href="categorie.php?v=iphone&x=1&d=<?php echo $devise; ?>">Iphone</a></li>
						        	<li><a href="categorie.php?v=htc&x=1&d=<?php echo $devise; ?>">HTC</a></li>

						      	</ul>
						      </li>
						      <li><a href="categorie.php?v=Laptop&x=1&d=<?php echo $devise; ?>">LAPTOP</a>
						      	<ul>
						      		<li><a href="categorie.php?v=Lenovo&x=1&d=<?php echo $devise; ?>" >Lenovo</a></li>
								  	<li><a href="categorie.php?v=Dell&x=1&d=<?php echo $devise; ?>" >Dell</a></li>
								  	<li><a href="categorie.php?v=Acer&x=1&d=<?php echo $devise; ?>" >Acer</a></li>
						      		<li><a href="categorie.php?v=Accesoires&x=1&d=<?php echo $devise; ?>" >All Accesoires</a></li>

						      	</ul></li>
						      <li class="category-img"><img src="images/ppu.jpg"></li>

						    </ul>

					 </li>

				  	<li class="dropdown"><a href="categorie.php?v=Lenovo&x=1&d=<?php echo $devise; ?>"  class="dropdown-toggle" data-toggle="dropdown">Lenovo  <i class="fa fa-angle-right" ></i></a>
				  		<ul class="dropdown-menu dropdown-menu-right">
					      <li><a href="categorie.php?v=Digitalcamera&x=1&d=<?php echo $devise; ?>">Digital camera</a></li>
					      <li><a href="categorie.php?v=Headphone&x=1&d=<?php echo $devise; ?>">Headphone</a></li>
					      <li><a href="categorie.php?v=watch&x=1&d=<?php echo $devise; ?>">Watch</a></li>
					      <li><a href="categorie.php?v=Rockingchair&x=1&d=<?php echo $devise; ?>">Rocking chair</a></li>
					      <li><a href="categorie.php?v=barstool&x=1&d=<?php echo $devise; ?>">bar stool</a></li>

					    </ul>
					 </li>

				  	<li class="dropdown"><a href=""  class="dropdown-toggle" data-toggle="dropdown">All Accesoires <i class="fa fa-angle-right" ></i></a>
				  		<ul class="dropdown-menu dropdown-menu-right">
					      <li><a href="categorie.php?v=picnictable&x=1&d=<?php echo $devise;?>">picnic table</a></li>
					      <li><a href="categorie.php?v=writingdesk&x=1&d=<?php echo $devise;?>">writing desk</a></li>
					      <li><a href="categorie.php?v=coffeetable&x=1&d=<?php echo $devise;?>">coffee table</a></li>

					    </ul>
					</li>
				  	<li><a href="categorie.php?v=htc&x=1&d=<?php echo $devise; ?>" >HTC</a></li>
				  	<li class="dropdown"><a  href="checkout.php?v=Mobile&x=1&d=<?php echo $devise; ?>"  class="dropdown-toggle" >Mobile <i class="fa fa-angle-right" ></i></a>
				  		<ul class="dropdown-menu dropdown-menu-right">
					      <li><a href="categorie.php?v=samsung&x=1&d=<?php echo $devise; ?>">Samsung</a></li>
					      <li><a href="categorie.php?v=nokia&x=1&d=<?php echo $devise; ?>">nokia</a></li>
					      <li><a href="categorie.php?v=iphone&x=1&d=<?php echo $devise; ?>">Iphone</a></li>
					      <li><a href="categorie.php?v=htc&x=1&d=<?php echo $devise; ?>">htc</a></li>

					    </ul>
					</li>
				  	<li><a href="categorie.php?v=Dell&x=1&d=<?php echo $devise;?>" >Dell</a></li>
				  	<li><a href="categorie.php?v=samsung&x=1&d=<?php echo $devise; ?>">Samsung</a></li>
				  	<li><a href="categorie.php?v=nokia&x=1&d=<?php echo $devise; ?>" >Nokia</a></li>
				  	<li><a href="categorie.php?v=barstool&x=1&d=<?php echo $devise;?>" >Bar Stool</a></li>
				  	<li><a href="categorie.php?v=Digitalcamera&x=1&d=<?php echo $devise;?>" >Digital Camera</a></li>
				  	<li><a href="" >Picnic Table</a></li>
				  	<li><a href="" >Writing Desk</a></li>
				  	<li><a href="categorie.php?v=watch&x=1&d=<?php echo $devise;?>" >Watch</a></li>
				  	<li><a href="categorie.php?v=iphone&x=1&d=<?php echo $devise; ?>">Iphone</a></li>

				  </ul>
        </li>
         </ul>
				</div>
				<div class="public-left col-sm-12">

						<img <?php echo 'src="images/'.$rows['imgleft'].'"';?> width="100%">
				</div>
				<div class="col-sm-12 nou-produit mediapro">
				<h4 class="title_block"><a href="x.php?v=Meilleures Ventes">Meilleures ventes</a></h4>

				<?php

				  $reponse = $DB_con->query('SELECT * FROM commande,produit where commande.pro_id=produit.id GROUP BY (pro_id) LIMIT 6');
					while ($donnees = $reponse->fetch())
				    	{
				    		 $prix=$donnees['prix'];
				    		 $prix=number_format($prix*$pridev,1).$dev;

							echo '<div class="col-sm-10">
									<div class="col-sm-5">
										<a href="single.php?id='.$donnees['id'].'"><img src="produit/'.$donnees['img'].'"></a>
									</div>
									<div class="col-sm-7">
										<a href="single.php?id='.$donnees['id'].'">'.$donnees['marque'].'</a>
										<h3>'.$prix.'</h3>
									</div>
								  </div>';
					    }
				?>


				<div class="col-sm-12">
				<a href="x.php?v=Meilleures Ventes"><h2>Toutes Les Meilleures ventes</h2></a>
			    </div>




			    </div>
			    <div class="col-sm-12 ttarticl">
					<h4 class="title_block">Nos magasins</h4>
					<img src="images/boutique.jpg">
					<a href=""><h3>Découvrez Nos Magasins</h3></a>

                </div>
                <div class="col-sm-12 ttarticl" id="extras">
					<h4 class="title_block">Extras</h4>
					<ul class="tt_sf-menu">
					 <li><a href="">About us</a></li>
					 <li><a href="">Legal notice</a></li>
					 <li><a href="">Privacy and policy</a></li>
					 <li><a href="">Terms and condition</a></li>
			        <ul>

                </div>
			</div>
	<?php if($userpers=="admin"){
	 echo '<a href="admin.php" class="config"><i class="fa fa-cogs"></i></span></a>';
	}
