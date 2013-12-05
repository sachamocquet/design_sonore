// *****************
// NIVEAU 1
// Déclaration des variables
	var CrowdSoundOne = $("#play-sound-one-crowd")[0];
	var beepOne = $("#beep-one")[0];
	
// Emettre le son de la foule et de l'objet à trouver après avoir cliqué "Commencer !"

	$(".md-close-one").click(function(){
			CrowdSoundOne.play();
			beepOne.play();
		});
	
// ******************
// Arrêter le son de la foule et du beepOne lorsque l'on a cliqué sur l'objet
	$(".PlayBeepOne").click(function(){
			CrowdSoundOne.pause();
			beepOne.pause();
		});


// *****************
// NIVEAU 2
// Déclaration des variables
	var CrowdSoundTwo = $("#play-sound-two-crowd")[0];
	var beepTwo = $("#beep-two")[0];

// Emettre le son de la roule après avoir cliqué "Commencer !"
$(".goToNiveauDeux").click(function(){
			CrowdSoundTwo.play();
			beepTwo.play();
});
	
// ******************
// Arrêter le son de la foule et du beepTwo lorsque l'on a cliqué sur l'objet
	$(".PlayBeepTwo").click(function(){
			CrowdSoundTwo.pause();
			beepTwo.pause();
		});
		
// *****************
// NIVEAU 3
// Déclaration des variables
	var CrowdSoundThree = $("#play-sound-three-crowd")[0];
	var beepThree = $("#beep-three")[0];

// Emettre le son de la roule après avoir cliqué "Commencer !"
$(".goToNiveauTrois").click(function(){
			CrowdSoundThree.play();
			beepThree.play();
});
	
// ******************
// Arrêter le son de la foule et du beepThree lorsque l'on a cliqué sur l'objet
	$(".PlayBeepThree").click(function(){
			CrowdSoundThree.pause();
			beepThree.pause();
		});
		
// *******************
// Son "YES" au survol de l'élément trouvé niveau 1
var SoundHover = $("#sound-hover-mouse")[0];

$("#nav-one").mouseenter(function(){
	SoundHover.play();	
	beepOne.pause();
});

$("#nav-one").mouseleave(function(){
	SoundHover.pause();	
	beepOne.play();
});

// Son "YES" au survol de l'élément trouvé niveau 2
$("#nav-two").mouseenter(function(){
	SoundHover.play();	
	beepTwo.pause();
});

$("#nav-two").mouseleave(function(){
	SoundHover.pause();	
	beepTwo.play();
});

// Son "YES" au survol de l'élément trouvé niveau 3
$("#nav-three").mouseenter(function(){
	SoundHover.play();	
	beepThree.pause();
});

$("#nav-three").mouseleave(function(){
	SoundHover.pause();	
	beepThree.play();
});