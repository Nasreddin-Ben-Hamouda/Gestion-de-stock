
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>nav admin</title>
  <!-- Bootstrap core CSS-->

  <link href="css/style-responsive.css" rel="stylesheet" />

  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
    <a class="navbar-brand" href="index.html">Ozalise Technologie</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-top-links navbar-right">

                    <?php
                    include 'db_conf.php';
                                    $reponse = $DB_con->query("SELECT count(numcom) as nbcom FROM commande where vu='non' and  confirme='oui'");
                                    $row=$reponse->fetch();
                                    $nbrcom="";
                                    if($row['nbcom']>0){
                                        $nbrcom=$row['nbcom'];
                                    }
                    ?>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                            <i class="fa fa-bell-o"></i><strong style="font-size:19px;color:#045380;"> <?php echo $nbrcom; ?></strong>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <?php
                              $reponse = $DB_con->query("SELECT * FROM commande,produit,users
                                where commande.user_id=users.user_id and produit.id=commande.pro_id and commande.confirme='oui' Order by(numcom) Desc LIMIT 4");
                              $date_entre=date("Y-m-d")." ".date("H:i:s");
                              while($row=$reponse->fetch()){
                                echo'
                                <li class="divise-no">
                                <a href="#">
                                    <div>
                                        <h2 class="drop_title">'.$row['user_prenom'].$row['user_name'].'
                                        <span class="drop_txt">a commande '.$row['qtee'].' x</span>
                                        '.$row['marque'].'
                                        </h2>
                                        <h3 class="drop_date">'.$row['date_com'].'</h3>
                                    </div>
                                </a>
                               </li>';
                              }


                            ?>
                            <li>
                                <a class="text-center btn-enx" href="commande.php">
                                    <strong>See All Commande</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>

                  </ul>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" ><br><br>
        <?php
                include 'db_conf.php';

                if (isset($_SESSION['user_session'])) {

                	$umail=$_SESSION['user_session'];
                }
                 else{
                 	$umail="";
                 }
                $reponse= $DB_con->query("SELECT * FROM users where user_email='$umail'");
                $donnees=$reponse->fetch(PDO::FETCH_ASSOC);


        ?>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding:10px 7px">

                              <img alt="" <?php echo 'src="images/'.$donnees['user_img'].'"';?> style="width:30px;height:30px;border-radius:50%">

                          <span class="username"><?php echo $donnees['user_prenom']." ".$donnees['user_name'];?></span>
                          <b class="caret"></b>
                      </a>
          <ul class="dropdown-menu extended logout">
            <div class="log-arrow-up"></div>
            <li class="eborder-top">
              <a href="ajoutadmin.php"><i class="fa fa-user fa-fw"></i> My Profile</a>
            </li>
            <li>
              <a href="acceuille.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
            </li>

          </ul>
        </li>
        <br><hr style="background-color:white">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Produit">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-cubes fa-fw"></i>
            <span class="nav-link-text">produit</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="produit.php">liste produit</a>
            </li>
            <li>
              <a href="ajoutproduit.php">ajouter produit</a>
            </li>

              </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="commande">
              <a class="nav-link" href="commande.php">
                <i class="fa fa-list-ol fa-fw"></i>
                <span class="nav-link-text">commande</span>
              </a>
            </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="admin">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapse" data-parent="#example">
            <i class="fa fa-user fa-fw"></i>
            <span class="nav-link-text">User</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapse">
            <li>
              <a href="admin.php">liste user</a>
            </li>
            <li>
              <a href="ajoutadmin.php">Ajouter Admin ou user</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fournisseur">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collaps" data-parent="#exampl">
            <i class="fa fa-user fa-fw"></i>
            <span class="nav-link-text">Fournisseur</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collaps">
            <li>
              <a href="fourn.php">liste Fournisseur</a>
            </li>
            <li>
              <a href="ajoutfourn.php">Ajouter Fournisseur</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Malbox">
          <a class="nav-link" href="mail.php">
            <i class="fa fa-envelope"></i>
            <span class="nav-link-text">Malbox</span>
          </a>
        </li><li class="nav-item" data-toggle="tooltip" data-placement="right" title="Form">
          <a class="nav-link" href="form.php">
            <i class="fa fa-edit"></i>
            <span class="nav-link-text">Form</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">



        <li class="nav-item">
          <a class="nav-link"  data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>

      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Votre Site Web 2018 travail de nasreddine ben hamouda </small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="classe/deconnexion.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
      </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>


</body>

</html>
