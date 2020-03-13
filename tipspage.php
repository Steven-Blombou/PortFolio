<?php
                // ("mysql:host=127.0.0.1;dbname=tips;charset=utf8", "root", "");
                // mysql:host=db5000303628.hosting-data.io;dbname=dbs296615', 'dbu526524', 'jXd)G9)8
try {
    $conn = new PDO('mysql:host=db5000303628.hosting-data.io;dbname=dbs296615', 'dbu526524', 'jXd)G9)8' );

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    // $sql =  'SELECT * FROM tips';
    // foreach  ($conn->query($sql) as $row) {
        // print $row['tips_titre'] . "\t";
        // print  $row['tips_techno'] . "\t";
        // print  $row['tips_contenu'] . "\t";
        // print $row[''] . "\n";
    // }
    if(isset($_GET['id']) AND !empty($_GET['id'])) {
       $get_id = htmlspecialchars($_GET['id']);
       $tips = $conn->prepare('SELECT * FROM tips WHERE id = ?');
       $tips->execute(array($get_id));
       if($tips->rowCount() == 1) {
          $tips = $tips->fetch();
          $tips_titre = $tips['tips_titre'];
          $tips_type_techno = $tips['tips_type_techno'];
          $tips_contenu = $tips['tips_contenu'];
       } else {
          die('Ce tips n\'existe pas !');
       }
    } else {
       die('Erreur');
    }


?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tips</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tips.css">
</head>
<body>
  <ul>
       <?php while($a = $tips->fetch()) { ?>
       <li><a href="tips.php?id=<?= $a['id'] ?>"><?= $a['tips_titre'] ?></a></li>
       <?php } ?>
    <ul>
  <!-- <div class="fade-in"> -->
    <div class="website">
      <section class="tips">
        <div class="container">
          <h2>Tips</h2>
          <hr>
          <div class="row">
            <!-- <div class="col-12 col-xl-6">
              <article>
                <div class="period"></div>
                <h3></h3>
                <h4></h4>
                <p></p>
              </article>
            </div> -->
          </div>

        </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="js/stevenblombou.js"></script>
</body>
</html>
