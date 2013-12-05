// *****************
// NIVEAU 1
// D�claration des variables
	var CrowdSoundOne = $("#play-sound-one-crowd")[0];
	var beepOne = $("#beep-one")[0];
	
// Emettre le son de la foule et de l'objet � trouver apr�s avoir cliqu� "Commencer !"

	$(".md-close-one").click(function(){
			CrowdSoundOne.play();
			beepOne.play();
		});
	
// ******************
// Arr�ter le son de la foule et du beepOne lorsque l'on a cliqu� sur l'objet
	$(".PlayBeepOne").click(function(){
			CrowdSoundOne.pause();
			beepOne.pause();
		});


// *****************
// NIVEAU 2
// D�claration des variables
	var CrowdSoundTwo = $("#play-sound-two-crowd")[0];
	var beepTwo = $("#beep-two")[0];

// Emettre le son de la roule apr�s avoir cliqu� "Commencer !"
$(".goToNiveauDeux").click(function(){
			CrowdSoundTwo.play();
			beepTwo.play();
});
	
// ******************
// Arr�ter le son de la foule et du beepTwo lorsque l'on a cliqu� sur l'objet
	$(".PlayBeepTwo").click(function(){
			CrowdSoundTwo.pause();
			beepTwo.pause();
		});
		
// *****************
// NIVEAU 3
// D�claration des variables
	var CrowdSoundThree = $("#play-sound-three-crowd")[0];
	var beepThree = $("#beep-three")[0];

// Emettre le son de la roule apr�s avoir cliqu� "Commencer !"
$(".goToNiveauTrois").click(function(){
			CrowdSoundThree.play();
			beepThree.play();
});
	
// ******************
// Arr�ter le son de la foule et du beepThree lorsque l'on a cliqu� sur l'objet
	$(".PlayBeepThree").click(function(){
			CrowdSoundThree.pause();
			beepThree.pause();
		});
		
// *******************
// Son "YES" au survol de l'�l�ment trouv� niveau 1
var SoundHover = $("#sound-hover-mouse")[0];

$("#nav-one").mouseenter(function(){
	SoundHover.play();	
	beepOne.pause();
});

$("#nav-one").mouseleave(function(){
	SoundHover.pause();	
	beepOne.play();
});

// Son "YES" au survol de l'�l�ment trouv� niveau 2
$("#nav-two").mouseenter(function(){
	SoundHover.play();	
	beepTwo.pause();
});

$("#nav-two").mouseleave(function(){
	SoundHover.pause();	
	beepTwo.play();
});

// Son "YES" au survol de l'�l�ment trouv� niveau 3
$("#nav-three").mouseenter(function(){
	SoundHover.play();	
	beepThree.pause();
});

$("#nav-three").mouseleave(function(){
	SoundHover.pause();	
	beepThree.play();
});