<!DOCTYPE html>

<head>
  <title>Contact</title>
  <meta charset="utf8"/>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
  <link href="styles/reset.css" type="text/css" rel="stylesheet">
  <link href="styles/bootstrap/dist/css/bootstrap.css" type="text/css" rel="stylesheet">
  <link href="styles/contact.css" type="text/css" rel="stylesheet">
</head>
<html>
<body>
  <div class="header">
    <?php include 'header.php'; ?>
  </div>
  <div class="imgb">
  <div class="mapframe">
  <div class="map">
    <img src="images/carte.png" alt="carte de nos restaurants" class="map"/>
    <div id="lille" class="cercle">
    Lille<br/>rue Masséna</br>Ouvert exclusivement de nuit !!
    </div>
    <div id="nantes" class="cercle">Nantes</div>
    <div id="paris" class="cercle">Paris</div>
    <div id="charleville" class="cercle">Charleville</div>
    <div id="lyon" class="cercle">Lyon</div>
    <div id="marseille" class="cercle">Marseille</div>
  </div>
  </div>
  <div class="form">
    <form action="/index.php" method="POST">
        <h1>Nous contacter<h1>
        <input type="text" name="name" value="NOM et prénom" class="name"
        size="50%"><br/>
        <input type="text" name="mail" value="Adresse mail" class="mail" size="50%"><br/>
        <input type="text" name="objet" value="Objet de votre demande" class="object"
    size="50%"><br/>
      <textarea id="demande" name="votre demande" rows="auto" cols="67%">
      </textarea><br/>
      <input type="submit" value="Envoyer" class="send"><br/>
  </form>
  </div>
  </div>
</body>
<footer>
  <?php include 'footer.php'; ?>
</footer>
</html>
