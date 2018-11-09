
<?php
include 'testadmin.php';
?>
<?php
include 'classe/user.php';
include 'classe/db_conf.php';
if(isset($_POST['ajoutad'])){
   $nom=$_POST['lastname'];
   $prenom=$_POST['firstname'];
   $email=$_POST['email'];
   $pwd=$_POST['pwd'];
   $date=$_POST['datee'];
   $img1=$_POST['img1'];
   $sexe=$_POST['sexe'];
   $pers=$_POST['pers'];
   $soc=$_POST['soc'];
   $adr=$_POST['adr'];
   $ville=$_POST['ville'];
   $etat=$_POST['etat'];
   $code=$_POST['cp'];
   $pays=$_POST['pays'];
   $num=$_POST['num'];

  $data=["nom"=>$nom,"prenom"=>$prenom,"email"=>$email,"pwd"=>$pwd,"date"=>$date,"img"=>$img1,"sexe"=>$sexe,"personnalité"=>$pers,"société"=>$soc,"adresse"=>$adr,"ville"=>$ville,"etat"=>$etat,"code"=>$code,
  "pays"=>$pays,"num"=>$num];
  $user=new user($data);
   if($user->createuser()){
     header('location:admin.php');
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
                            <div class="col-sm-19">
                                <label>Last name : *</label>
                                 <input type="text" name="lastname" class="form-control" placeholder="Last name" >

                            </div>
                            <div class="col-sm-19">
                                <label>First name : *</label>
                                 <input type="text" name="firstname" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-sm-19">
                                <label>Email : *</label>
                                <input type="email" name="email" class="form-control" placeholder="Email"
                              >
                            </div>

                            <div class="col-sm-19">
                                <label>Password : *</label>
                                <input type="password" name="pwd" class="form-control" placeholder="Password">
                            </div>
                            <div class="col-sm-19">
                                <label>Birthday :* </label>
                                <input type="date" class="form-control" name="datee">
                            </div>
                                <div class="col-sm-19">
                                      <label>Images :</label>
                                      <input type="file" name="img1">
                                  </div>

                             <div class="col-sm-19">
                                <label>Sexe: </label><br/>
                                 <select name="sexe" class="form-control">
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                 </select>
                            </div>
                            <div class="col-sm-19">
                                <label>Personnalite: *</label>
                                 <input type="text" name="pers" class="form-control" placeholder="Personnalite">
                            </div>
                            <div class="col-sm-19">
                                <label>Societé</label>
                                 <input type="text" name="soc" class="form-control" placeholder="Societé">
                            </div>
                            <div class="col-sm-19">
                                <label>Adresse:</label>
                                 <input type="text" name="adr" class="form-control" placeholder="Adresse">
                            </div>
                            <div class="col-sm-19">
                                <label>Ville:</label>
                                 <input type="text" name="ville" class="form-control" placeholder="Ville">
                            </div>
                            <div class="col-sm-19">
                                <label>Etat:</label>
                                 <input type="text" name="etat" class="form-control" placeholder="Etat">
                            </div>
                            <div class="col-sm-19">
                                <label>Code postal:</label>
                                 <input type="text" name="cp" class="form-control" placeholder="code postal">
                            </div>
                            <div class="col-sm-19">
                                <label>Pays:</label>
                                 <input type="text" name="pays" class="form-control" placeholder="Pays">
                            </div>
                            <div class="col-sm-19">
                                <label>numero de telephone: *</label>
                                 <input type="text" name="num" class="form-control" placeholder="votre numero">
                            </div>

                         <br><div class="col-sm-19">
                            <button type="submit" class="btn btn-primary form-control " name="ajoutad" >Ajouter</button>
                          </div>


                         </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
        </div>
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
