<?php
if ($connected == FALSE) {
  echo "<script type=\"text/javascript\">window.alert ('Vous êtes devez être connecté pour accéder à cette page'); 
  window.location='/Front/index'; </script>";
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

                            <th>Numéro Factures</th>

                                <th>Nombre de Kilomètres</th>
                                <th>Indémnité kilométrique</th>
                                <th>Restauration</th>
                                <th>Hôtel</th>
                                <th>Evènementiel</th>
                                <th>Supprimer</th>
                            </tr>
    <?php        
                $_SESSION['fichefrais'] = [];
                $compteur = 1;
                    foreach ($dataToDisplay as $fetch20) {
                        ?>
                            <tr>
                              <td> <?php echo $compteur; ?> </td> <?php $_SESSION['fichefrais'][$compteur] = $fetch20['id']; ?>
                                <td><?php echo $fetch20['nbr_km']; ?></td>
                                <td><?php echo $fetch20['cout_km']; ?></td>
                                <td><?php echo $fetch20['restauration']; ?></td>
                                <td><?php echo $fetch20['hotel']; ?></td>
                                <td><?php echo $fetch20['evenementiel']; ?></td>
                                <td><a href=<?php echo base_url("Back/Supprimer/$compteur"); ?>>Supprimer</a></td>
                            </tr>
                            
                        <?php $compteur = $compteur + 1;
                        }
                ?>
                </table>

          
                    
</body>
</html>