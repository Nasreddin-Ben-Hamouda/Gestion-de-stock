
<?php
session_start();
  /*if($_SESSION['login']!=""){
    header('location:index.php');
  }*/
try {
 $bdd = new PDO('mysql:host=localhost;dbname=hanout;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="vendor/font-awesom/css/font-awesome.css" rel="stylesheet" type="text/css">
<script>

function showUser(str) {

  var xhttp;
   $('.txtHin').attr('id',str);
  if (str == "") {
    document.getElementById(str).innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(str).innerHTML = this.responseText;
      $('#txtHin').attr('id',str);
    }
  };
  xhttp.open("GET", "xx.php?q="+str, true);
  xhttp.send();

}
</script>
<script>
$(document).ready(function(){
  $('#selfa').change(function(){
    var select = $(this).val();
    document.getElementById("inpfa").value = select;
   });

});

</script>
<script>
$(document).ready(function(){
  $('#txtnouvel').change(function(){
    var select = $(this).val();
    document.getElementById("inpmod").value = select;
   });

});

</script>
<script>



   function showUser2(str,x) {

  var xhttp;

  if (str == "") {
    document.getElementById("txtHin2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHin2").innerHTML = this.responseText;
    }
  };


  xhttp.open("GET", "xa.php?q="+x+"&y="+str, true);
  xhttp.send();
}



</script>
<script>



   function showSortie(str) {
   $('.txtSortie').attr('id',str);
  var xhttp;
  if (str == "") {
    document.getElementById(str).innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById(str).innerHTML = this.responseText;
      $('#txtSortie').attr('id',str);
    }
  };


  xhttp.open("GET", "xx.php?q="+str, true);
  xhttp.send();
}



</script>
<script>



   function showSortie2(str,x) {

  var xhttp;
  if (str == "") {
    document.getElementById("txtSortie2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtSortie2").innerHTML = this.responseText;
    }
  };


  xhttp.open("GET", "xa.php?q="+x+"&y="+str, true);
  xhttp.send();
}



</script>

<script>



   function shownouvel(str) {

  var xhttp;
  if (str == "") {
    document.getElementById("txtSortie2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtnouvel").innerHTML = this.responseText;
    }
  };


  xhttp.open("GET", "xaa.php?q="+str, true);
  xhttp.send();
}



</script>



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
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<script type="text/javascript">

  $(document).ready(function(){
    <?php $i=$_GET['id']; $i--;?>
    $('.nbr-page li').removeClass("active");
    $('.nbr-page li:eq(<?php echo $i ?>)').addClass("active");

   });
</script>
  <script>
$(document).ready(function(){
    $("#ajouter").click(function(){
        $("#ajout").show();
    });
    $("#close").click(function(){
        $("#ajout").hide();
    });
    $("#closee").click(function(){
        $("#ajout").hide();
    });
    $("#ajouter").click(function(){
        $("#sorti").hide();
    });
    $("#ajouter").click(function(){
        $("#nouvelle").hide();
    });
     $("#entresortie").click(function(){
        $("#ajout").show();
    });

    $("#entresortie").click(function(){
        $("#sorti").hide();
    });
     $("#entrenouvel").click(function(){
        $("#ajout").show();
    });
      $("#entrenouvel").click(function(){
        $("#nouvelle").hide();
    });


});

$(document).ready(function(){
    $("#sortie").click(function(){
        $("#sorti").show();
    });
    $("#closes").click(function(){
        $("#sorti").hide();
    });
    $("#closs").click(function(){
        $("#sorti").hide();
    });
    $("#sortie").click(function(){
        $("#ajout").hide();
    });
    $("#sortie").click(function(){
        $("#nouvelle").hide();
    });

    $("#nouvel").click(function(){
        $("#nouvelle").show();
    });

    $("#sortentre").click(function(){
        $("#sorti").show();
    });
     $("#sortentre").click(function(){
        $("#ajout").hide();
    });
     $("#sortienouvel").click(function(){
        $("#sorti").show();
    });
      $("#sortienouvel").click(function(){
        $("#nouvelle").hide();
    });



});
$(document).ready(function(){
    $("#nouvel").click(function(){
        $("#nouvelle").show();
    });
    $("#clos").click(function(){
        $("#nouvelle").hide();
    });
    $("#clo").click(function(){
        $("#nouvelle").hide();
    });
     $("#nouvel").click(function(){
        $("#ajout").hide();
    });

    $("#nouvel").click(function(){
        $("#sorti").hide();
    });
    $("#nouvelentre").click(function(){
        $("#nouvelle").show();
    });


    $("#nouvelentre").click(function(){
        $("#ajout").hide();
    });
    $("#nouvelsortie").click(function(){
        $("#nouvelle").show();
    });
    $("#nouvelsortie").click(function(){
        $("#sorti").hide();
    });
  });
