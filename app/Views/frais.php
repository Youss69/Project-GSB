<?php
<<<<<<< HEAD
session_start();
include_once ("fonction-frais.php");
include_once ("config-frais.php");
include_once('config-historique.php');
    
    if (isset($_SESSION['idd'])) {

        if ($_SESSION['connecté'] == TRUE) {

            $reponse = GETPDO($config);

            $execution = $reponse->query('SELECT `id`, `identifiant` FROM authentification');

            $execution->execute();

            $fetch = $execution->fetchAll();

            foreach($fetch as $fetch) {

                if ($_SESSION['idd'] === $fetch['identifiant']) {
                    
                    $numéro_id = $fetch['id'];

                }
            }

            $nombre_km = isset($_POST['nbr_km']) ?$_POST['nbr_km'] : null;
            $coutkm = isset ($_POST['cout_km']) ?$_POST['cout_km'] : null;
            $restau = isset($_POST['Restauration']) ?$_POST['Restauration'] : null;
            $htl = isset ($_POST['hôtel']) ?$_POST['hôtel'] : null;
            $event = isset($_POST['Evènementiel']) ?$_POST['Evènementiel'] : null;

                $frais = GETPDO($config);
                if (!empty($nombre_km) and !empty($restau) and !empty($htl) and !empty($event))
                {

                    $insérer = $frais->prepare('INSERT INTO fichefrais (nbr_km, cout_km, restauration, hotel, evenementiel,
                    id_authentification	) VALUES (? , ? , ? , ? , ?, ?)');

                // $resql = $insérer->execute(array($nombre_km, $coutkm, $restau, $htl, $event, $numéro_id));
                // var_dump($insérer->errorInfo());

                // echo "Données retourné";
                // header('C:\wamp64\www\BTS2SIO_ALT\Projet_GSB_Git\app\Views\historique.php');
                }

                // else{
                //     echo 'Erreur';
                //     header('Location: http://localhost:3000/app/Views/FicheFrais2.php');
                // }
        }
    }
=======

    echo "<script type=\"text/javascript\">window.alert ('Veuillez remplir les champs'); 
    window.location='/Front/FicheFrais2'; </script>";     
                   
                
        
>>>>>>> 75e310df5960730fc19d26ef300d1ee9355178b9

?>