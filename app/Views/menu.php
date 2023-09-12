<div class="container">
	<!DOCTYPE html>


	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body {
				font-family: "Lato", sans-serif;
				overflow: hidden;
			}

			.sidenav {
				height: 100%;
				width: 200px;
				position: fixed;
				z-index: 2;
				top: 0;
				left: 0;
				background-color: #5C5696;
				overflow: hidden;
				padding-top: 70px;
				text-align: center;
			}

			.sidenav a {
				padding: 50px 8px 6px 16px;
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
				font-size: 28px;
				padding: 0px 10px;
			}

			img {
				height: 200px;
			}

			#debug-icon {
				display: none !important;
			}

			@media all and (max-width: 830px) {

				body {
					overflow-y: scroll;
				}

				img {
					height: unset;
					max-width: 33%;
					top: -0px;
					position: relative;
				}

				.sidenav {
					padding-top: 0px;
					height: 115px;
					width: 100%;
					display: flex;
					justify-content: space-evenly;
				}

				.sidenav a {
					padding-top: 5px;
					font-size: 20px;
					line-height: 115px;
				}

				.container {
					position: relative;
					top: 70px;
				}
			}


			@media all and (max-width: 520px) {
				.sidenav a {
					margin-top: 25px;
					line-height: 30px;
				}
			}

			@media screen and (max-width: 450px) {
				.container:not(:first-of-type) {
					scale: 0.9;
				}
			}

			@media screen and (max-width: 380px) {
				.container:not(:first-of-type) {
					scale: 0.8;
				}

				.sidenav a {
					margin-top: 8%;
					font-size: 17px;
				}
			}
		</style>
	</head>



	<div class="sidenav wrap">
		<img src="https://cdn.discordapp.com/attachments/903635476836139078/939172409645334558/Sans_titre_1.png" alt="">
		<a href="/Front/inscription">Page d'inscription</a>
		<a href="/Front/index">Page de connexion</a>
		<?php
		#$session = session();
		#$data = array('user_idd' => $session->get("idd"), 'connected'=> $session->get("connecté")); ?>
	</div>