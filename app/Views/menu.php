<div class="container">
    <!DOCTYPE html>


    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: "Lato", sans-serif;
            }

            .sidenav {
                height: 100%;
                width: 200px;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #5C5696;
                overflow-x: hidden;
                padding-top: 180px;

                box-shadow: 0px 0px 24px white;
                /* box-shadow: 0px 0px 24px #5C5696; */
                text-align: center;
            }

            .sidenav a {
                padding: 6px 8px 6px 16px;
                text-decoration: none;
                font-size: 25px;
                color: #fff;
                display: block;
            }

            .sidenav a:hover {
                color: #D4D3E8;
            }

            .main {
                margin-left: 250px;
                /* Same as the width of the sidenav */
                font-size: 28px;
                /* Increased text to enable scrolling */
                padding: 0px 10px;
            }

            @media screen and (max-height: 450px) {
                .sidenav {
                    padding-top: 15px;
                }

                .sidenav a {
                    font-size: 18px;
                }
            }
        </style>
    </head>



    <div class="sidenav wrap">
        <a href="inscription.php">Inscription</a> </br></br><br>
        <a href="index.php">Connexion</a></br></br><br>
        <a href="FicheFrais2.php">Fiche de Frais </a></br><br></br>
        <a href="">Historique</a>
    </div>