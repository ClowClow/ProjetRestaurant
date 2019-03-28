<!DOCTYPE html>

<head>
  <title>Contact</title>
  <meta charset="utf8"/>
  <link href="styles/contact.css" type="text/css"
  rel="stylesheet">
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
