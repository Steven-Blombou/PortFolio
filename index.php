<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>STEVEN Blombou</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tips.css">
  <link rel="stylesheet" href="css/style_buttonheadpage.css">
</head>
<body>

  <div class="fade-in">
    <div class="website">
      <!-- header -->
      <?php include ("header.php");?>
      <!-- A propos -->
      <?php include ("about.php") ?>
      <!-- Mes Compétences -->
      <?php include ("skill.php") ?>
      <!-- Mes expériences professionnelles -->

      <!-- Mes Tips -->
      <?php include ("tips.php") ?>
      <!-- Mes réalisations -->
      <?php include ("work.php") ?>
      <!-- Contact -->
      <?php include ("contact.php") ?>
      <!-- Footer -->
      <?php include ("footer.php") ?>

    </div>

    <div id="scroll_to_top">
    <div class="test"></div>
         <a href="#top"><img src="img/site/scrolltop.png" alt="scrolltop"/></a>
   </div>


  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/stevenblombou.js"></script>
</body>
</html>
