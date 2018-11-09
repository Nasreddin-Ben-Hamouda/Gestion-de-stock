<div class="col-md-2 about-right">
     <div class="public-right col-sm-12">
    <img src="images/v2.jpg" width="100%" height="500px">

			 </div>

				<div class="public-right col-sm-12">

						<img <?php echo 'src="images/'.$rows['imgright'].'"';?> width="100%">
				</div>
				<div class="col-sm-12 nou-produit">
				<h4 class="title_block"><a href="x.php?v=Nouveaux produits">Nouveaux produits</a></h4>

				<?php

				  $reponse = $DB_con->query('SELECT * FROM produit ORDER BY date_entre desc  Limit 8 ');
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
				<a href="x.php?v=Nouveaux produits"><h2>Toutes Les Nouveaux Produits</h2></a>
			    </div>






			    </div>
			    <div class="col-sm-12 ttarticl">
					<h4 class="title_block">Catégories </h4>
					<ul class="tt_sf-menu">
					 <li><a href="categorie.php?v=Mobile&x=1&d=<?php echo $devise;?>">Mobile</a></li>
					 <li><a href="categorie.php?v=Laptop&x=1&d=<?php echo $devise;?>">Computers</a></li>
					 <li><a href="categorie.php?v=Electronics&x=1&d=<?php echo $devise;?>">Electronics</a></li>
					 <li><a href="categorie.php?v=Games&x=1&d=<?php echo $devise;?>">Games</a></li>
			        <ul>

                </div>

			</div>
