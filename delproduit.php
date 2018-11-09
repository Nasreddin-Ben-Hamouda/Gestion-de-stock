<?php
include 'testadmin.php';
include 'classe/produit.php';
include 'classe/fiche_produit.php';
include 'classe/db_conf.php';



         $id=$_GET['id'];
         $data=["id"=>$id];
         $prod=new produit($data);
         $reponse=$prod->select_produit();
         $donnees = $reponse->fetch();
  ?>

<?php
         if(isset($_POST['delprod'])){

              $id=$_GET['id'];
              $ref=$donnees['referance'];
              $data1=["id"=>$id];
              $data2=["reference_produit"=>$ref];

            $delprod=new produit($data1);
            $delfiche=new fiche_produit($data2);
            if($delfiche->delete_fiche_produit() && $delprod->delete_produit())
            {header('location:produit.php');}
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
  <style type="text/css">
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }

.panel-body label{
  margin-bottom: 0;
  color: #555;
  letter-spacing:0.3px;
  font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}
.panel-body .primary_block .form-control{
    margin-bottom: 10px;
    height: 36px;
    font-size: 13px;
    color: #aaa;
   }
.panel-body .primary_block .form-control:focus{
 outline: none;
}

.panel-body .primary_block input[type="file"]{
    margin: 5px 0
}
.panel-body h2{

    font:200 16px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;
    text-decoration: underline;
    margin-bottom: 25px;




}
.panel-body .second_block label{

    padding: 9px;
    padding-left: 0;
}
.panel-body .second_block input{
   border: 0px;
   border-bottom: 1px solid #ddd;
   width: 250px;
   font-size: 13px;
   color: #aaa;
   padding-left: 5px
}
.panel-body .second_block input:focus{
   outline: none;
   border-bottom: 2px solid #00acac;
   transition:.7s;
}
.panel-body .btn-env{
    background:#00acac;
    border:none;
    border-radius: 4px;
    color: #fff;
    width: 100px;
    height: 35px;
    border: 1px solid #29a;
    margin:32px 0;
}
.panel-body .second_block .btn-delete{
    border: 0px;
    background-color: transparent;
}
.panel-body .second_block .fa-trash-o{
    font-size: 20px
}
.panel-body .btn-env:hover{
    box-shadow: 0 0 2px rgba(0,0,0,0.5);
    }

 .primary_block .input-search .form-control{
  display: inline-block;
  width: 190px;
  padding: 0;
  margin: 0;
  height: 42px;
  border-radius: 0px;
  border: 0px;
  padding-left:7px;
  box-shadow:3px 0px 12px -5px #999
 }
 .tee-bloc{

    border: 2px solid #ddd;
    margin-top: 40%;
    padding: 10px;
    height: 260px;

 }
 .tee-bloc label{
    margin: 10px;
    color: #777;
    width: 110px;
    font-size: 16px;

 }
 .tee-bloc input{
    margin: 5px;
    padding: 5px;
    border:0px;
    border-bottom: 2px solid #ddd;
    outline: none;
 }
 .tee-bloc input:focus{
    margin: 5px;
    padding: 5px;
    border:0px;
    border-bottom: 2px solid #00acac;
    transition:2s;
    outline: none;
 }
 .img-sold img{
    width: 120px;
    margin-bottom: 20px
 }


</style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">supprimer produits <span><?php echo $donnees['marque']; ?></span></div>
      <div class="card-body">
        <form method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">

                          <div class="col-sm-7 second_block">
                            <h2>Générale </h2>

                                   <table  border="0">
                                          <tr>
                                            <td><label>Categorie:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['categorie'].'"'; ?>></td>

                                          </tr>

                                          <tr>
                                            <td><label>Marque:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['marque'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Model:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['model'].'"'; ?>></td>
                                          </tr>
                                          <tr>
                                            <td><label>Référance:</label></td>
                                            <td><input type="text" disabled <?php echo 'value="'.$donnees['referance'].'"'; ?>></td>
                                          </tr>



                                 </table>


                            <button type="submit" class="btn btn-primary" name="delprod">supprimer</button>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>

            </div>
            <!-- /.row -->
         </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