</script>

<style type="text/css">
body{
background: #eee
}
.tab-content{
  margin-top: 80px;
  background: #fff;
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 12px 7px
}
.container{
  width:1340px
   }
.btn-page{
  margin-top: 50px
}

.btn-page > a{
  display: block;
  width: 180px;
  padding: 15px 0;
  text-align: center;
  margin: 10px 0;
  background: #ed1b24;
  border-radius: 4px;
  border: 1px solid #ccc;
  color: #fff;
  cursor: pointer;
  font-size: 17px;
  box-shadow: -10px 5px 10px 0px #999
}
.btn-page > a:hover{
  text-decoration: none;
  box-shadow:  0 0 5px #666
}
.table {
  margin: 10px 0
}
.table > thead > tr {
 border-top: 2px solid #ed1b24;
 background: #ed1b24
}
.table > thead > tr > th{
 border: 2px solid #ed1b24;
 color: #fff
}


.primary_block .mail-bar{
    margin-left: 45px;
    height: 50px;
    width: 90%



}

.mail-bar .form-btn{
    padding: 7px 10px;
    width: 35px;
    text-align: center;
    display: inline-block;
    border: 1px solid #ddd;
    border-radius: 3px;
    color: #555a60;
    background-color: transparent;
}
.mail-bar .mail-left{
    float: right;


}
.txt-bottom{
  display: inline-block;
    color: #555a60;
    width: 200px;
    float: left;
}
.mail-bar .mail-left .serach{
  background: #fff;
  border: 1px solid #ccc;
  padding: 7px 10px;
  width: 35px;
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.mail-bar .mail-left input{
  background: #fff;
  border: 1px solid #ccc;
  padding: 7px 10px;
  width: 200px;
  border-right: 0px;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;

}




.nav-tabs{
  background:  #ed1b24;
  width: 100%;
  position: fixed;

  padding-left: 43px;
  box-shadow: 0 0 15px #fff;
  z-index: 1
}

.nav-tabs > li > a {
  border-radius: 0px;
  margin: 0;
  padding: 12px 20px;
  color: #fff;
  font-size: 17px
}
.nav-tabs > img{
  width: 180px;
  float: right;

  padding: 0;
  margin:-11px 25px -12px

}
.nav-tabs > li > a:hover {
  background: transparent;
  opacity: 0.5px;
  border: 1px solid transparent

}

.form-bloc{
  height: auto;
  border-radius:5px;
  border: 1px solid #777;
  background-image: url(blur.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: fixed;
  top: 25%;
  left: 30%;
  box-shadow: 0 5px 11px 2px #777;
  padding: 37px 8px 8px;

}
.form-bloc p{
  font-size: 15px;
  color: #222;
  text-shadow:0 0 5px #fff;
  padding-left: 3px;
  margin-top: -30px;
  margin-bottom: 9px
}
.form-bloc span{
  position: absolute;
  right: 7px;

  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  top: 0px;
  color: #fff;
  font-size: 13px;
  padding:0px 19px;
  border: 1px solid #a43f3a;
  border-top: 0px;
  overflow: hidden;
  background-color: #fa2f18;
  background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%,
   rgba(0, 0, 0, 0.04));


}
.form-bloc span:hover{
  box-shadow: 0 0 10px 2px #d9534f

}
.form-bloc span .fa{
  text-shadow:0 0 2px  #000;
  font-weight: 100
}
.form-bloc .sou-bloc{
  height: 100%;
  background: #eee;
  border-radius: 2px;
  border: 1px solid #777;
  padding: 10px;
  padding-bottom: 50px

}
.form-bloc .sou-bloc label{
  font-size: 13px;
  font-weight: 400;
  padding: 10px 20px 0 0
}
.form-bloc .sou-bloc input,.form-bloc .sou-bloc select{
  width: 270px;
  padding: 4px ;
  height: 31px;
  margin: 8px 8px 5px;
  border-radius: 2px;
  border: 1px solid #aaa

}
  .form-bloc .sou-bloc button{
    margin-left: 20px;
    margin-top: 5px
  }
.form-bloc .sou-bloc  a {
  color: #222;
  text-decoration: none;
  width: 102px;
  height: 32px;
  line-height: 30px;
  display: inline-block;
  cursor: default;
  margin-top: 5px;
  margin-left: 20px;
  background-color: #eee;
  text-align: center;
  border-radius: 2px;
  border: 1px solid #999;
  background-image: linear-gradient(to bottom, #f9f9f9, #e1e1e1);

}
.form-bloc .sou-bloc  a:hover{
  border:1px solid #777
}
.btn-ok{
  width: 102px;
  height: 32px;

}
#ajout{
  display:none;
}
#sorti{
  display: none;
}
#nouvelle{
  display: none;
  margin-left: -70px
}
#nouvelle select{
  width: 155px
}
#nouvelle input{
  width: 215px
}
.new-jour{
  text-align: center;
  margin: 5px
}
.txtdes{
  margin: 8px;
  width: 215px;
  margin-bottom: 0
}
.nbr-page li{
  list-style: none;
  float: left;
}
.nbr-page li .nbr{
  margin: -5px 2px;
  padding: 6px;
  border:1px solid #ed1b24;
  color: #ed1b24
}
.nbr-page li.active a {
  background: #ed1b24;
  color: #fff
}
#mail-bar{
  margin-top: 30px
}

