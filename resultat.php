<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=Otechnologie;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}



$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {

            if ($hint === "") {

               $reponse = $bdd->query("SELECT * from produit where referance like '%$q%'");

               while ($donnees = $reponse->fetch() ){
                $hint= '
                       <tr>
                       <td><input type="radio" name="radio_id" value="'.$donnees['id'].'" class="id_radio"></td>
                        <td>'.$donnees['id'].'</td>
                        <td>'.$donnees['categorie'].'</td>
                        <td>'.$donnees['marque'].'</td>
                        <td>'.$donnees['model'].'</td>
                        <td>'.$donnees['referance'].'</td>
                        <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                        <td><span style="background:'.$donnees['color'].'"></span></td>

                        <td>'.$donnees['quantite'].'</td>
                        <td>'.$donnees['prix'].'</td>
                        <td>'.$donnees['date_entre'].'</td>

                      </tr>';
                    }




            }
        }


// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "<tr><td colspan=\"11\"><h3 style=\"text-align:center;font:400 19px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;\">Aucun produit a cette référance</h3></td></tr>" : $hint;
?>
