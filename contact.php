<!DOCTYPE html>

<head>
  <title>Contact</title>
  <meta charset="utf8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="styles/reset.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    <form action="/index.php" method="POST">
       <div class="form-group" align="center">
        <h1>Nous contacter<h1>
        <input type="text" class="form-control" name="name" value="NOM et prénom" class="name"><br/>
        <input type="email" class="form-control" name="mail" value="Adresse email"><br/>
        <input type="text" class="form-control" name="objet" value="Objet de votre demande" class="object"><br/>
        <textarea id="demande" class="form-control" name="votre demande" rows="auto" cols="67%">
        </textarea><br/>
    </div>
      <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
  </div>
</body>
<footer>
  <?php include 'footer.php'; ?>
</footer>
</html>
