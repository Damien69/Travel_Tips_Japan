<?php
	session_start();
	?>

<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0" >
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Travel Tips - Japan</title>
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
					<button type="submit" name="submit" class='deconnexion'>Déconnexion</button>
				</form>
			</div>
		</header>
		<!--MAIN CONTENT-->
		<main class="container">
			<img id="mainImage" src="img/galerie/image1.jpg"/>
    		<br />
    		<div id="imagesGalerie" onclick="changeImageOnClick(event)" mouseover='scrollTo(image_id)'>
				<img class="imgStyle" src="img/galerie/image1.jpg" />
        		<img class="imgStyle" src="img/galerie/image2.jpg" />
        		<img class="imgStyle" src="img/galerie/image3.jpg" />
        		<img class="imgStyle" src="img/galerie/image4.jpg" />
        		<img class="imgStyle" src="img/galerie/image5.jpg" />
        		<img class="imgStyle" src="img/galerie/image6.jpg" />
        		<img class="imgStyle" src="img/galerie/image7.jpg" />
				<img class="imgStyle" src="img/galerie/image8.jpg" />
				<img class="imgStyle" src="img/galerie/image9.jpg" />
				<img class="imgStyle" src="img/galerie/image10.jpg" />
				<img class="imgStyle" src="img/galerie/image11.jpg" />
				<img class="imgStyle" src="img/galerie/image12.jpg" />
				<img class="imgStyle" src="img/galerie/image13.jpg" />
				<img class="imgStyle" src="img/galerie/image14.jpg" />
				<img class="imgStyle" src="img/galerie/image15.jpg" />
				<img class="imgStyle" src="img/galerie/image16.jpg" />
				<img class="imgStyle" src="img/galerie/image17.jpg" />
				<img class="imgStyle" src="img/galerie/image18.jpg" />
				<img class="imgStyle" src="img/galerie/image19.jpg" />
				<img class="imgStyle" src="img/galerie/image20.jpg" />
				<img class="imgStyle" src="img/galerie/image21.jpg" />
				<img class="imgStyle" src="img/galerie/image22.jpg" />		
    		</div>
		</main>
		<!--FOOTER-->
		<footer id="copyright">
			<img alt="Propriété de Damien Rosina" style="border-width:0" src="img/logo.png" /></a><br /><span>Ce projet est la réalisation de Damien Rosina</span>
		</footer>
		<script src="js/main.js"></script>
    </body>
</html>
<?php
else :?>
			<p>Merci de vous connectez en vous rendant sur le lien ci-dessous :</p>
			<a href="login.phtml">Connexion</a>
	<?php endif ?>
