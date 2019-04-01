<!DOCTYPE html>

<head>
  <title>Accueil</title>
  <meta charset="utf8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="styles/reset.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="styles/index.css" type="text/css" rel="stylesheet">
</head>
<html>
<body>
  <div class="header" class=".navbar">
  <?php include 'header.php'; ?>
  </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/lille.jpg" alt="First slide" height="800px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/nantes.jpeg" alt="Second slide" height="800px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/paris.jpg" alt="Third slide" height="800px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/charleville.jpeg" alt="Fourth slide" height="800px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/lyon.jpg" alt="Fifth slide" height="800px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/marseille.jpg" alt="Sixth slide" height="800px">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

<br><br><br>

<div class="row mx-auto">
  <div class="col-md-4">

    <img class="simplon_restauration" src="images/simplon.png" alt="logo resto" width="100%" />
  </div>

  <div class="col-md-4">
    <p class="txt_simplon">Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant...
    </p>
  </div>

  <div class="col-md-4">
    <div class="benoit">
        <img class="bg" src="images/benoit.jpeg" alt="benoit bg" height="200px"/>
        <p>Ici présent un ferveur mangeur de restaurant Simplon ! :)<br>
        Appelez le 'le beau gosse' !</p>
    </div>
  </div>

</div>


    <br><br><br>

    <div class="basdepage">

      <br><br><br>
      <div class="row mx-auto">
        <div class="col-md-4">

      <p class="txt_restaurant">Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.<br><br>
Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.<br><br>
Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.<br><br>
Touts nos restaurants ont une spécialité, pour en savoir plus <a href="resto.php">Cliquez ici</a>.</p>
        </div>

        <div class="col-md-8">

          <div class="img_restaurant">
            <img src="images/resto1.jpg" alt="resto1" width="550px" height="350px"/>
            <img src="images/resto2.jpg" alt="resto2" width="550px" height="350px"/>
            <img src="images/resto3.jpg" alt="resto3" width="550px" height="350px"/>
            <img src="images/resto4.jpg" alt="resto4" width="550px" height="350px"/>
          </div>
        </div>
      </div>
    </div>

<div class="footer">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>
