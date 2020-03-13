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


if(isset($_POST["tips_titre"],$_POST["tips_type_techno"], $_POST["tips_contenu"])) {
   if(!empty($_POST["tips_titre"]) AND !empty($_POST["tips_type_techno"]) AND !empty($_POST["tips_contenu"])) {

      $tips_titre = htmlspecialchars($_POST['tips_titre']);
      $tips_techno = htmlspecialchars($_POST['tips_type_techno']);
      $type_contenu = htmlspecialchars($_POST['tips_contenu']);
      $stmt = $conn->prepare("INSERT INTO tips (titre, type_techno, contenu, date_time_publication) VALUES (?, ?, ?, NOW())");
      $stmt->execute(array($tips_titre, $tips_type_techno, $tips_contenu));
      $message = 'Votre article a bien été posté';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
      <input type="text" name="tips_titre" placeholder="Titre" /><br />
      <input type="text" name="tips_type_techno" placeholder="Type Techno" /><br />
      <textarea name="tips_contenu" placeholder="Contenu du tips"></textarea><br />
      <input type="submit" value="Envoyer le tips" />
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>
