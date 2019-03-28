<!DOCTYPE html>

<head>
  <title>Accueil</title>
  <meta charset="utf8"/>
  <link href="styles/reset.css" type="text/css" rel="stylesheet">
  <link href="styles/index.css" type="text/css" rel="stylesheet">
</head>
<html>
<body>
  <div class="header">
  <?php include 'header.php'; ?>
  </div>

  <!-- Slideshow container -->
  <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <img class="imgfoods" src="images/lille.jpg" style="width:100%">
      <div class="text">Simplon Lille</div>
    </div>

    <div class="mySlides fade">
      <img class="imgfoods" src="images/nantes.jpeg" style="width:100%">
      <div class="text">Simplon Nantes</div>
    </div>

    <div class="mySlides fade">
      <img class="imgfoods" src="images/paris.jpg" style="width:100%">
      <div class="text">Simplon Paris</div>
    </div>

    <div class="mySlides fade">
      <img class="imgfoods" src="images/charleville.jpeg" style="width:100%">
      <div class="text">Simplon Charleville-Mézières</div>
    </div>

    <div class="mySlides fade">
      <img class="imgfoods" src="images/lyon.jpg" style="width:100%">
      <div class="text">Simplon Lyon</div>
    </div>

    <div class="mySlides fade">
      <img class="imgfoods" src="images/marseille.jpg" style="width:100%">
      <div class="text">Simplon Marseille</div>
    </div>

    <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
  </div>



  <script type="text/javascript">

  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }

  </script>

  <br><br><br>

  <div class="desc_simplon">

      <img src="images/simplon.png" alt="logo resto" height="400px" />

      <p class="txt_simplon">Entreprise de l’économie sociale et solidaire (agrément ESUS), Simplon.co est un réseau de « fabriques » (écoles) qui propose des formations gratuites pour les apprenant.e.s et intensives pour devenir développeur.se de sites web et d’applications mobiles, intégrateur.trice, référent numérique, datartisan, e-commerçant...
      </p>

    <div class="benoit">
      <img class="bg" src="images/benoit.jpeg" alt="benoit bg" height="200px"/>
      <p>Ici présent un ferveur mangeur de restaurant Simplon ! :)<br>
      Appelez le 'le beau gosse' !</p>
    </div>
  </div>

  <br><br><br>

  <div class="basdepage">

    <div>
    <p class="txt_restaurant">Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.<br><br>
  Cognitis enim pilatorum caesorumque funeribus nemo deinde ad has stationes appulit navem, sed ut Scironis praerupta letalia declinantes litoribus Cypriis contigui navigabant, quae Isauriae scopulis sunt controversa.<br><br>
  Homines enim eruditos et sobrios ut infaustos et inutiles vitant, eo quoque accedente quod et nomenclatores adsueti haec et talia venditare, mercede accepta lucris quosdam et prandiis inserunt subditicios ignobiles et obscuros.<br><br>
  Touts nos restaurants ont une spécialité, pour en savoir plus <a href="resto.php">Cliquez ici</a>.</p>
    </div>
      <div class="img_restaurant">
  <img src="images/resto1.jpg" alt="resto1" height="300px" />
  <img src="images/resto2.jpg" alt="resto2" height="300px" width="400px"/>
      <div class="img_restaurant_b">
  <img src="images/resto3.jpg" alt="resto3" height="300px" width="400px"/>
  <img src="images/resto4.jpg" alt="resto4" height="300px" width="520px"/>
      </div>
      </div>
  </div>

<div class="footer">
  <?php include 'footer.php'; ?>
</div>
</body>
</html>
