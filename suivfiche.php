<?php
require_once 'testadmin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cordonneé</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">

</head>

<style type="text/css">
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }
#page-wrapper{margin-left: 10px;  width:1080px;}



</style>


<body>



        <?php

          include 'navbar.php';
        ?>

  <div class="container">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Suivie fiche technique</h1>
                    <p>home / Suivie fiche technique</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php
            include "classe/fiche_produit.php";
            include "classe/db_conf.php";
            $ref=$_GET['id'];
            $data=["reference_produit"=>$ref];
            $fiche=new fiche_produit($data);


            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">

                            <table class="table" style="background:#fff;border-radius:4px;border:1px solid #ddd" >
                              <tbody>
                              <?php
                              $reponse =$fiche->select_fiche_produit();
                                $donnees = $reponse->fetch();
                                echo '
                                <tr><th>Design</th><td>'.$donnees['design'].'</td></tr>
                                <tr><th>Dimensions</th><td>'.$donnees['dimensions'].'</td></tr>
                                <tr><th>Poids</th><td>'.$donnees['poids'].'</td></tr>
                                <tr><th>Processeur</th><td>'.$donnees['processeur'].'</td></tr>
                                <tr><th>Système d\'exploitation (OS)</th><td>'.$donnees['syse'].'</td></tr>
                                <tr><th>Resolusion</th><td>'.$donnees['resolusion'].'</td></tr>
                                <tr><th>Appareil photo</th><td>'.$donnees['apphoto'].'</td></tr>
                                <tr><th>Mémoire interne</th><td>'.$donnees['memoire'].'</td></tr>
                                <tr><th>4G</th><td>'.$donnees['catg'].'</td></tr>
                                <tr><th>Date sortie</th><td>'.$donnees['date_sortie'].'</td></tr>


                                ';
                                ?>
                                <tbody>
                            </table>

                        </div>
                        <!-- /.panel-body -->
                    </form>
                    </div>
                    <!-- /.panel -->


                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
