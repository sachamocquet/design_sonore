// *****************
function getPosEl(el) {
    var lx = el.offsetLeft; 
	var ly = el.offsetTop;
	console.log('el : x='+lx+' y='+ly);
    return {x: lx,y: ly};
}

function getPosMouse(event){
	//merci à http://b2moo.free.fr/tutorials/mouse/coord.htm
	event = event || window.event;
	var x = event.clientX;
	var y = event.clientY;
	console.log('souris : x='+x+' y='+y);
	return {x: x,y: y};
}

function setVolumeSonDistance(event, eId, sId){

	var el = document.getElementById(eId);
	var pS = getPosMouse(event);
	var pE = getPosEl(el);
	
	//merci à http://snipplr.com/view/47207/
	var xs = 0;
	var ys = 0; 
	xs = pS.x - pE.x;
	xs = xs * xs;
	ys = pS.y - pE.y;
	ys = ys * ys;
	d = Math.sqrt( xs + ys );
	
	var vSon = ((1000-d)/1000*100)*0.01;
	console.log("distance de "+eId+" avec la souris = "+d+" vSon="+vSon);
	
	myVid=document.getElementById(sId);
	myVid.volume=vSon;
	
    return d;

}

// NIVEAU 2

// Supprimer la page #niveau-un et afficher #niveau-deux
function AllerNiveauDeux() {
document.getElementById("niveau-un").style.display ="none";   
document.getElementById("niveau-deux").style.display = "block";
}

// *****************
// NIVEAU 3

// Supprimer la page #niveau-un et afficher #niveau-deux
function AllerNiveauTrois() {
document.getElementById("niveau-un").style.display ="none"; 
document.getElementById("niveau-deux").style.display ="none";     
document.getElementById("niveau-trois").style.display = "block";
}

//*****************
// Initialisation du chronomètre
var timercount = 0;
var timestart  = null;
 
function showtimer() {
    if(timercount) {
        clearTimeout(timercount);
        clockID = 0;
    }
    if(!timestart){
        timestart = new Date();
    }
    var timeend = new Date();
    var timedifference = timeend.getTime() - timestart.getTime();
    timeend.setTime(timedifference);
    var minutes_passed = timeend.getMinutes();
    if(minutes_passed < 10){
        minutes_passed = "0" + minutes_passed;
    }
    var seconds_passed = timeend.getSeconds();
    if(seconds_passed < 10){
        seconds_passed = "0" + seconds_passed;
    }
    document.timeform.timetextarea.value = minutes_passed + ":" + seconds_passed;
    timercount = setTimeout("showtimer()", 1000);
}


//*****************
// Lancer le chronomètre
function StartChrono(){
    if(!timercount){
    timestart   = new Date();
    document.timeform.timetextarea.value = "00:00";
    timercount  = setTimeout("showtimer()", 1000);
    }
    else{
    var timeend = new Date();
        var timedifference = timeend.getTime() - timestart.getTime();
        timeend.setTime(timedifference);
        var minutes_passed = timeend.getMinutes();
        if(minutes_passed < 10){
            minutes_passed = "0" + minutes_passed;
        }
        var seconds_passed = timeend.getSeconds();
        if(seconds_passed < 10){
            seconds_passed = "0" + seconds_passed;
        }
        var milliseconds_passed = timeend.getMilliseconds();
        if(milliseconds_passed < 10){
            milliseconds_passed = "00" + milliseconds_passed;
        }
        else if(milliseconds_passed < 100){
            milliseconds_passed = "0" + milliseconds_passed;
        }
    }
}
 
//*****************
// Reset le chronomètre
function Reset() {
    timestart = null;
    document.timeform.timetextarea.value = "00:00";
}

//*****************
// Arrêter le chronomètre
function StopChrono() {
    if(timercount) {
        clearTimeout(timercount);
        timercount  = 0;
        var timeend = new Date();
        var timedifference = timeend.getTime() - timestart.getTime();
        timeend.setTime(timedifference);
        var minutes_passed = timeend.getMinutes();
        if(minutes_passed < 10){
            minutes_passed = "0" + minutes_passed;
        }
        var seconds_passed = timeend.getSeconds();
        if(seconds_passed < 10){
            seconds_passed = "0" + seconds_passed;
        }
        document.timeform.timetextarea.value = minutes_passed + ":" + seconds_passed;
    }
    timestart = null;
}

//******************
// Afficher les règles
function AfficheRegles(){
	$('#modal-16').addClass("md-show");	
}

function RemoveRegles(){
	$('.md-close').click(function() {
	$('#modal-16').removeClass("md-show");		
});
}

// ******************
// Afficher Succès niveau Un
function AfficheFinNiveauUn(){
	$('.fin-niveau-un').addClass("md-show");	
}

// ******************
// Afficher Succès niveau Deux
function AfficheFinNiveauDeux(){
	$('.fin-niveau-deux').addClass("md-show");	
}

// *****************
// Compte à rebour avant niveau
 function rebour(tps)
{
        if (tps>0)
        {
                var heure = Math.floor(tps/3600);
                if(heure >= 24)
                {
                        var jour = Math.floor(heure/24);
                        var moins = 86400*jour;
                        var heure = heure-(24*jour);
                }
                else
                {
                        var jour = 0;
                        var moins = 0;
                }
                moins = moins+3600*heure;
                var minutes = Math.floor((tps-moins)/60);
                moins = moins + 60*minutes;
                var secondes = tps-moins;
                minutes = ((minutes < 10) ? "0" : "") + minutes;
                secondes = ((secondes < 10) ? "0" : "") + secondes;
                document.getElementById("compteRebour_affiche").innerHTML = 'Début de la partie dans : '+secondes;
                var restant = tps-1;
                setTimeout("rebour("+restant+")", 1000);
        }
        else
        {
	            document.getElementById("compteRebour_affiche").style.display ="none";       		
                document.getElementById("start-niveau-un").style.display = 'block';
        }
}