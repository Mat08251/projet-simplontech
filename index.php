<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/footer.css">
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

        <!-- LOAD JQUERY LIBRARY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
        
        <!-- REVOLUTION JS FILES -->
		<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php include("navbar.php"); ?>

        <!--slide-->
        <div class="rev_slider_wrapper">
 
            <!-- the ID here will be used in the JavaScript below to initialize the slider -->
            <div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">
 
                <!-- BEGIN SLIDES LIST -->
                <ul>
 
                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">
 
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image5.jpg" alt="Sky" class="rev-slidebg">
 
                    </li>
 
                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">
 
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image2.jpg" alt="Ocean" class="rev-slidebg">
 
                    </li>

                    <!-- MINIMUM SLIDE STRUCTURE -->
                    <li data-transition="fade">
 
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="images/image6.jpg" alt="Ocean" class="rev-slidebg">
 
                    </li>
 
                </ul><!-- END SLIDES LIST -->
 
            </div><!-- END SLIDER CONTAINER -->
 
        </div>
        <div class="présentation">
          <p><h2>Bienvenue sur Simpl<span class="couleur-lettre">o</span>n.Te<span class="couleur-lettre">c</span>h</h2></br>
                 Ici vous trouverez tous se que vous recherchez.</br>
                 Que se soit du matériel neuf au composant indispensable</br>
                 pour votre machine, vous ne serez pas ou donnez de la tête
          </p>
        </div>
        <div class="info">
          <div class="titre-info">
           <h3>Simplon.Tech est spécialisé dans la vente et le montage de pc.</h3>
          </div>
              <div class="bulle-info">
                 <img class="image-info" src="images/cartevitr.jpg" alt="photo-info">
                   <div class="bulle-texte">
                      <p>Chosir un PC venddu et ou monté par Simplon.Tech c'est la garantie d'une</br>
                         main d'oeuvre de qualité ainsi que du matériel avec une longue durée de vie.
                      </p>
                      <p>Chez Simplon.Tech nous écoutons les recommendations du client, et lui</br>
                         offront plusieurs choix afin de convenir au mieux à son besoin.</br>
                         Choisir un PC chez nous, c'est la garantie d'un choix intelligent de composants</br>
                         sélectionnés parmi les plus grandes marques pour leur excellent rapport</br>
                         performances/prix.
                      </p>
                  </div>
              </div>
            <p class="fin-info">Chaque PC chez Simplon.Tech est assemblé en Fance par une équipe de monteurs qualifiés, puis testé avant d'être emballer pour l'envoie au client.</br>
                L'emballage chez Simplon.Tech est important, car nous veillont à la bonne protection du matériel pour qu'il arrive sans accros au lieu de</br>
                destinations.
            </p>
        </div>
        <?php include("footer.php"); ?>

        <!-- Slider's main "init" script -->
        <script type="text/javascript">
 
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function() {
 
                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#rev_slider_1').show().revolution({
 
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'auto',
 
                    /* basic navigation arrows and bullets */
                    navigation: {
 
                        arrows: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false
                        },
 
                        bullets: {
                            enable: true,
                            style: "hesperiden",
                            hide_onleave: false,
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5
 
                        }
                    }
                });
            });
 
        </script>
 
        <!-- ***************** -->
        <!-- END SLIDER MARKUP -->
        <!-- ***************** -->
    </body>
</html>