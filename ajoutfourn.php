
<?php
include 'testadmin.php';
?>
<?php
include 'classe/fournisseur.php';
include 'classe/db_conf.php';
if(isset($_POST['ajoutad'])){
   $nom=$_POST['lastname'];
   $prenom=$_POST['firstname'];
   $adr=$_POST['adr'];
   $ville=$_POST['ville'];
   $num=$_POST['num'];
   $data=["nom"=>$nom,"prenom"=>$prenom,"adresse"=>$adr,"ville"=>$ville,"num_tel"=>$num];
   $fourn= new fournisseur($data);
   if($fourn->createfourn()){
     header('location:fourn.php');
   }
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
  <title>ajouter un admin ou user</title>
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
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post">
                          <div class="col-sm-6 primary_block">
                             <h2>Générale</h2>
                            <div class="col-sm-10">
                                <label>Nom : *</label>
                                 <input type="text" name="lastname" class="form-control" placeholder="Nom" >

                            </div>
                            <div class="col-sm-10">
                                <label>Prenom : *</label>
                                 <input type="text" name="firstname" class="form-control" placeholder="Prenom">
                            </div>


                            <div class="col-sm-10">
                                <label>Adresse:</label>
                                 <input type="text" name="adr" class="form-control" placeholder="Adresse">
                            </div>
                            <div class="col-sm-10">
                                <label>Ville:</label>
                                 <input type="text" name="ville" class="form-control" placeholder="Ville">
                            </div>

                            <div class="col-sm-10">
                                <label>numero de telephone:</label>
                                 <input type="text" name="num" class="form-control" placeholder="votre numero">
                            </div><br>


                            <button type="submit" class="btn btn-primary " name="ajoutad">Ajouter</button>
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
