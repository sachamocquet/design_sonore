// *****************
// NIVEAU 1

// Emettre le son de la roule apr�s avoir cliqu� "Commencer!"
var CrowdSoundOne = $("#play-sound-one-crowd")[0];
$(".md-close").click(function(){
			CrowdSoundOne.play();
});
	
// *****************	
// Emettre le son "BEEP" au survol
var beepOne = $("#beep-one")[0];
$(".PlayBeepOne").mouseenter(function(){
			beepOne.play();
});
	
// ******************
// Arr�ter le son du Crowd au survol de l'�l�ment
var CrowdSoundOne = $("#play-sound-one-crowd")[0];
function StopCrowd(){
$('.PlayBeepOne').mouseenter(function() {
		CrowdSoundOne.pause();
});
}







// *****************
// NIVEAU 2

// Emettre le son de la roule apr�s avoir cliqu� "Commencer!"
var CrowdSoundTwo = $("#play-sound-two-crowd")[0];
$(".goToNiveauDeux").click(function(){
		    CrowdSoundOne.pause();
			CrowdSoundTwo.play();
});
	
// *****************	
// Emettre le son "BEEP" au survol
var beepTwo = $("#beep-two")[0];
$(".PlayBeepTwo").mouseenter(function(){
			beepTwo.play();
});
	
// ******************
// Arr�ter le son du Crowd au survol de l'�l�ment
var CrowdSoundTwo = $("#play-sound-two-crowd")[0];
function StopCrowd(){
$('.PlayBeepTwo').mouseenter(function() {
		CrowdSoundTwo.pause();
});
}