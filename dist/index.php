<?php

  include __DIR__ . "/database.php";
  
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>php-ajax-dischi</title>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="app.css">
     </head>
     <body>
         <header>
          <img src="logo.png" alt="logo" />
         </header>

         <div class="cds-container container">
           <!-- Creazione ciclo eachfor per stampare estrapolare le informazioni dal database -->
          <?php  foreach ($database as $array) { ?>

              <!-- inizio template -->
              <div id="cd-template" >
                <!-- Disco estrapolato con il ciclo for -->
                <div class="cd">
                    <img src="<?php echo $array['poster']?>" alt="">
                    <h3> <?php echo $array['title']?> </h3>
                    <span class="author"><?php echo $array['author']?></span>
                    <span class="year"><?php echo $array['year']?></span>
                </div>
              </div>

          <?php } ?>
         </div>

     </body>
 </html>
