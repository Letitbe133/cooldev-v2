<?php require_once('contact.php') ?>


<!doctype html>
<html lang="fr">
  <head>
  	 <title>Cooldev | A vos cotés dans votre communication digitale depuis 2017</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	 <meta name="google-site-verification" content="rBRnpj5XSqUqYyI27OQ52hRYjk1PkW2Z1i3E9ces7oE" />
    <meta name="keywords" content="Création de sites web, site vitrine, communication digitale, responsive, identité visuelle, blog, wordpress" />
    <meta name="description" content="Nous accompagnons les entreprises dans leur présence numérique par la création de sites vitrines et la formation à la communication digitale " />
    <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto%7cRaleway:900%7cMontserrat:800%7cArchivo+Black%7cOswald:700%7cMaterial+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/master.css" />


<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Cooldev | A vos cotés dans votre communication digitale depuis 2017">
	<meta property="og:site_name" content="Cooldev">
	<meta property="og:url" content="http://www.cooldev.xyz">
	<meta property="og:description" content="Nous accompagnons les entreprises dans leur présence numérique par la création de sites vitrines et la formation à la communication digitale " />
	<meta property="og:type" content="website">
	<meta property="og:image" content="http://www.cooldev.xyz/assets/img/open-graph/og-cooldev.png">

<!-- Piwik 
		<script type="text/javascript" defer>
		  var _paq = _paq || [];
		  _paq.push(["setCookieDomain", "*.cooldev.xyz"]);
		  _paq.push(['trackPageView']);
		  _paq.push(['enableLinkTracking']);
		  (function() {
		    var u="//analytics.mpaw.xyz/piwik/";
		    _paq.push(['setTrackerUrl', u+'piwik.php']);
		    _paq.push(['setSiteId', '5']);
		    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		  })();
		</script>
 End Piwik Code -->

</head>
<body>

<?php
	include('private/view/nav.php');
?>
	<header class="row no-margin-bottom valign-wrapper">
	<div id="particles"></div>
		<div class="row " id="header">
			<div class=" col s12 center-align ">
						<a href="#modalheader" ><button class="btn cta modal-trigger " type="button" name="button">J'ai besoin d'un site !</button></a>						

			</div>
			<div class="col s12 center-align ">
				<div class="col s12 center-align arrow"><img data-target="#offre" class="scrollTo " width="25px" src="assets/img/arrow.png" alt="Faites défiler pour en savoir plus"></div>    			
			</div>
	  </div>
	</header><!--#HEADER-->
	<div id="modalheader" class="modal">
		<div class="modal-content" style="display: flex; padding: 0px;">
			<div class="modal-action modal-close" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1000;"><i class="material-icons right">close</i></div>
			<img src="assets/img/unicorn.gif" alt="" srcset="" style="flex: auto;">
		</div>
	</div><!--Modal Header-->
	</div>
	<section id="offre">
		<h2 class="center-align">Hello world !</h2>
	  	<div class="row">
			<div class="picto-offre col s12 m12 l4 center-align">
					<img class="responsive-img" src="assets/img/picto-puzzle-2.png"  alt="illustration approche globale"  >
					<p class="grey-text">Un site web est un outil, pas une fin en soi. Nous l'intégrons dans votre stratégie de communication numérique.<p>
	  		</div><!--PICTO 1-->
	  		<div class="picto-offre col s12 m12 l4 center-align">
					<img class="responsive-img" src="assets/img/picto-coop-2.png"  alt="illustration accompagnement personnalisé"   >
					<p class="grey-text">Nous sommes votre partenaire. Nous co-construisons ensemble le site web dont vous avez besoin en toute transparence. <p>
	  		</div><!--PICTO 2-->
	  		<div class="picto-offre col s12 m12 l4 center-align">
					<img class="responsive-img" src="assets/img/picto-pig-2.png" alt="illustration budget maitrisé"  >
					<ul class="staggered"><li style="font-size: 2rem; opacity: 0;" class="grey-text">Nous vous écoutons et comprenons vos besoins, objectifs et contraintes pour vous proposer les solutions adaptées à votre projet.<li></ul>
	  		</div><!--PICTO 3-->	    
		</div>
	</section><!--SECTION OFFRE-->
   <section id="motiv">
 		<div class="container">
 			<div class="row">
		  		<div class="title col s12">
		  		<h2 class="center-align">Le collectif Cooldev</h2>
				</div><!--TITLE-->
					<div class="center-align col s12">
						<img class="responsive-img" src="assets/img/picto-brain.png" alt="">
					</div><!--PICTO BRAIN-->
			  <div class="col s12">
		  		<p class="white-text ">Cooldev, c'est deux freelances très complémentaires, passionnés et engagés qui adorent travailler ensemble. C'est une vision commune du web et des valeurs partagées. Nous sévissons sur Marseille (13) et les alentours<br><br>C'est surtout deux cerveaux en ébullition au service de vos projets web !</p>
			  </div><!--TEXT-->		
		</div><!--ROW-->
		 <?php
				include('private/view/cards-testimonial.php');
			?>   
			<div id="call-to-action" class="col s12 ">
	          <div class="div-cta">
	            <a href="#section-contact" data-target="#section-contact" class="scrollTo"><button class="btn cta " type="button" name="button">Et si on travaillait ensemble ?</button></a>
	          </div>
	      </div><!--CTA-->	
		</div><!--CONTAINER-->	
	</section><!--SECTION #MOTIV-->
	<section id="skills">
		 <div class="row">  
	  		<div class="title col s12">
	  		<h2 class="center-align">Nos spécialités</h2>
	  		<div class="center-align" >
	  		<img id="unicorn" style="opacity:0;" src="assets/img/picto-unicorn-6.png" alt="">
	  		</div>
			</div><!--TITLE-->
		</div>
		<div class="container">
		<div class="skills">
		<?php
	include('private/view/whatwedo.php');
?>
			
		</div><!--SKILLS-->
		</div>
	</section><!--SECTION #SECTION-SKILLS-->

<?php
	include('private/view/contact-form.php');
?>
<!--CONTACT-->
<?php
	include('private/view/arrow.php');
?>

<?php
	include('private/view/footer.php');
?>
<!--FOOTER-->
  </body>

</html>
			