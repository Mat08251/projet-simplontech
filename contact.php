<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/contact.css">
        <script src="https://kit.fontawesome.com/7d77d119e1.js" crossorigin="anonymous"></script>
    </head>
    <body>
       <!--navbar-->
        <?php include("navbar.php"); ?>

        <section><!--info contact-->
           <div class="texte-contact">
              <p>Une question sur un produit</br>
                 ou une gamme en particulier?</br>
                 N'hésitez pas à nous contacter via les</br>
                 information ci-dessous ou bien via</br>
                 le formulaire de contacte ci-dessous.
              </p>
           </div>
           <div class="info-contact">
              <p>Simplon.tech</p>
              <p>23 route du général</p>
              <p>03.24.42.86.94</p>
              <p>simplon-tech@.fr</p>
           </div>
        </section><!--fin info contacte-->
        <div class="formulaire"><!--formulaire-->
        <h2 class="titre-formulaire">Formulaire de contact</h2>
         <form action="" method="" class="formu">
            <div>
               <input type="text" id="name" name="user-name" placeholder="Nom">
               <input type="text" id="lastname" name="user-lastname" placeholder="Prenom">
            </div>
            <div>
               <input type="email" id="email" name="user-email" placeholder="Email">
            </div>
            <div>
               <textarea id="msg" name="user-message" rows="10" cols="80"></textarea>
            </div>
            <div>
               <button class="btn-envoyer" type="submit">Envoyer</button>
            </div>
         </form>
         </div><!--fin du formulaire-->
        
        <!--google map-->
        <h2 class="titre-carte">Ou nous trouver</h2>

        <!--iframe-->
        <div class="carte-google">
            <iframe src="https://www.google.com/maps/d/embed?mid=1dnM3s_QbcFHNeq6fy19mKW-Ji56bnW1q" width="640" height="480"></iframe>
        </div>
        <!--footer-->
        <?php include("footer.php"); ?>
      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="contact.js"></script>
    </body>
</html>