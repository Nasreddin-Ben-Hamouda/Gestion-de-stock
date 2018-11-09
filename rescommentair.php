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

               $reponse = $bdd->query("SELECT * FROM commande,produit,users
                                      where commande.confirme='oui' and commande.user_id=users.user_id and commande.pro_id=produit.id and numcom Like '%$q%' ");


               while ($donnees = $reponse->fetch() ){
                $hint= '
                       <tr>
                       <td>'.$donnees['numcom'].'</td>
                       <td><img src="produit/'.$donnees['img'].'" style="width:50px"></td>
                       <td>'.$donnees['marque'].',Color:'.$donnees['color'].'</td>
                       <td>'.$donnees['quantite'].'</td>
                       <td><a href="suivcommande?id='.$donnees['numcom'].'">Affiche</a></td>
                       <td>'.$donnees['date_com'].'</td>
                       <td>'.$donnees['paiment'].'</td>
                       <td>'.$donnees['prix'].'</td>
                      </tr>';
                    }




            }
        }


// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "<tr><td colspan=\"11\"><h3 style=\"text-align:center;font:400 19px/20px Poppins-Regular,'Open Sans','Helvetica Neue',Arial,sans-serif;\">Aucun commande de cette numéro</h3></td></tr>" : $hint;
?>
