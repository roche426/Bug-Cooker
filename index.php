<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bug Cookers</title>
    <style>@import url('https://fonts.googleapis.com/css?family=Dancing+Script');</style>
    <style> @import url('https://fonts.googleapis.com/css?family=Coiny'); </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <?php include("header.php");?>
    </header>

    <br>

    <div class="container">
        <div class="panel panel-default titleSection">
            <div class="panel-body">Bug Cookers : Gastronomie et Insectes dans la même assiette</div>
        </div>
        <br
            <div class="row blocConcept" >
                <div class="col-md-6 col-md-offset-1">
                    <h4> Un festin exotique à base d'insectes</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p><br>
                    <h4> L'art de la cuisine française assiocié aux bienfaits des insectes</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <img class="imgConcept img-responsive" src="Images/sushi_1.jpg" alt="X">
                </div>
            </div>
    </div>

    <br>

    <section class="container "><!-- why eating insects section-->
        <div class="panel panel-default titleSection"><!--carousel slides-->
            <h2 class="panel-body titleSection">Manger des insectes : tous les bienfaits</h2>
        </div>
        <div id="myCarousel" class="carousel slide" data-interval="0">
            <ol class="carousel-indicators color-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner size-carousel">
                <div class="item active content-carousel">
                    <h4 class="header-carousel">Bienfaits pour la santé</h4>
                    <p class="p-carousel">C'est un apport nutritionnel exceptionnel très riche en proteine et pauvre en matière grasse.</p>
                    <img class="img-responsive img-carousel" src="Images/alimentation.jpg" alt="slide alimentation"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Aspect environnemental de l'élevage d'insectes</h4>
                    <p class="p-carousel">Un élevage d’insectes pollue 10 à 100 fois moins qu’un élevage de viande, il est également plus économique en eau.</p>
                    <img class="img-responsive img-carousel" src="Images/impact-envir2.jpg" alt="slide environnement"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Excellent taux de conversion</h4>
                    <p class="p-carousel">La consommation d'insection peut etre une solution pour nourrir 9 milliards d’individus d’ici 2050, en effet le taux de conversion de la production d'insectes est excellente.</p>
                    <img class="img-responsive img-carousel" src="Images/taux-conver2.jpg" alt="slide conversion"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

      <div class="container img-responsive-mobile"><!--Mobile slide-->
          <div>
              <h2 class="header-carousel">Bienfaits pour la santé</h2>
              <p class="p-carousel">C'est un apport nutritionnel exceptionnel très riche en proteine et pauvre en matière grasse.</p>
              <img class="imgPhotoInsectes img-responsive" src="Images/alimentation.jpg" alt="alimentation">
          </div>
          <div>
              <h2 class="header-carousel">Aspect environnemental de l'élevage d'insectes</h2>
              <p class="p-carousel">Un élevage d’insectes pollue 10 à 100 fois moins qu’un élevage de viande, il est également plus économique en eau.</p>
              <img class="imgPhotoInsectes img-responsive" src="Images/impact-envir2.jpg" alt="...">
          </div>
          <div>
              <h2 class="header-carousel">Excellent taux de conversion</h2>
              <p class="p-carousel">La consommation d'insection peut etre une solution pour nourrir 9 milliards d’individus d’ici 2050, en effet le taux de conversion de la production d'insectes est excellente.</p>
              <img class="imgPhotoInsectes img-responsive" src="Images/taux-conver2.jpg" alt="...">
          </div>
          <div id="more-info-div">
              <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
          </div>
      </div>
  </section>

    <br>

    <div class="container">
            <h2 class="text-center titre-section">En savoir plus sur nous</h2>
        <br>
        <div class="row blocFondateur">
            <div class="col-md-2  portraitFounder1">
                <img class="imgFondateur" src="Images/jo_Portrait.jpg" width="150px" alt="...">
                <h4>Jonathan PLANTEY</h4>
            </div>
            <div class="col-md-8 describFondateur1">
                <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
        <br><hr class="founderSepation"><br>
        <div class="row">
            <div class="col-md-2 portraitFondateur2">
                <img class="imgFondateur" src="Images/laurent-Portrait.jpg" width="150px" alt="...">
                <h4>Laurent AUBERTIN</h4>
            </div>
            <div class="col-md-8 describFondateur2">
                <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <a href="LIEN.MENU.A.METTRE"
                    <button type="button" class="btn btn-primary btn-block boutonCarte">Decouvrez Notre Carte </button>
                </a>
            </div>
        </div>
    </div>
    <br>

    <footer class="banniere_top">
        <?php include("footer.php");?>
    </footer>

</html>
