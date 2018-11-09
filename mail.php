<?php
include 'classe/mailbox.php';
include 'classe/db_conf.php';
require_once 'testadmin.php';
$data=[""];
$mail=new mailbox($data);
$req=$mail->update_mailbox();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>liste Mailbox</title>
  <link href="vendor/bootstrap.css" rel="stylesheet">
  <link href="css/metisMenu.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.css" rel="stylesheet">
  <link href="vendor/font-awesome/font-awesome.css" rel="stylesheet" type="text/css">

</head>
<style>
@font-face{
    font-family: "Poppins-Regular";
    src:url(Poppins-Regular.ttf) format("truetype");
  }




.table{
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    width: 100%;

}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 7px;
    border-top-width: 1px;
    border-top-style: solid;
    text-align: left;
    line-height: 40px;
    font-weight: 400;
    color: #555;
    font-size: 12px
}


tbody > tr > td > .ttob{
  font: 200 12px/18px Poppins-Regular,sans-serif;
  color: #222;
  font-style: normal;
  text-decoration: none;
  display: inline-block;
  margin: 0
}
 tbody > tr > td > .ex{
    display: inline-block;
    font: 200 12px/18px Poppins-Regular,sans-serif;
    color: #aaa
}

 tbody > tr > td > span.check{
    display: inline-block;
    padding-top: 8px;
    font: 200 12px/18px Poppins-Regular,sans-serif;

}

</style>
<body>
<?php include 'navbar.php';   ?>
<div class="container">
            <div class="row">
                <div class="col-lg-12 form-title">
                    <h1>Mailbox</h1>
                    <p>home / Mailbox</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="col-sm-12 primary_block">
                          <form method="POST">
                            <div class="mail-bar">
                                   <a href="" class="form-btn"><i class="fa fa-refresh"></i></a>
                                   <button class="form-btn" type="submit" name="delete-radio"><i class="fa fa-trash-o"></i></button>

                                     <div class="mail-left">

                                      <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search"><i class="fa fa-search"></i></button>

                                    </div>
                                 </div>

                            <table class="table table-hover text-center">
                                <tbody>

                                    <?php
                                     if((isset($_POST['delete-radio']) ) && (isset($_POST['radio_id']) )){
                                         $id= $_POST['radio_id'];
                                         $data=["nummail"=>$id];
                                          $mai=new mailbox($data);
                                          $req1=$mai->deletemailbox();

                                       }
                                     $data=[""];
                                     $mailbox=new mailbox($data);
                                     $reponse=$mailbox->readmailbox();

                                      while ($donnees = $reponse->fetch()) {
                                       $objet=$donnees['objet'];
                                       $ref=$donnees['refcom'];
                                       if($objet==""){
                                         $objet="(Aucun objet)";
                                       }
                                       if($ref!=""){
                                         $ref=$ref.",";
                                       }



                                        echo '

                                        <tr>
                                        <td><span class="check"><input type="radio" name="radio_id" value="'.$donnees['nummail'].'"></span></td>
                                        <td><i class="fa fa-star"></i></td>
                                        <td>'.$donnees['user_email'].'</td>';
                                        echo '<td>
                                             <h2 class="ttob">'.$objet.'</h1>
                                             <p class="ex">-'.$ref.$donnees['message'].'</p></td>

                                        </td>
                                        <td><i class="fa fa-paperclip"></i></td><td>'.$donnees['date_msg'].'</td>
                                         </tr>';
                                      }

                                      ?>
                                </tbody>
                            </table>

                            </form>
                          </div>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/metisMenu.js"></script>
  <script src="js/sb-admin-2.js"></script>

</body>
