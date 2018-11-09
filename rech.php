<?php
try {
 $bdd = new PDO('mysql:host=localhost;dbname=Otechnologie;charset=utf8', 'root', '');
} catch (Exception $e) {
 die('Erreur : ' . $e->getMessage());
}

?>
<?php
// Array with names

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

            if ($hint === "") {
               
               $reponse = $bdd->query("SELECT * from produit where marque like '%$q%'");
               $nb= $reponse->rowCount();
               if($nb>0){
                echo '<ul>';  
               
               while ($donnees = $reponse->fetch() ){
                $hint.= ' <li><a href="single.php?id='.$donnees['id'].'"><img src="produit/'.$donnees['img'].'" style="width:50px">
                        '.$donnees['model'].' <i class="fa fa-angle-right"></i> '.$donnees['marque'].'</a></li>';
                    }
                }   
            } 

      

// Output "no suggestion" if no hint was found or output correct values 
echo $hint;
?>