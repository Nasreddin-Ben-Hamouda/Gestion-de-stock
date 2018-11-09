
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>liste Fournisseur </title>
    <link href="vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

    <?php

    include 'classe/fournisseur.php';
    include 'classe/db_conf.php';
   ?>

  </head>
<?php
 session_start();
include 'navbar.php';
?>
  <body>
<div class="container">
          <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>All Fournisseur</h1>

                </div>
                <!-- /.col-lg-12 -->
            </div>




                <div class="mail-bar">
                   <a href="fourn.php?x=1" class="form-btn"><i class="fa fa-refresh"></i></a>
                </div>
        <br>
        <?php

        if (isset($_GET['del_id'])) {
          $fourn_id=$_GET['del_id'];
          $data=["fourn_id"=>$fourn_id];
          $four=new fournisseur($data);
            $suppression = $four->deletefourn();
            if(!empty($suppression)){
                ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>  Suppression Effectuée avec succès ! </strong>
                </div>
                <?php
            }
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Téléphone</th>


                        </tr>
                    </thead>
                    <tbody>
                    <?php
                       $data=[""];
                        $fourn =new fournisseur($data);
                        $listfourn = $fourn->read_all_fournisseur();
                        if ($listfourn->rowCount()>0)
                        {
                            while ($ligne = $listfourn->fetch(PDO::FETCH_ASSOC))
                            {
                                extract($ligne);
                                echo "<tr>";
                                echo "<td>".$ligne['nom']."</td>";
                                echo "<td>".$ligne['prenom']."</td>";
                                echo "<td>".$ligne['adresse']."</td>";
                                echo "<td>".$ligne['ville']."</td>";
                                echo "<td>".$ligne['num_tel']."</td>";
                                echo "<td><a href=\"?del_id=".$ligne['fourn_id']."\" onclick=\"return confirm('Etes vous sûre de vouloir supprimer ce fournisseur ?')\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Supprimer\"><i class=\" 	fa fa-trash-o\" aria-hidden=\"true\"></i></a></td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
