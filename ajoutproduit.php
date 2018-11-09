<?php
include 'testadmin.php';?>
<?php
include 'classe/produit.php';
include 'classe/fiche_produit.php';
include 'classe/db_conf.php';
if(isset($_POST['ajoute'])){
   $cat=$_POST['txtcat'];
   $marq=$_POST['txtmarq'];
   $model=$_POST['txtmod'];
   $ref=$_POST['txtref'];
   $prix=$_POST['txtprix'];
   $cat=$_POST['txtcat'];
   $img1=$_POST['img1'];
   $img2=$_POST['img2'];
   $img3=$_POST['img3'];

   $color=$_POST['color'];
   $etat=$_POST['txtetat'];
   $description=$_POST['txtdes'];
   $qte=$_POST['qte'];
   $four=$_POST['four'];
  $design=$_POST['design'];
   $dimensions=$_POST['dimensions'];
   $poid=$_POST['poid'];
   $processeur=$_POST['processeur'];
   $syse=$_POST['syse'];
   $resolution=$_POST['resolution'];
   $apphoto=$_POST['apphoto'];
   $memoire=$_POST['memoire'];
   $catg=$_POST['catg'];
   $date_sortie=$_POST['date_sortie'];
   $date=date("Y-m-d")." ".date("H:i:s");
   $rep = $DB_con->query("SELECT * FROM fournisseur where nom='$four'");
   $donnees = $rep->fetch();
   $four_id=$donnees['fourn_id'];
   $data1=["categorie"=>$cat,"model"=>$model,"marque"=>$marq,"reference"=>$ref,"prix"=>$prix,"image"=>$img1,"image_face"=>$img2,"image_derrier"=>$img3,"couleur"=>$color,"etat"=>$etat,"description"=>$description,"quantité"=>$qte,"date_entrer"=>$date,"fourn_id"=>$four_id];
   $data2=["design"=>$design,"reference_produit"=>$ref,"dimensions"=>$dimensions,"poids"=>$poid,"processeur"=>$processeur,"system"=>$syse,"resolution"=>$resolution,"appareil_photo"=>$apphoto,"memoire"=>$memoire,"catalogue"=>$catg,"date_sortie"=>$date_sortie];
   $pro= new produit($data1);
   $fiche=new fiche_produit($data2);
  
   if($pro->create_produit()  && $fiche->create_fiche_produit())
    {
     header('Location: produit.php');
   }
   else {echo' <div class="alert alert-danger">


    <img src="images/close.png" class="fa-close" data-dismiss="alert" aria-hidden="true">
   <p> Erreur</p>
    </div>';}







}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>produit</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">ajoute produit</div>
      <div class="card-body">
        <form method="post">
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="col-sm-6 primary_block">
                           <h2>Générale</h2>
                          <div class="col-sm-10">
                              <label>Categorie :</label>
                              <select class="form-control" name="txtcat">
                                  <option>-----</option>
                                  <option value="mobile">Mobile</option>
                                  <option value="laptop">Pc</option>
                              </select>
                          </div>
                          <div class="col-sm-10">
                              <label>Marque :</label>
                              <input type="text" placeholder="Marque" class="form-control" name="txtmarq">
                          </div>
                          <div class="col-sm-10">
                              <label>Model :</label>
                              <input type="text"  placeholder="Model" class="form-control" name="txtmod">
                          </div>
                           <div class="col-sm-10">
                              <label>Référence :</label>
                              <input type="text" placeholder="Référance" class="form-control" name="txtref">
                          </div>
                          <div class="col-sm-10">
                              <label>Prix :</label>
                              <input type="numbre"  placeholder="Prix" class="form-control" name="txtprix">
                          </div>


                          <div class="col-sm-10">
                              <label>Images :</label>
                              <input type="file" name="img1">
                          </div>
                          <div class="col-sm-10">
                              <label>Images :</label>
                              <input type="file" name="img2">
                          </div>
                          <div class="col-sm-10">
                              <label>Images :</label>
                              <input type="file" name="img3">
                          </div>
                          <div class="col-sm-10">
                              <label>Etat:</label>

                              <input type="text"  class="form-control" placeholder="Etat" name="txtetat">
                          </div>
                          <div class="col-sm-10">
                              <label>Couleur :</label>

                              <input type="color"  class="form-control" name="color" >
                          </div>

                           <div class="col-sm-10">
                              <label>Description :</label>
                              <textarea class="form-control" style="height:150px" placeholder="Description" name="txtdes"></textarea>
                          </div>
                          <div class="col-sm-10">
                              <label>Quantite :</label>

                              <input type="number"  class="form-control" value="1" min="1" name="qte">
                          </div>
                          <div class="col-sm-10">
                              <label>Fournisseur :</label>
                              <input type="text" placeholder="fournisseur" class="form-control" name="four">
                          </div>
                        </div>
                        <hr>
                        <div class="col-sm-6 second_block">
                          <h2>Fiche technique </h2>
                          <div class="col-sm-12">
                                 <table  border="0">
                                        <tr>
                                          <td><label>Design:</label></td>
                                          <td><input type="text" name="design"></td>

                                        </tr>

                                        <tr>
                                          <td><label>Dimensions:</label></td>
                                          <td><input type="text" name="dimensions"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Poids:</label></td>
                                          <td><input type="text" name="poid"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Processeur:</label></td>
                                          <td><input type="text" name="processeur"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Système d'exploitation(OS):</label></td>
                                          <td><input type="text" name="syse"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Résolution (Écran):</label></td>
                                          <td><input type="text" name="resolution"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Appareil photo:</label></td>
                                          <td><input type="text" name="apphoto"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Mémoire interne:</label></td>
                                          <td><input type="text" name="memoire"></td>
                                        </tr>
                                        <tr>
                                          <td><label>4G:</label></td>
                                          <td><input type="text" name="catg"></td>
                                        </tr>
                                        <tr>
                                          <td><label>Date de sortie:</label></td>
                                          <td><input type="text" name="date_sortie"></td>
                                        </tr>



                               </table>

                          </div>


                        </div>
                         <button type="submit" class="btn btn-primary " name="ajoute">Ajouter</button>
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->


              </div>

          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
