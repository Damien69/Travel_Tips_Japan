<?php
	session_start();
	?>
	
<!DOCTYPE html>
<html>

<head>
    <title>Carte</title>
    <meta name="viewport" content="initial-scale=1.0" >
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */

        html,
        body {
            height: 85%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<?php 
			if(isset($_SESSION['Id'])):?>
<body>
	<header>
			<div class="container">
				<section>
					<a href="index.php">
						<img class="logo" src="img/logo.png" alt="Logo de Travel Tips - Japan" />
					</a>
				</section>
				<nav>
					<a href="carte.php">Carte</a>
					<a href="traducteur_devises.php">Traducteur et Devises</a>
					<a href="galerie.php">Galerie</a>
				</nav>
				<form action="application/logout.php" method="POST">
			<button type="submit" name="submit">Déconnexion</button>
			</form>
			</div>
		</header>
    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 35.719411, lng: 139.643148 },
                zoom: 6
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBZm0gkZdKPpHufyjzEkkl3RdhU9K5ZM0&callback=initMap" async
		defer></script>
	<footer id="copyright">
				   <img alt="Propriété de Damien Rosina" style="border-width:0" src="img/logo.png" /></a><br /><span>Ce projet est la réalisation de Damien Rosina</span>
		</footer>
</body>
</html>
<?php
else :?>
			<p>Merci de vous connectez en vous rendant sur le lien ci-dessous :</p>
			<a href="login.phtml">Connexion</a>
	<?php endif ?>