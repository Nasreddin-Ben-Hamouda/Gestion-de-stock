<?php
require_once 'testadmin.php';

 $DB_con->exec("UPDATE commande set vu='oui'");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>liste Commandes</title>

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





.mail-bar .mail-left input{
  background: #fff;
  border: 1px solid #ccc;
   padding: 01px 10px;
  width: 200px;
  border-right: 0px;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
  height: 35px

}
.mail-bar .mail-left input:hover ,.mail-bar .mail-left input:focus{

  border-bottom: 1px solid #ccc;


}
.table > thead > tr {
 border-top: 2px solid #00acac;
 background: #00acac;
 font-size: 13px;
 font-weight: 200
}
.table > thead > tr > th{
 border: 1px solid #00acac;
 color: #fff;

}
.table > tbody > tr > td{
    line-height: 55px;
    padding:8px;
    font-size: 11px

}
.table > tbody > tr > td > span{
    width:15px;
    height:15px;
    border-radius:4px;
    display:block;
     margin-top: 19px;
}
#page-wrapper{margin-left: 10px;  width:1080px;}



</style>

<script>

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return  $('#tab1').css("display",""),$('#mail-bar').css("display","")
        ;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;

                if(this.responseText!=""){
                    $('#tab1').css("display","none");
                     $('#mail-bar').css("display","none");

                }


            }
        };
        xmlhttp.open("GET", "rescommentair.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<body>

    <div id="wrapper">

        <?php

          include 'navbar.php';
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>All Commandes</h1>
                    <p>home / All Commandes</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <form method="post">
                          <div class="col-sm-12 second_block">
                                <div class="mail-bar">
                                   <a href="commande.php" class="form-btn"><i class="fa fa-refresh"></i></a>
                                     <div class="mail-left">

                                      <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search">
                                      <i class="fa fa-search"></i></button>

                                    </div>
                                 </div>
                              <table class="table table-bordered table-striped">
                                 <thead>
                                    <tr>

                                      <th>N° Commande</th>
                                      <th>Produit</th>
                                      <th>Description</th>
                                      <th>Quantite</th>
                                      <th>Lien Commande</th>
                                      <th>Date</th>
                                      <th>Paiement</th>
                                      <th>Prix unitaire</th>
                                    </tr>
                                </thead>
                                <tbody id="tab1">
                                    <?php
                                    include 'classe/commande.php';
                                    include 'classe/db_conf.php';
                                    $data=[""];
                                    $com=new commande($data);
                                      $rep =$com->readAllcommande();
                                     while ($donnees = $rep->fetch() ){
                                       echo '
                                           <tr>

                                                <td>'.$donnees['numcom'].'</td>
                                                <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                                                <td>'.$donnees['marque'].',Color:'.$donnees['color'].'</td>
                                                <td>'.$donnees['qtee'].'</td>
                                                <td><a href="suivcommande.php?id='.$donnees['numcom'].'">Affiche</a></td>
                                                <td>'.$donnees['date_com'].'</td>
                                                <td>'.$donnees['paiment'].'</td>
                                                <td>'.$donnees['prix'].'</td>


                                          </tr>';
                                        }
                                    ?>

                                </tbody>
                                <tbody id="txtHint">
                              </tbody>
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
