<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>DESIGN SONORE</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/normalize.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js" type="text/javascript"></script>
	</head>

<body onload="AfficheRegles();">

		<!-- *********************** -->
		<!-- ***********HEADER ETAPES************ -->
		
			<header>

				<form id="temps-chrono" name="timeform">
					Temps écoulé : <input type=text name="timetextarea" value="00:00" size="10" />
				</form>
				
				<span id="currentscore">Score : <input type=text name="currentscore" value="0" size="10" /></span>
				
			</header>	
						
		<!-- *********************** -->
		<!-- ***********POP-UP EXPLICATIF************ -->
		
		<button class="md-trigger" data-modal="modal-16"></button>
		<button class="md-trigger md-setperspective" data-modal="modal-17"></button>	
		<button class="md-trigger md-setperspective" data-modal="modal-17"></button>		


		<div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Comment jouer ?</h3>
				<div>
					<p>This is a modal window. You can do the following things with it :</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
										
					<div id="compteRebour_affiche"></div>
					<script type="text/javascript">rebour(2);</script>

					<button class="md-close" id="start-niveau-un" onclick="StartChrono();">Commencer</button>
				</div>
			</div>
		</div>
		
		<!-- Afficher les félicitations du niveau 1 pour aller au niveau 2 -->
		
		<div class="md-modal md-effect-17 fin-niveau-un" id="modal-17">
			<div class="md-content">
				<h3>Bravo ! Tu as terminé le niveau 1</h3>
				<div>
					<p>Accéder au niveau 2</p>
					<ul>
					</ul>
					<button class="md-close goToNiveauDeux" onclick="AllerNiveauDeux(); StartChrono();">Niveau suivant</button>
				</div>
			</div>
		</div>
		
		
		<!-- Afficher les félicitations du niveau 2 pour aller au niveau 3 -->


				<div class="md-modal md-effect-17 fin-niveau-deux" id="modal-17">
			<div class="md-content">
				<h3>Bravo ! Tu as terminé le niveau 2</h3>
				<div>
					<p>Accéder au niveau 3</p>
					<ul>
					</ul>
					<button class="md-close goToNiveauTrois" onclick="AllerNiveauTrois(); StartChrono();">Niveau suivant</button>
				</div>
			</div>
		</div>
			
		<!-- *********************** -->
		<!-- ***********NIVEAU UN ************ -->
		<div id="niveau-un">

		<div id="main">
		
		<audio id="play-sound-one-crowd" loop>
			<source src="audio/crowd-lev-1.ogg" type="audio/ogg">
			<source src="audio/crowd-lev-1.mp3" type="audio/mpeg">
			Votre navigateur ne supporte pas ce format de lecteur audio.
			</audio>
		
			<ul id="nav-one" class="nav PlayBeepOne">
		   <li>
		   	<a href="#" onmouseover="AfficheFinNiveauUn(); StopCrowd(); StopChrono();"></a>
		   	<audio id="beep-one" preload="auto">
				<source src="audio/beep-lev-1.mp3"></source>
				<source src="audio/beep-lev-1.ogg"></source>
			Votre navigateur ne supporte pas ce format de lecteur audio.
			</audio>
			</li>

		</ul>
		
		</div><!-- fin #main -->
		
		<!-- POP-UP FIN DE NIVEAU 1 -->
		
		</div><!-- fin #niveau-un -->		
		
		
		<!-- *********************** -->
		<!-- ***********NIVEAU DEUX ************ -->
		<div id="niveau-deux">

		<div id="main">
		
		<audio id="play-sound-two-crowd" loop>
			<source src="audio/crowd-lev-2.ogg" type="audio/ogg">
			<source src="audio/crowd-lev-2.mp3" type="audio/mpeg">
			Votre navigateur ne supporte pas ce format de lecteur audio.
			</audio>
		
			<ul id="nav-one" class="nav PlayBeepTwo">
		   <li>
		   	<a href="#" onmouseover="AfficheFinNiveauDeux(); StopCrowd(); StopChrono();"></a>
		   	<audio id="beep-two" preload="auto">
				<source src="audio/beep-lev-2.mp3"></source>
				<source src="audio/beep-lev-2.ogg"></source>
			Votre navigateur ne supporte pas ce format de lecteur audio.
			</audio>
			</li>

		</ul>
		
		</div><!-- fin #main -->
		
		<!-- POP-UP FIN DE NIVEAU 2 -->
		
		</div> <!-- fin #niveau-deux -->
			

		<div class="md-overlay"></div><!-- the overlay element -->

		<script src="js/classie.js" type="text/javascript"></script>
		<script src="js/modalEffects.js" type="text/javascript"></script>

		<script type="text/javascript">
			var polyfilter_scriptpath = '/js/';
		</script>
		
		<script src="js/cssParser.js" type="text/javascript"></script>
		<script src="js/css-filters-polyfill.js" type="text/javascript"></script>
		<script src="js/functions-sound.js" type="text/javascript"></script>

</body>
</html>