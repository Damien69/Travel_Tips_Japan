<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Travel Tips - Japan</title>
    </head>
    <body>
        <header>
			<div class="container">
				<section>
					<a href="index.php">
						<img class="logo" src="img/logo.png" alt="Logo de Travel Tips - Japan" />
					</a>
				</section>
				 <?php 
			if(isset($_SESSION['Id'])):?>
			<p class='welcome'>ようこそ <?=htmlspecialchars($_SESSION['FirstName'])?> !</p>
			<nav>
				<a href="carte.php">Carte</a>
				<a href="traducteur_devises.php">Traducteur et devises</a>
				<a href="galerie.php">Galerie</a>
			</nav>
			<form action="application/logout.php" method="POST">
			<button type="submit" name="submit" class='deconnexion'>Déconnexion</button>
			</form>
    		<?php 
   			else :
			?>
			<nav>
    		<a href="register.phtml">Créér un compte</a>
    		<a href="login.phtml">Connexion</a>
    		</nav>
			   <?php endif ?>
			</div>
	</header>
		<!--MAIN CONTENT-->
	<main class="container">
			<section class="categorie1">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laborum animi, deleniti eligendi recusandae corporis itaque rerum qui. Dolore fugit voluptatum quae animi molestiae provident, tenetur ratione architecto alias atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at ab iure dicta illum unde distinctio voluptatum consequuntur doloribus pariatur, fuga eligendi esse libero exercitationem consequatur et saepe? Aliquam, voluptatum.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aspernatur debitis nobis similique optio porro quos neque nulla recusandae quia, error, voluptas praesentium alias provident adipisci. Facilis perspiciatis natus voluptatibus!</p>
			</section>
			<img class="cerisier" src="img/cerisier.jpg" alt="cerisiers en fleurs"/>
			<section class="categorie2">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod laborum animi, deleniti eligendi recusandae corporis itaque rerum qui. Dolore fugit voluptatum quae animi molestiae provident, tenetur ratione architecto alias atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim at ab iure dicta illum unde distinctio voluptatum consequuntur doloribus pariatur, fuga eligendi esse libero exercitationem consequatur et saepe? Aliquam, voluptatum.</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aspernatur debitis nobis similique optio porro quos neque nulla recusandae quia, error, voluptas praesentium alias provident adipisci. Facilis perspiciatis natus voluptatibus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et non totam dolor saepe! Exercitationem blanditiis odio, explicabo illo placeat consequatur eum ab omnis maiores deleniti sapiente labore neque maxime incidunt?</p>
			</section>
	</main>
		<!--FOOTER-->
		<footer id="copyright">
				   <img alt="Propriété de Damien Rosina" style="border-width:0" src="img/logo.png" /></a><br /><span>Ce projet est la réalisation de Damien Rosina</span>
		</footer>
    </body>
</html>
