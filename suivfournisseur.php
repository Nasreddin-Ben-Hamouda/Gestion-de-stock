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
                    <h1>Suivie Fournisseur</h1>
                    <p>home / Suivie Fournisseur</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php
            include 'classe/fournisseur.php';
            include 'classe/db_conf.php';
            $id=$_GET['id'];
            $data=["fourn_id"=>$id];
            $fourn=new fournisseur($data);
            $rep=$fourn->select_special_fournisseur();
            $donnees = $rep->fetch();


            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">
                              <div class="formclient">
                                <h1>Adresse fournisseur</h1>

                                <p><?php echo $donnees['nom']; ?></p>
                                <p><?php echo $donnees['prenom']; ?></p>
                                <p><?php echo $donnees['adresse']; ?></p>
                                <p><?php echo $donnees['ville']; ?></p>
                                <p><?php echo $donnees['num_tel']; ?></p>

                              </div>



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