</style>
</head>
<body>

  <ul class="nav nav-tabs">
     <li  class="active"><a href="stock.php?id=1">Stock</a></li>
    <li><a href="vendre.php?id=1">Vendre</a></li>
    <li ><a href="entre.php?id=1">Entre</a></li>
     <img src="Untitled.png">

  </ul>
  <?php

  ?>

  <div class="container">

   <?php
    if(isset($_POST['entre'])){
     $selecf= $_POST['select-famille'];
     $selecm= $_POST['select-model'];
     $selecr= $_POST['select-referance'];
     $qte= $_POST['qte'];
     $date_entre=date("Y-m-d")." ".date("H:i:s");
      $reponse = $bdd->query("SELECT id from produit where famille='$selecf' and model='$selecm' and referance='$selecr'");
     $donnees = $reponse->fetch();

     $id=$donnees['id'];



     $bdd->exec("UPDATE produit SET Quantite=Quantite + '$qte' where id='$id'");
     $bdd->exec("INSERT INTO entre(id,famille,model,referance,Quantite,date_entre)
      values('$id','$selecf','$selecm','$selecr','$qte','$date_entre')");


    }
   ?>
   <?php
    if(isset($_POST['sortie'])){
     $selecf= $_POST['select-famille'];
     $selecm= $_POST['select-model'];
     $selecr= $_POST['select-referance'];
     $qte= $_POST['qte'];
     $remis=  $_POST['remis'];
     $reponse = $bdd->query("SELECT prix,id from produit where famille='$selecf' and model='$selecm' and referance='$selecr'");
     $donnees = $reponse->fetch();
     $prix= $donnees['prix']*$qte -$remis;
     $id=$donnees['id'];


     $bdd->exec("UPDATE produit SET Quantite=Quantite - '$qte' where famille='$selecf' and model='$selecm' and referance='$selecr'");
     $date_sortie=date("Y-m-d")." ".date("H:i:s");
     $bdd->exec("INSERT INTO vendu(id,famille,model,referance,Quantite,remis,Prix,date_sortie)
      values('$id','$selecf','$selecm','$selecr','$qte','$remis','$prix','$date_sortie')");




    }
   ?>
   <?php
    if(isset($_POST['btn-nouvel'])){
     $namef= $_POST['txtfamille'];
     $namem= $_POST['txtmodel'];
     $namer= $_POST['txtreferance'];
     $namedes=$_POST['txtdes'];
     $qte= $_POST['qte'];
     $prix= $_POST['prix'];
     $bdd->exec("INSERT INTO produit(famille,model,referance,designation,Quantite,Prix)
      values('$namef','$namem','$namer','$namedes','$qte','$prix')");
     $reponse = $bdd->query("SELECT id from produit where famille='$namef' and model='$namem' and referance='$namer'");
     $donnees = $reponse->fetch();
     $id=$donnees['id'] ;
     $date_entre=date("Y-m-d")." ".date("H:i:s");
      $bdd->exec("INSERT INTO entre(id,famille,model,referance,Quantite,date_entre)
      values('$id','$namef','$namem','$namer','$qte','$date_entre')");
    }
   ?>

   <?php if((isset($_POST['delete-radio']) ) && (isset($_POST['radio_id']) )){
     $id= $_POST['radio_id'];
     $bdd->exec("DELETE FROM produit WHERE id=$id");

   }
   ?>
  <div class="tab-content">

     <div class="row">
      <div class="col-sm-12">

       <div class="col-sm-10">
        <form method="post">
         <div class="mail-bar">
           <a href="stock.php?id=<?php echo $_GET['id']; ?>" class="form-btn"><i class="fa fa-refresh"></i></a>
           <button class="form-btn" type="submit" name="delete-radio"><i class="fa fa-trash-o"></i></button>
             <div class="mail-left">

              <input type="text" name="txt-search"  onkeyup="showHint(this.value)"><button type="submit" class="serach" name="btn-search"><i class="fa fa-search"></i></button>

            </div>
         </div>

        <table class="table table-bordered table-striped" style="box-shadow:0 0 5px #eee">
          <thead>
            <tr>
              <th></th>
              <th>id</th>
              <th>Famille</th>
              <th>Model</th>
              <th>Référance</th>
              <th>Designation</th>
              <th>Quantite</th>
              <th>Prix</th>

            </tr>
          </thead>
          <tbody id="tab1">

               <?php
               $id= $_GET['id'];

               $reponse = $bdd->query("SELECT * from produit ");
               $nb= $reponse->rowCount();
               $nb3= $reponse->rowCount();
               $d=10;
               $nb2=$nb % $d;


                if($nb2<$nb){
                  $nb=$nb+10;
                  $nb;
                }
                $nb1=$nb / $d;



                  $c=0;


                for ($i=2; $i < $nb1 ; $i++) {
                     if ($id==$i) {

                      $c=$i*$d-$d;
                       $reponse = $bdd->query("SELECT * from produit LIMIT $d OFFSET $c");
                     }
               }

                  $reponse = $bdd->query("SELECT * from produit LIMIT $d OFFSET $c");









               while ($donnees = $reponse->fetch() ){
                echo '
                       <tr>
                       <td><input type="radio" name="radio_id" value="'.$donnees['id'].'" class="id_radio"></td>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['famille'].'</td>
                        <td>'.$donnees['model'].'</td>
                        <td>'.$donnees['referance'].'</td>
                        <td>'.$donnees['designation'].'</td>
                        <td>'.$donnees['Quantite'].'</td>
                        <td>'.$donnees['Prix'].'</td>
                      </tr>';
                    }

               ?>





          </tbody>
          <tbody id="txtHint">
          </tbody>
        </table>


        <div class="mail-bar" id="mail-bar">

          <?php


              $d1=$d*$id;
              if($d1>$nb3){
                $d1=$nb3;
              }
           echo '<p class="txt-bottom">Résultats '.$c.' - '.$d1.' sur '.$nb3.' entries <p>'; ?>
             <div class="mail-left" >
              <ul class="nbr-page" >
                <li class="active"><a href="stock.php?id=1" class="form-btn nbr" >1</a></li>
                 <?php

                     for ($i=2; $i < $nb1 ; $i++) {
                      echo'<li><a href="stock.php?id='.$i.'" class="form-btn nbr c2">'.$i.'</a></li>';


                     }

                  ?>
             </ul>
            </div>
       </div>
      </div>
        </form>
      <div class="col-sm-2 btn-page">
        <a id="ajouter">Entrée</a>
        <a id="sortie">Sortie</a>
        <a id="nouvel">Nouvelle</a>
        <a href="dex1.php">Quitter</a>

      </div>
    </div>
    </div>






  </div>
</div>

<div class="col-sm-5 form-bloc" id="ajout">
  <p>Entrée</p>
  <span id="close"><i class="fa fa-times" ></i></span>
  <div class="col-sm-12 sou-bloc">
   <form method="post">
    <table>
      <tr>
        <td><label>Famille :</label></td>
        <td>
          <select class="sel-choix" name="select-famille" onchange="showUser(this.value)">
            <option value="">--</option>
             <?php
               $reponse = $bdd->query("SELECT Distinct(famille) from produit");

               while ($donnees = $reponse->fetch() ){
                echo '<option value="'.$donnees['famille'].'">'.$donnees['famille'].'</option>';
                    }
               ?>
           </select>

        </td>
         <td><a id="nouvelentre">Nouvelle</a></td>
      </tr>
      <tr>
        <td><label>Model :</label></td>
        <td>



          <select  class="txtHin" name="select-model" onchange="showUser2(this.value,this.id)">
            <option value="">--</option>


           </select>

        </td>
        <td><a id="sortentre">Sortie</a></td>
     </tr>
     <tr>
        <td><label>Réferance :</label></td>
        <td>
          <select name="select-referance" id="txtHin2">
            <option value="">--</option>

           </select>
        </td>
        <td><a  id="closee">Fermer</a></td>

     </tr>
     <tr>
        <td><label>Quantite :</label></td>
        <td><input type="number" value="1" min="1" name="qte"></td>
     </tr>
     <tr>
      <td></td>
      <td></td>
      <td><button class="btn-ok" type="submit" name="entre">Ok</button></td>
     </tr>

    </table>
   </form>
  </div>

</div>
<div class="col-sm-5 form-bloc" id="sorti">
  <p>Sortie</p>
  <span id="closes"><i class="fa fa-times" ></i></span>
  <div class="col-sm-12 sou-bloc">
    <form method="post">
    <table>
      <tr>
        <td><label>Famille :</label></td>
        <td>
         <select class="sel-choix" name="select-famille" onchange="showSortie(this.value)">
            <option value="">--</option>
             <?php
               $reponse = $bdd->query("SELECT Distinct(famille) from produit");

               while ($donnees = $reponse->fetch() ){
                echo '<option value="'.$donnees['famille'].'">'.$donnees['famille'].'</option>';
                    }
               ?>
           </select>
        </td>
         <td><a id="nouvelsortie">Nouvelle</a></td>
      </tr>
      <tr>
        <td><label>Model :</label></td>
        <td>
          <select class="txtSortie" name="select-model" onchange="showSortie2(this.value,this.id)">
            <option value="">--</option>


           </select>
        </td>
        <td><a id="entresortie">Entrer</a></td>
     </tr>
     <tr>
        <td><label>Référance :</label></td>
        <td>
          <select name="select-referance" id="txtSortie2">
            <option value="">--</option>

           </select>
        </td>
        <td><a id="closs">Fermer</a></td>
     </tr>
     <tr>
       <td><label>Quantite :</label></td>
       <td><input type="number" value="1" min="1" name="qte"> </td>

     </tr>
     <tr>
      <td><label>Remis :</label></td>
      <td><input type="number"  name="remis"> </td>

      <td><button class="btn-ok" type="submit" name="sortie">Ok</button></td>
     </tr>

    </table>
   </form>
  </div>

</div>
<div class="col-sm-6 form-bloc" id="nouvelle">
  <p>Nouvelle</p>
  <span id="clo"><i class="fa fa-times" ></i></span>
  <div class="col-sm-12 sou-bloc">
    <form method="post">
    <table>
      <tr>
        <td><label>Famille :</label></td>
        <td>
        <input type="text" id="inpfa" name="txtfamille">
        </td>
        <td>

          <select  id="selfa" onchange="shownouvel(this.value)">
            <option value="">--</option>
             <?php
               $reponse = $bdd->query("SELECT Distinct(famille) from produit");

               while ($donnees = $reponse->fetch() ){
                echo '<option value="'.$donnees['famille'].'">'.$donnees['famille'].'</option>';
                    }
               ?>
          </select>

        </td>
        <td><a id="entrenouvel">Entrer</a></td>


      </tr>
      <tr>
        <td><label>Model :</label></td>
        <td>
          <input type="text" id="inpmod" name="txtmodel">
        </td>
        <td>

          <select id="txtnouvel" >
            <option value="">--</option>

          </select>

        </td>
         <td><a id="sortienouvel">Sortie</a></td>

      </tr>
      <tr>
        <td><label>Referance :</label></td>
        <td>
         <input type="text" name="txtreferance">
        </td>
        <td></td>
        <td><a id="clos">fermer</a></td>

      </tr>
      <tr>
        <td><label>Designtation :</label></td>
        <td>
         <textarea name="txtdes" class="txtdes"></textarea>
        </td>
        <td></td>


      </tr>
     <tr>
        <td><label>Quantite :</label></td>
        <td><input type="number" value="1" min="1" name="qte"> </td>
     </tr>
     <tr>
      <td><label>Prix :</label></td>
      <td><input type="text" style="width:100px" name="prix"> </td>
      <td></td>
      <td><button class="btn-ok" name="btn-nouvel">Ok</button></td>

     </tr>

    </table>
    </form>
  </div>

</div>







</body>
</html>
