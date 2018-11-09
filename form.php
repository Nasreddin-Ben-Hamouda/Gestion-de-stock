<?php
require_once 'testadmin.php';
include 'classe/formweb.php';
include 'classe/db_conf.php';
$data=[""];
$form=new formweb($data);
$res=$form->selectformweb();
$rows = $res->fetch();


if(isset($_POST['ajoute'])){

     $imgtop=$_POST['imgtop'];
     $imgleft=$_POST['imgleft'];
     $imgright=$_POST['imgright'];
     $imgcarousel1=$_POST['imgcarousel1'];
     $imgcarousel2=$_POST['imgcarousel2'];
     $imgbcar=$_POST['imgbcar'];
     $imgbot1=$_POST['imgbot1'];
     $imgbot2=$_POST['imgbot2'];
     $imgbot3=$_POST['imgbot3'];
     if($imgtop==""){
     $imgtop=$rows['imgtop'];
     }
     if($imgleft==""){
     $imgleft=$rows['imgleft'];
     }
     if($imgright==""){
     $imgright=$rows['imgright'];
     }
     if($imgcarousel1==""){
     $imgcarousel1=$rows['imgcarousel1'];
     }
     if($imgcarousel2==""){
     $imgcarousel2=$rows['imgcarousel2'];
     }
     if($imgbcar==""){
     $imgbcar=$rows['imgbcar'];
     }
     if($imgbot1==""){
     $imgbot1=$rows['imgbot1'];
     }
     if($imgbot2==""){
     $imgbot2=$rows['imgbot2'];
     }
     if($imgbot3==""){
     $imgbot3=$rows['imgbot3'];
     }

     $data=["image_top"=>$imgtop,"image_left"=>$imgleft,"image_right"=>$imgright,"image_carousel1"=>$imgcarousel1,"image_carousel2"=>$imgcarousel2 ,"image_bcar"=>$imgbcar,"image_bot1"=>$imgbot1,"image_bot2"=>$imgbot2,"image_bot3"=>$imgbot3];
     $formweb=new formweb($data);
     $req=$formweb->update_formweb();
     header('Location: form.php');

   }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit form </title>

    <!-- Bootstrap Core CSS -->

     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
      <link href="css/metisMenu.min.css" rel="stylesheet">
      <link href="css/sb-admin-2.css" rel="stylesheet">
      <link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">

</head>

<style type="text/css">
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }

.panel-body .primary_block{
    border-right: 1px solid #ccc
}
.panel-body label{
  margin-bottom: 0;
  color: #555;
  letter-spacing:0.3px;
  font:200 12px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;

}


.secblock .formimg{
    padding: 5px;
    border: 1px solid #00acac;
    margin: 10px 7px
}
.secblock .formimg input[type="file"]{
    font-size: 4.5px;
    padding:15px 0 5px
}
.secblock .col-sm-6{
    width: 47%
}
.secblock .col-sm-4{
    width: 29.5%
}
.secblock .formimg img{
    width: 100%
}


</style>

<body>


      <?php

         include 'navbar.php';
       ?>

<div class="container">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Form</h1>
                    <p>home / Form</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>



            <form method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-sm-12 secblock">

                            <div class="col-sm-12 formimg">
                                <img <?php echo 'src="images/'.$rows['imgtop'].'"';?>>
                                <input type="file" name="imgtop">

                            </div>
                            <div class="col-sm-3 formimg">
                                <img <?php echo 'src="images/'.$rows['imgleft'].'"';?>>
                                <input type="file" name="imgleft">
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12 formimg">
                                <img <?php echo 'src="images/'.$rows['imgcarousel1'].'"';?>>
                                <input type="file" name="imgcarousel1">
                                </div>
                                <div class="col-sm-12 formimg">
                                <img <?php echo 'src="images/'.$rows['imgcarousel2'].'"';?>>
                                <input type="file" name="imgcarousel2">
                                </div>
                                <div class="col-sm-12 formimg">
                                <img <?php echo 'src="images/'.$rows['imgbcar'].'"';?>>
                                <input type="file" name="imgbcar">
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-4 formimg">
                                    <img <?php echo 'src="images/'.$rows['imgbot1'].'"';?>>
                                    <input type="file" name="imgbot1">
                                    </div>
                                    <div class="col-sm-4 formimg">
                                    <img <?php echo 'src="images/'.$rows['imgbot2'].'"';?>>
                                    <input type="file" name="imgbot2">
                                    </div>
                                    <div class="col-sm-4 formimg">
                                    <img <?php echo 'src="images/'.$rows['imgbot3'].'"';?>>
                                    <input type="file" name="imgbot3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 formimg">
                                <img <?php echo 'src="images/'.$rows['imgright'].'"';?>>
                                <input type="file" name="imgright">
                            </div>
                          </div>

                           <button type="submit" class="btn-env" name="ajoute">Modifie</button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>

            </div>
          </form>
            <!-- /.row -->
      </div>
        <!-- /#page-wrapper -->


    <!-- /#wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
