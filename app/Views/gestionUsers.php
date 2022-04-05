<?php
$session = session();
        
if ($connected == FALSE) {
  echo "<script type=\"text/javascript\">window.alert ('Vous devez être connecté pour accéder à cette page'); 
  window.location='/Front/index'; </script>";
}
else if ($categorie != 'Administrateur') {
    echo "<script type=\"text/javascript\">window.alert ('Vous devez être administrateur pour accéder à cette page'); 
  window.location='/Front/FicheFrais2'; </script>";
}



			
		
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "menu-connectée.php"; ?> 

<style>

.Liam{
    margin-top : 50px;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    text-align: center ;
    margin-left : 300px;
    box-shadow: 0px 0px 15px black;
  }
  
  .Liam td, .Liam th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);		
}
  
  .Liam tr:nth-child(even){background-color: #FFFFFF;}
  .Liam tr:nth-child(odd){background-color: #C7C5F4;}

  
  .Liam tr:hover {background-color: #ddd;}
  
  .Liam th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #5D54A4;
    color: white;
  }

</style>
                        <table class="Liam">
                            <tr>
                            <th>ID BDD</th>
                            <th>Numéro Factures</th>

                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Catégorie</th>
                                <th>Activer ?</th>
                                
                                <th>Désactiver</th>
                            </tr>
     
    <?php         
    
                
                $compteur = 1;
                    foreach ($dataToDisplay as $fetch20) {
                        ?> 
                            <tr>

                          <?php //$_SESSION['id_bdd'] = $dataToDisplay[$fetch20['id']];
                          ?>
                                <td><?php echo $fetch20['id']; ?></td>
                              <td> <?php echo $compteur; ?> </td>
                              
                                <td><?php echo $fetch20['nom']; ?></td>
                                <td><?php echo $fetch20['prenom']; ?></td>
                                <td><?php echo $fetch20['mail']; ?></td>
                                <td><?php echo $fetch20['categorie_utilisateur']; ?></td>
                                <td><?php echo $fetch20['Activation3']; ?></td>
                                <td><a href=<?php echo base_url("Back/Activation"); ?>>Activer</a></td>
                            </tr>
                            
                        <?php $compteur = $compteur + 1;
                       
                        }
                ?>
                </table>

          
                    
</body>
</html>