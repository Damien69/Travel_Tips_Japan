<?php
	session_start();
	?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="utilities/utilities.js"></script>
        <title>Travel Tips - Japon</title>
        <link rel="stylesheet" href="css/style.css">
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
		<!--MAIN CONTENT-->
		<main class="container">
			<p>Ici sera la galerie</p>
		</main>
		<!--FOOTER-->
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
