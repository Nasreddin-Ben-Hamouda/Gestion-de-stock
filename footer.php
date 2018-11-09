<!--information-starts-->
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<div class="col-sm-3">
						<img src="images/zz.jpg">
					</div>

					<div class="col-sm-9">
						<h3>Assured Purchase</h3>
						<p>Provide genuine service & store products</p>
					 <ul>
						<li><a><img src="images/onebit_34.png" class="icon-on"> 100% genuine products</a></li>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Deliver items at door</a></li>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Free to return products</a></li>
					</ul>
					</div>
				</div>
				<div class="col-md-3 infor-left">
					<div class="col-sm-3">
						<img src="images/22.jpg">
					</div>

					<div class="col-sm-9">
						<h3>Esay To Buy & Return</h3>
						<p>Single click to buy & return products</p>
					 <ul>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Same day devilery available</a></li>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Click to return products</a></li>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Quick support links available</a></li>
					</ul>
					</div>
				</div>
				<div class="col-md-3 infor-left">
					<div class="col-sm-3">
						<img src="images/ik.jpg">
					</div>

					<div class="col-sm-9">
						<h3>Secure Payments</h3>
						<p>Accepts all credit & debit cards</p>
					 <ul>
						<li><a ><img src="images/onebit_34.png" class="icon-on"> 100% payment security</a></li>
						<li><a><img src="images/onebit_34.png" class="icon-on"> Confirmation authentity</a></li>
						<li><a ><img src="images/onebit_34.png" class="icon-on"> delivery items at door</a></li>
					</ul>
					</div>
				</div>
				<div class="col-md-3 infor-left">
					<div class="col-sm-3">
						<img src="images/ac.jpg">
					</div>

					<div class="col-sm-9">
						<h3>Download Center</h3>
						<p>Use mobile app and get biggest discounts</p>
					 <ul>
						<li><a><i class="fa fa-android"></i>&nbsp; Android</a></li>
						<li><a ><i class="fa fa-apple"></i>&nbsp; IOs</a></li>

					</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="infor-top">
				<div class="col-md-2 infor-right">


						<h3>About Store</h3>
						<p>Claritas processus dynamicus sequitu consut, consut ryethm sirter smreted oeureots.</p>

				</div>
				<div class="col-md-2 infor-right">

						<h3>Catégories</h3>

					 <ul>
						<li><a href="categorie.php?v=Mobile&x=1&d=<?php echo $devise;?>">Mobile</a></li>
						<li><a href="categorie.php?v=laptop&x=1&d=<?php echo $devise;?>">Computers</a></li>
						<li><a href="categorie.php?v=Electronics&x=1&d=<?php echo $devise;?>">Electronics</a></li>
						<li><a href="categorie.php?v=Games&x=1&d=<?php echo $devise;?>">Games</a></li>
					</ul>

				</div>
				<div class="col-md-2 infor-right">

						<h3>Mon Compte</h3>

					 <ul>
						<li><a href="commande1.php">Mes commandes</a></li>
						<li><a href="adresse.php">Mes adresses</a></li>
						<li><a href="typ1.php">Mes informations personnelles</a></li>
						<li><a href="panier.php">Mon Panier</a></li>
						<?php if(isset($_SESSION['user_session'])){
							echo '<li><a href="classe/deconnexion.php">Déconnexion</a></li>';
						}
						?>
					</ul>

				</div>
				<div class="col-md-3 infor-right">

						<h3>Informations Sur Boutique</h3>

					 <ul>
						<li><p><i class="fa fa-map-marker"></i>&nbsp;Hbib Bourguiba,EL Alia 7016 Bizerte Tunisie</p></li>
						<li><p><i class="fa fa-phone"></i>&nbsp;0021629902660</p></li>
						<li><p><i class="fa fa-envelope-o"></i>&nbsp;ozalisetechnologie@gmail.com</p></li>

					</ul>

				</div>

				<div class="col-md-2 infor-right">

						<h3>Lettre D'informations</h3>

					 <p>Wants to get an Updates, please Join our Subscribtion!</p>
					 <form>

						<input type="text" placeholder="Enter Your Email..." style="font:200 11px/24px Poppins-Regular">
						<input type="submit" value="ok">

					</form>


				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-sm-12 infor-bottom">
				<ul style="	text-align: center">
				<li><a href="">Promotions -</a></li>
				<li><a href=""> Nouveaux produits -</a></li>
				<li><a href=""> Meilleures ventes -</a></li>
				<li><a href=""> Nos magasins -</a></li>
				<li><a href=""> Contactez-nous -</a></li>
				<li><a href=""> Terms and conditions of use -</a></li>
				<li><a href=""> About us -</a></li>
				<li><a href=""> sitemap</a></li>

				</ul>
			</div>

		</div>

	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer" style="background-color:#4682B4">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<h6>©2018 - Ozalise Technologie e-commerce par <i>Nasreddine Ben Hammouda </i></h6>


				</div>
				<div class="col-md-6 footer-right">

					<a href=""><i class="fa fa-facebook"></i></a>&nbsp;&nbsp; <a href=""><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;<a href=""><i class="fa fa-google-plus"></i></a>


				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->
		<div id="block-visuel">
		    <div id="loding">
					<i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
				</div>
			<div class="block-vu">
				<span id="close-art"><i class="fa fa-close"></i></span>

 			<div class="pri_bloc col-sm-12" id="txtHint">



      </div>

		</div>

        </div>
