<?php

namespace App\Controllers;

class Front extends BaseController
{
    /* public function index()
    {
        return view('noteDeFrais.php');
    } */


    public function deconnection()
    {
        $session = session();
        session_destroy();
        return redirect()->to("/Front/index");
        #return view("deconnexion.php");
    }

    public function FicheFrais2()
    {
        $session = session(); // Cette syntaxe remplace session_start();
        $data = array(
            'user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"),
            'categorie' => $session->get("categorie_utilisateur")
        );

        /* 'user_idd' est modulable : on le nomme comme on veut, c'est le nom de la variable dans FicheFrais2
        'user_idd' équivaudra à la variable $_SESSION_['idd'], car on a préciser dans la suite de la syntaxe 
        $session->get("idd")
        $connected lui équivaudra à $_SESSION['connecté']
        Les variables de sessions doivent être inité une seule et unique fois*/

        return view("FicheFrais2.php", $data);
    }

    public function index()
    {
        $session = session();
        $data = array(
            'user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"),
            'categorie' => $session->get("categorie_utilisateur")
        );
        return view("index.php", $data);
    }

    public function droit()
    {

        $session = session();
        //include_once ("../app/Views/fonction-frais.php");
        //include_once ("../app/Views/config-frais.php");

        include "../app/Views/fonction-page-accueil.php";
        include "../app/Views/config-page-accueil.php";

        $reponse = GETPDO($config);

        $req = $reponse->query("SELECT * FROM authentification");
        $tableauFrais = $req->fetchAll();



        $data = array(
            'user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"),
            'categorie' => $session->get("categorie_utilisateur"), 'dataToDisplay' => $tableauFrais
        );
        return view("gestionUsers.php", $data);
    }

    public function activation()
    {
        echo "<script type=\"text/javascript\">window.alert ('Votre compte n'a pas encore été activé'); 
                    window.location='/Front/inscription'; </script>";
    }

    public function inscription()
    {
        $session = session();
        $data = array('user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"));
        return view("inscription.php", $data);
    }
    public function erreurIdentifiant()
    {
        echo "<script type=\"text/javascript\">window.alert ('Cet identifiant a déjà été pris'); 
                    window.location='/Front/inscription'; </script>";
    }

    public function noteDeFrais()
    {
        $session = session();
        //include_once ("../app/Views/fonction-frais.php");
        //include_once ("../app/Views/config-frais.php");

        include "../app/Views/fonction-page-accueil.php";
        include "../app/Views/config-page-accueil.php";

        // Première méthode via jointure interne
        $reponse = GETPDO($config);

        $req = $reponse->prepare("SELECT f.id, f.nbr_km, f.cout_km, f.restauration, f.hotel, f.evenementiel 
        from fichefrais f inner join authentification a on f.id_authentification = a.id
        WHERE a.identifiant =:id");
        $req->bindValue(':id', $session->get("idd"));
        $req->execute();
        $tableauFrais = $req->fetchAll();
        //--------------------------------------------------------------------
        // Deuxième méthode avec plusieurs auteurs de comparaison if
        $execution = $reponse->query('SELECT `id`, `identifiant` FROM authentification');

        //$execution->execute();

        $fetchs = $execution->fetchAll();

        $dataToDisplay = array();

        foreach ($fetchs as $fetch) {

            if ($session->get("idd") === $fetch['identifiant']) {

                $execution2 = $reponse->query('SELECT * FROM fichefrais');

                //$execution2->execute();

                $fetch2 = $execution2->fetchAll();

                foreach ($fetch2 as $fetch20) {

                    if ($fetch['id'] === $fetch20['id_authentification']) {
                        $dataToDisplay[] = $fetch20;
                        //$dataToDisplay est un tableau qui récuprèe chaque ligne où 
                        // $fetch['id'] === $fetch20['id_authentification']
                    }
                }
            }
        }
        $dataToDisplay2 = $tableauFrais;
        $data = array(
            'dataToDisplay' => $dataToDisplay2,
            'user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"),
            'categorie' => $session->get("categorie_utilisateur")
        );
        // $data est un tableau avec ('nomVariableDansFichierSuivant' => $variableDansFichierLocal);


        return view("noteDeFrais.php", $data);
    }


    public function code_validation()
    {
        return view("code.php");
    }

    public function comptable()
    {

        $session = session();
        //include_once ("../app/Views/fonction-frais.php");
        //include_once ("../app/Views/config-frais.php");

        include "../app/Views/fonction-page-accueil.php";
        include "../app/Views/config-page-accueil.php";

        $reponse = GETPDO($config);

        $req = $reponse->query("SELECT * FROM fichefrais ORDER BY id_authentification ASC ");
        $tableauFrais = $req->fetchAll();



        $data = array(
            'user_idd' => $session->get("idd"), 'connected' => $session->get("connecté"),
            'categorie' => $session->get("categorie_utilisateur"), 'dataToDisplay' => $tableauFrais
        );
        return view("gestionFicheFrais.php", $data);
    }
}
