<?php 
 

 try {
     
 
                 $users = $_bdd->prepare('SELECT `nom`, `prenom`, `image_site`  FROM `utilisateur` ');
                 $users->execute(array($_POST['email'])); 
 
 
                 if ($users->rowCount() == 0) {
 
                     // insertion des données dans la BD
                     
                     if (isset($_POST['valider']) || isset($_POST['name']) || isset($_POST['prenom']) || isset($_POST['email']) || isset($_POST['city']) || isset($_POST['country'])) {
                         $_name = $_POST['name'];
                         $_prenom = $_POST['prenom'];
                         $_mail = $_POST['email'];
                         $_city = $_POST['city'];
                         $_country = $_POST['country'];
                     
                         if(!$_name || !$_prenom  || !$_mail || !$_city || !$_country) {
                             print "<p class=\"warning\"> champs vide veillez remplir</p>";
                         }
                         else {
                             $_req = $_bdd->prepare('INSERT INTO `utilisateur` (nom, prénom, mail, city, country) VALUES (?,?,?,?,?)');
                             $_req->execute(
                                 array(htmlentities($_name),
                                     htmlentities($_prenom),
                                     htmlentities($_mail),
                                     htmlentities($_city),
                                     htmlentities($_country))
                             );  
                         }
                         //htmlentities() est identique à la fonction htmlspecialchars(), sauf que tous les caractères qui ont des équivalents en entités HTML sont effectivement traduits. La fonction get_html_translation_table() peut être utilisée
                         // pour retourner la table de traduction utilisée en fonction des constantes flags fournies. 
                     }
                 }
                 // }else {
                 //    header("LOCATION: formulaire.php?");
                 //    echo "Cet Utilisateur existe déjas";
 
                 // }
 
 
 
                 
 } catch(PDOException $e) {
     die('Erreur de BDD'.$e->getMessage());
 }
 
 ?>