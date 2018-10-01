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
		<main class='pagetrad'>
			<div id='convertisseur'>
			<h2>Convertisseur euro-yen</h2>
				<form name="converter">
					<table>
						<tr>
						<td>Euro: </td><td><input type="text" name="euro" onChange="euroConverter()" /></td>
						</tr>
						<tr>
						<td>Yen: </td><td><input type="text" name="yen" onChange="yenConverter()" /></td>
						</tr>
						<tr>
						<td><input type="button" value="Convertir" class='convertir' /></td>
						<td><input type="reset" value="Réinitialiser" class='reset' /></td>
						</tr>
					</table>
				</form>
			</div>
			<div id='dictionnaire'>
				<h2>Dictionnaire</h2>
				<p>Cliquez sur le mot où l'expression dont vous souhaitez connaitre la traduction en japonais (romaji pour faciliter la lecture)</p>
				<p class='bonjour' id='resultat'>Konichiwa</p>
				<p class='revoir' id='resultat'>Sayonara</p>
				<p class='aplus' id='resultat'>Mata ne</p>
				<p class='francais' id='resultat'>Furansu-jin</p>
				<p class='origine' id='resultat'>Furansu Karakimashita</p>
				<p class='pardon' id='resultat'>Sumimasen</p>
				<p class='gare' id='resultat'>Eki wa doko desu ka</p>
				<p class='anglais' id='resultat'>Eigo wo hanashimasuka</p>
				<p class='japonais' id='resultat'>Nihongo wo hanashimasen</p>
				<p class='merci' id='resultat'>Arigato</p>
			</div>
			<div>
				<button id="show_bonjour" class='boutontrad'>Bonjour</button>
				<button id="show_revoir" class='boutontrad'>Au revoir</button>
				<button id="show_aplus" class='boutontrad'>A plus tard</button>
				<button id="show_francais" class='boutontrad'>Français</button>
				<button id="show_origine" class='boutontrad'>Je viens de France</button>
				<button id="show_pardon" class='boutontrad'>Excusez-moi</button>
				<button id="show_gare" class='boutontrad'>Où se trouve la gare ?</button>
				<button id="show_japonais" class='boutontrad'>Je ne parle pas japonais</button>
				<button id="show_anglais" class='boutontrad'>Parlez-vous Anglais ?</button>
				<button id="show_merci" class='boutontrad'>Merci</button>
			</div>
			<div id='dictionnaireExterne'>
			<h2>Dictionnaire externe</h2>
			<p>Pour encore plus de traduction vous pouvez tapez un mot dans la barre de recherche ci-dessous qui vous dirigera vers un site externe très complet(http://www.dictionnaire-japonais.com). Essayez par exemple de traduire les hiraganas apparaissant sur la page d'accueil avant votre nom ;-)</p>
				<form name="traducteur" class="tradexterne" action="" method="POST">
					<label for="trad">Mot à traduire (redirection vers site externe) :</label>
						<input id="trad" type="text" name="trad" required>
						<input type="submit" value="Traduire" class='traduire'>
					<?php
						if (!empty($_POST)) {
    					$traduction = $_POST['trad'];
    					echo "<script language='JavaScript'>window.open('http://www.dictionnaire-japonais.com/search.php?w=$traduction','_blank');</script>";}
					?>
			</div>
			</form>
		</main>
		<!--FOOTER-->
		<footer id="copyright">
				   <img alt="Propriété de Damien Rosina" style="border-width:0" src="img/logo.png" /></a><br /><span>Ce projet est la réalisation de Damien Rosina</span>
		</footer>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>
<?php
else :?>
			<p>Merci de vous connectez en vous rendant sur le lien ci-dessous :</p>
			<a href="login.phtml">Connexion</a>
	<?php endif ?>
