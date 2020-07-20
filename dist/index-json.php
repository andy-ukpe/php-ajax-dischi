
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

        <?php include __DIR__ . "/partials/_header.php"; ?>

        <div class="cds-container container">

        </div>

        <!-- inizio template -->
        <script id="entry-template" type="text/x-handlebars-template">
          <div class="entry">

          <div class="cd">
              <img src="{{poster}}" alt="poster-img">
              <h3>{{title}}</h3>
              <span class="author">{{author}}</span>
              <span class="year">{{year}}</span>
          </div>
        </div>
      </script>

      <script type="text/javascript" src="app.js"></script>
    </body>
</html>
