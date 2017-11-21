<div id="section-contact">
<div class="row">

</div>
	<div class="container">
		  <div id="discuss" class="row">
				<div class="title col s12">
					<h2 class="center-align">
					 Parlons-en !</h2>
				<div class="row">
					<div class="center-align col s12">
						<i id="illustration" style="color: #F92AC2;" class="material-icons large">question_answer</i>
					</div>				
				</div>
				</div>
        </div>
        <div class="divContact row" id="scrollContact">
          <p class="col s12 white-text ">Tout projet web commence par un échange. Autour d'un café, par mail, téléphone, Skype, tout est possible. Nous pouvons ainsi cerner au mieux vos besoin, comprendre votre métier et vos clients. Parlez-nous un peu de vous et nous vous recontactons rapidement.<br/><br/>C'est à vous !</p>
          <form class="col s12" id="contact" action="#contact" method="POST">
            <div class="tape input-field col s12 m12 l12">
              <i class="material-icons small prefix">account_box</i>
              <input class="validate" type="text" name="nom" placeholder="Votre nom">
            </div>
            <div class="tape input-field col s12 m12 l12">
              <i class="material-icons small prefix">email</i>
              <input class="validate" type="email" name="email" placeholder="Votre email">
            </div>
            <div class="tape input-field col s12 m12 l12">
              <i class="material-icons small prefix">subject</i>
              <input class="validate" type="text" name="objet" placeholder="Objet">
            </div>
            <div class="tape input-field col s12 m12 l12">
              <i class="material-icons small prefix">mode_edit</i>
              <textarea class="materialize-textarea" name="message" rows="5" placeholder="Votre message"></textarea>
            </div>
            <div class="col s12 l4 offset-l4">
              <button class="btn cta center-align col btn cta center-align col s6 offset-s3 l12" type="submit" name="submit">Hop !</button>
            </div>
          </form>
          <div class="feedback col s10 offset-s1 center-align">
            <?php echo $feedback; ?>
          </div>
        </div>
        <div class="fixed-action-btn">
    	
    	</div>
    	</div>
   </div>