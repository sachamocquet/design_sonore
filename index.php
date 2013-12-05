<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DESIGN SONORE</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/normalize.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/functions.js" type="text/javascript"></script>
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        </head>

        <body>
        
        <div id="mobile-devices-support"></div>
        
        
                <!-- *********************** -->
                <!-- ***********HEADER ETAPES************ -->
                
               <header>

                        <form id="temps-chrono" name="timeform">
                       		 Temps écoulé : <input type=text name="timetextarea" value="00:00" size="10" disabled="" />
                        </form>
                                
                        <span id="currentscore">Score : <input type=text name="currentscore" class="monScore" value="0" size="10" disabled="" /></span>
                        
                        <button class="bt-recommencer" onclick="javascript:window.location.reload(true)">Recommencer</button>
                        
                        <button class="bt-share-facebook">Partager</button>
                                
               </header>        
                                                
                <!-- *********************** -->
                <!-- ***********POP-UP EXPLICATIF************ -->
                
                <button class="md-trigger" data-modal="modal-16"></button>
                <button class="md-trigger md-setperspective" data-modal="modal-17"></button>        
                <button class="md-trigger md-setperspective" data-modal="modal-17"></button>                


                <div class="md-modal md-effect-16 md-show" id="modal-16">
                        <div class="md-content">
                                <h3>Le super titre du jeu</h3>
                                <div>
                                
                                <p>Comment jouer ?</p>
                                        <ul>
                                                <li><strong>Regle 1 :</strong> Activez le son de votre ordinateur.</li>
                                                <li><strong>Regle 2 :</strong> Dirigez votre curseur dans la foule pour trouver l'objet.</li>
                                                <li><strong>Regle 3 :</strong> Utilisez le son pour vous repérer dans la scène.</li>
                                                <li><strong>Regle 4 :</strong> Cliquez sur l'objet recherché pour terminer le niveau.</li>
                                        </ul>
                                        
                                <p class="note-nb">Si vous n'entendez aucun son, nous vous proposons des navigateurs qui supportes la compatibilité avec ce jeu : <br /> 
                                <a href="http://google.com/chrome" target="_blank">Chrome</a>, 
                                <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>, 
                                <a href="http://www.opera.com/" target="_blank">Opera</a>, and <a href="http://www.apple.com/au/safari/" target="_blank">Safari</a>.
                                </p>
                                                                                                              
                                        <div id="compteRebour_affiche"></div>
                                        <script type="text/javascript">rebour(1);</script>

                                        <button class="md-close md-close-one" id="start-niveau-un" onclick="StartChrono();">Commencer</button>
                                </div>
                        </div>
                </div>
                
                <!-- Afficher les félicitations du niveau 1 pour aller au niveau 2 -->
                
                <div class="md-modal md-effect-17 fin-niveau-un" id="modal-17">
                        <div class="md-content">
                                <h3>Bravo !</h3>
                                <div>
                                        <p>Tu as terminé avec succès le niveau 1.</p>
                                        
                                        <p id="show-message-score-tres-bon-niv-un">Tu as mis <strong>moins de 5 secondes</strong> pour y parvenir, tu as maintenant 1000 points !</p>
                                        
                                        <p id="show-message-score-bon-niv-un">Tu as mis <strong>moins de 10 secondes</strong> pour y parvenir, tu as maintenant 500 points !</p>
                                        
                                        <p id="show-message-score-mauvais-niv-un">Tu as mis <strong>plus de 10 secondes</strong> pour y parvenir, tu n'as pas marqué de points !</p>
                                        
                                        <button class="md-close goToNiveauDeux" onclick="AllerNiveauDeux(); StartChrono();">Niveau suivant</button>
                                </div>
                        </div>
                </div>          
                
                <!-- Afficher les félicitations du niveau 2 pour aller au niveau 3 -->

                <div class="md-modal md-effect-17 fin-niveau-deux" id="modal-17">
                        <div class="md-content">
                                <h3>Bravo !</h3>
                                <div>
                                        <p>Tu as terminé avec succès le niveau 2.</p>
                                        
                                        <p id="show-message-score-tres-bon-niv-deux">Tu as mis <strong>moins de 5 secondes</strong> pour y parvenir, tu as gagné 1000 points !</p>
                                        
                                        <p id="show-message-score-bon-niv-deux">Tu as mis <strong>moins de 10 secondes</strong> pour y parvenir, tu as gagné 500 points !</p>
                                        
                                        <p id="show-message-score-mauvais-niv-deux">Tu as mis <strong>plus de 10 secondes</strong> pour y parvenir, tu n'as pas marqué de points !</p>
                                        
                                        <button class="md-close goToNiveauTrois" onclick="AllerNiveauTrois(); StartChrono();">Niveau suivant</button>
                                </div>
                        </div>
                </div>
                
                <!-- Afficher les félicitations du niveau 3 pour aller au classement -->

                <div class="md-modal md-effect-17 fin-niveau-trois" id="modal-17">
                        <div class="md-content">
                                <h3>Bravo !</h3>
                                <div>
                                        <p>Tu as terminé le jeu avec succès.</p>
                                        
                                        <p id="show-message-score-tres-bon-niv-trois">Tu as mis <strong>moins de 5 secondes</strong> pour y parvenir, tu as gagné 1000 points !</p>
                                        
                                        <p id="show-message-score-bon-niv-trois">Tu as mis <strong>moins de 10 secondes</strong> pour y parvenir, tu as gagné 500 points !</p>
                                        
                                        <p id="show-message-score-mauvais-niv-trois">Tu as mis <strong>plus de 10 secondes</strong> pour y parvenir, tu n'as pas marqué de points !</p>
                                        
                                        <p id="total-points-final">Tu as cumulé un total de <input type=text name="currentscore" id="input-points-final" class="monScore" value="0" size="10" disabled="" style="border:none; background:none; color:#000; font-size:25px; width:60px;" /> points ! </p>
                                        
                                        <button class="bt-share-facebook-final">Partager</button>
                                        
                                        <button class="bt-recommencer-fin" onclick="javascript:window.location.reload(true)">Recommencer</button>
                                </div>
                        </div>
                </div>         
                
                
                <!-- *********************** -->
                <!-- ***********SON AU SURVOL ************ -->     
                
                <audio id="sound-hover-mouse" loop>
                        <source src="audio/sound-hover-mouse.ogg" type="audio/ogg">
                        <source src="audio/sound-hover-mouse.mp3" type="audio/mpeg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                </audio>                  
                          
                        
                <!-- *********************** -->
                <!-- ***********NIVEAU UN ************ -->
                <div id="niveau-un" onmousemove="setVolumeSonDistance(event,'nav-one','beep-one')">

                <div class="main">
                
                <audio id="play-sound-one-crowd" loop>
                        <source src="audio/crowd-lev-1.ogg" type="audio/ogg">
                        <source src="audio/crowd-lev-1.mp3" type="audio/mpeg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                </audio>
                
                        <div class="nav PlayBeepOne">
                                <span id="nav-one" href="#" onclick="AfficheFinNiveauUn(); StopChrono(); CalculScoreNivUn();"></span>
                                <audio id="beep-one" loop>
                                        <source src="audio/beep-lev-1.mp3" type="audio/mpeg">
                                        <source src="audio/beep-lev-1.ogg" type="audio/ogg">
                                Votre navigateur ne supporte pas ce format de lecteur audio.
                                </audio>
                        </div>
                
                </div><!-- fin #main -->
                
                <!-- POP-UP FIN DE NIVEAU 1 -->
                
                </div> <!-- fin #niveau-un -->                      
                
                
                <!-- *********************** -->
                <!-- ***********NIVEAU DEUX ************ -->
                <div id="niveau-deux" onmousemove="setVolumeSonDistance(event,'nav-two','beep-two')">

                <div class="main">
                
                <audio id="play-sound-two-crowd" loop>
                        <source src="audio/crowd-lev-2.ogg" type="audio/ogg">
                        <source src="audio/crowd-lev-2.mp3" type="audio/mpeg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                </audio>
                
                        <div class="nav-two PlayBeepTwo">
                         <span id="nav-two" href="#" onclick="AfficheFinNiveauDeux(); StopChrono(); CalculScoreNivDeux();"></span>
                         <audio id="beep-two" loop>
                                <source src="audio/beep-lev-2.mp3" type="audio/mpeg">
                                <source src="audio/beep-lev-2.ogg" type="audio/ogg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                        </audio>

                </div>
                
                </div> <!-- fin #main -->
                
                <!-- POP-UP FIN DE NIVEAU 2 -->
                
                </div> <!-- fin #niveau-deux -->
              
                
                <!-- *********************** -->
                <!-- ***********NIVEAU TROIS ************ -->
                <div id="niveau-trois" onmousemove="setVolumeSonDistance(event,'nav-three','beep-three')">

                <div class="main">
                
                <audio id="play-sound-three-crowd" loop>
                        <source src="audio/crowd-lev-3.ogg" type="audio/ogg">
                        <source src="audio/crowd-lev-3.mp3" type="audio/mpeg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                </audio>
                
                        <div class="nav-three PlayBeepThree">
                         <span id="nav-three" href="#" onclick="AfficheFinNiveauTrois(); StopChrono(); CalculScoreNivTrois();"></span>
                         <audio id="beep-three" loop>
                                <source src="audio/beep-lev-3.mp3" type="audio/mpeg">
                                <source src="audio/beep-lev-3.ogg" type="audio/ogg">
                        Votre navigateur ne supporte pas ce format de lecteur audio.
                        </audio>

                </div>
                
                </div> <!-- fin #main -->
                
                <!-- POP-UP FIN DE NIVEAU 3 -->
                
                </div> <!-- fin #niveau-trois -->
                        

                <div class="md-overlay"></div> <!-- the overlay element -->

                <script src="js/classie.js" type="text/javascript"></script>
                <script src="js/modalEffects.js" type="text/javascript"></script>

                <script type="text/javascript">
                        var polyfilter_scriptpath = '/js/';
                </script>
                
                <script src="js/functions-sound.js" type="text/javascript"></script>

</body>
</html>