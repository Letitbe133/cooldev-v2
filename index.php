<?php require_once('contact.php') ?>


<!doctype html>
<html lang="fr">
  <head>
  	 <title>Cooldev | A vos cotés dans votre communication digitale depuis 2017</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	 <meta name="google-site-verification" content="rBRnpj5XSqUqYyI27OQ52hRYjk1PkW2Z1i3E9ces7oE" />
    <meta name="keywords" content="Création de sites web, site vitrine, communication digitale, responsive, présence numérique, porteurs de projets, création d'entreprise" />
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

<!-- Piwik -->
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
<!-- End Piwik Code -->

</head>
<body>

<?php
	include('private/view/nav.php');
?>
	<header class="row no-margin-bottom valign-wrapper">
		<div class="row " id="header">
			<div class="col s12 center-align ">
						<img id="site" src="assets/img/j-ai-besoin-d-un-site.png" alt="j'ai besoin d'un site">						
						<!--<h1 class="">Faites grandir vos idées <br>grâce au web </h1>
						<!--<p class="col s6 offset-s3 m4 offset-m4 tape">On est là !</p>-->
							<div class="col s12 center-align arrow"><img data-target="#offre" class="scrollTo " width="25px" src="assets/img/arrow.png" alt="Faites défiler pour en savoir plus"/></div>    			
			</div>

	    </div><!--#HEADER-->
	   <div class="overlay"></div>
	</header>

	<section id="offre">
		<h2 class="center-align">Nous accompagnons les entreprises dans leur <br>stratégie de communication digitale.</h2>
	  	<div class="row">
			<div class="picto-offre col s12 m12 l4 center-align">
					<img src="assets/img/picto-puzzle-2.png"  alt="illustration approche globale"  >
					<p>Nous ne voyons pas un site web comme une fin en soi. Nous vous accompagnons dans l'intégration de votre site internet dans votre stratégie de communication numérique.<p>
	  		</div><!--PICTO 1-->
	  		<div class="picto-offre col s12 m12 l4 center-align">
					<img src="assets/img/picto-coop-2.png"  alt="illustration accompagnement personnalisé"   >
					<p>Nos clients sont avant tout des partenaires. Nous co-construisons ensemble le site web qui vous ressemble. Nous disons ce que nous faisons et nous faisons ce que nous disons.<p>
	  		</div><!--PICTO 2-->
	  		<div class="picto-offre col s12 m12 l4 center-align">
					<img src="assets/img/picto-pig-2.png" alt="illustration budget maitrisé"  >
					<p>Grâce à une réelle écoute et compréhension de vos besoins, objectifs et contraintes, nous vous proposons des solutions adaptées à votre projet.<p>
	  		</div><!--PICTO 3-->
	  		<div id="call-to-action" class="col s12 ">
	          <div class="div-cta">
	            <a href="offre.php" ><button class="btn cta scrollTo" type="button" name="button">J'ai besoin de ça !</button></a>
	          </div>
	      </div><!--CDA-->
	       <div class="separator col s8 offset-s2 divider"></div>
		</div>
	</section><!--SECTION OFFRE-->

   <section id="motiv">
 		<div class="container">
 			<div class="row">
        	
        	 
		  		<div class="title col s12">
		  		<h2 class="center-align">Le collectif Cooldev</h2>
				</div>
						<div class="center-align col s12">
					<img src="assets/img/picto-brain.png" alt="">
				</div>
			  <div class="col s12">
		  		<p class="white-text center-align">Cooldev, c'est deux freelances passionnés et engagés très complémentaire qui adorent travailler ensemble. C'est une vision commune du web et des valeurs partagées. <br><br>C'est surtout deux cerveaux en ébullition au service de vos projets web !</p>
			</div>
		
		</div>
		 <?php
				include('private/view/cards-testimonial.php');
			?>   
				
		</div>	
	</section><!--SECTION #MOTIV-->
	
	<section id="section-testimonial">
		<div class="container " id="">	
		<h2>Nos domainnes de compétences</h2>
      <div class="row">
        <div class="col s3 m2">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/picto-brain.png">
            </div>
            <div class="card-content">
              <p class="grey-text">test</p>
            </div>
           </div>
        </div>
        <div class="col s3 m2">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/picto-brain.png">
            </div>
            <div class="card-content">
              <p class="grey-text">test</p>
            </div>
           </div>
        </div>
                <div class="col s3 m2">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/picto-brain.png">
            </div>
            <div class="card-content">
              <p class="grey-text">test</p>
            </div>
           </div>
        </div>
                <div class="col s3 m2">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/picto-brain.png">
            </div>
            <div class="card-content">
              <p class="grey-text">test</p>
            </div>
           </div>
        </div>
                <div class="col s3 m2">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/picto-brain.png">
            </div>
            <div class="card-content">
              <p class="grey-text">test</p>
            </div>
           </div>
        </div>            
		    	
<!--TITLE-->
		</div><!--TESTIMONIAL-->
	</section><!--SECTION #SECTION-TESTIMONIAL-->

<!-- 	<section id="section-main-offer">
		<div class="row">
			<div class="separator  col s8 offset-s2 divider"></div>
		</div><!--SEPARATOR--> 
		<!-- <div class="container" >
			<div class="row">
			<div class="title col s12">
		  		<h2 class="center-align">Nos domaines d'intervention</h2>
			</div>
			
				<div class="center-align col s12">
					<i id="illustration" style="color:#F92AC2" class="material-icons medium">&#xE912;</i>
				</div>
			</div>
	
	<!-- 	</div>
	</section> --><!--SECTION #SECTION-MAIN-OFFER-->
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
