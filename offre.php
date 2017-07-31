
<?php
  require_once('contact.php');
?>
<!doctype html>
<html lang="fr">
<head>
<?php
	include('private/view/head.php');
?>
<title>Cooldev | une approche globale, un accompagnement personnalisé et un budget maîtrisé pour votre communication web </title>
<meta name="keywords" content="Création de sites web, site vitrine, communication digitale, responsive, présence numérique, entrepreneuriat" />
<meta name="description" content="Nous accompagnons les entreprises dans leur présence numérique par la création de sites vitrines et la formation à la communication digitale " />

<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Cooldev | une approche globale, un accompagnement personnalisé et un budget maîtrisé pour votre communication web">
	<meta property="og:site_name" content="Cooldev">
	<meta property="og:url" content="http://www.cooldev.xyz/offre.php">
	<meta property="og:description" content="Nous accompagnons les entreprises dans leur présence numérique par la création de sites vitrines et la formation à la communication digitale " />
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.cooldev.xyz/assets/img/open-graph/og-what-we-do.png">
</head>
<body>
<?php
	include('private/view/nav.php');
?>
<header class="row valign-wrapper">
		<div id="header" class="container center-align">
		<div class="col s12 m12 l12">
			<img src="assets/img/logojaune.png" width="200px" alt="" />
			<h1>L' agence web pas tout à fait comme les autres</h1>
			<p class="col s6 offset-s3 m4 offset-m4 tape">On vous montre ?</p>
			<div class="col s12 center-align"><img data-target="#section-global" class="scrollTo " src="assets/img/arrow.png" alt="Faites défiler pour en savoir plus"/></div>

			</div>
    	</div>
    	<div class="overlay"></div>
</header>
	<section class="section-header-light" id="section-global">
		<div class="container col s12 ">
			<div class="row">
			<img class="center-align" src="assets/img/picto-puzzle-tape.png" alt="" width="150px">
			<h2>Une approche globale</h2>
			<h3>Apporter de la cohérence dans votre communication digitale pour maximiser son efficacité</h3>
			<p>Qui dit communication digitale, dit site web. Mais un site web sans visiteurs ne vous aidera pas à atteindre vos objectifs. Nous vous aidons dans la conception de votre stratégie de communication sur le web. Du site web aux réseaux sociaux, nous mettons tout en oeuvre pour rendre votre communication efficace.</p>
				<div class="row ">
  					<div class="col s12  ">
       				<div class="card-panel teal">
          				<h3 class="white-text"><img class="float left"src="assets/img/picto-responsive.png" alt="illustration site web responsive" width="100px">L'expérience client au coeur de	votre stratégie de communication</h2>
        				</div>
     	 			</div>
      		</div>
 		</div>
			<p class="no-margin-bottom"><span class="">Nous réalisons des sites web responsives accessibles sur tous supports et adaptés à votre projet </span>: site vitrine, blog, site internet sur mesure. Nous vous aidons à optimiser le contenu pour un référencement naturel (SEO) et à générer du traffic grâce aux réseaux sociaux. La suite, c'est vous et votre talent dans votre <i class="material-icons">favorite</i>de métier </p>
		</div>
	</section>
	<section class="section-header-light" id="section-coop">
		<div class="container col s12 ">
			<div class="row no-margin-bottom">
				<img class="center align" src="assets/img/picto-coop-tape.png" alt="illustration accompagnement personalisé" width="150px">
				<h2>Un accompagnement personnalisé</h2>
				<h3>Vous aider à monter en compétence pour obtenir les meilleurs résultats </h3>
				<p>Les besoins en terme de communication ne sont pas les mêmes pour tous. Nous vous proposons <span class="">des formations individuelles aux réseaux sociaux et à la maintenance de votre site web en fonction de votre niveau.</span> </p>
					<div class="row ">
	  					<div class="col s12 m12 center-align">
	       				<div class="card-panel teal">
	          				<h3 class="white-text">Découvrez toutes nos formations web dédiées aux débutants<h3>

	          				<a href="formation-web.php"><img  src="assets/img/school-dev.png" alt="school dev" width="150px"></a>

	        				</div>
	     	 			</div>
	      		</div>
      </div>
     </div>
	</section>
	<section class="section-header-light" id="section-budget">
		<div class="container col s12 ">
			<div class="row ">
				<img class="center-align" src="assets/img/picto-pig-tape.png" alt="" width="150px"/>
				<h2>Un budget maîtrisé</h2>
				<h3>Un pas après l'autre.  Commencez maintenant et faites évoluer votre communication avec vos premiers clients </h3>
			</div>
			<p><img class="float right" src="assets/img/picto-perso.png" alt="illustration site vitrine evolutif" width="150px">Nous vous accompagnons dès de le debut de votre aventure entrepreneuriale. <span class="">Commencez petit et faites évoluer votre communication</span> en même temps que votre business. Ajoutez des pages à votre site vitrine, démarrer un blog, être présent sur un nouveau réseau social sont des pas que vous pouvez réaliser quand vous avez validé votre projet.<br> Pour rendre le tout abordable pour les porteurs de projets, <span class="">nous vous avons concocté des offres au plus proche de vos besoins </span>: </p>
			</div>


	<div class="container" id="budget">
<?php
	include('private/view/offer-cards.php');
?>

	</div>
</section>





<?php
	include('private/view/contact-form.php');
?>
<?php
	include('private/view/arrow.php');
?>
<?php
	include('private/view/footer.php');
?>

</body>
