<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
     <header>
         <?php include("header.php");?>
     </header>

    <div class="container containerTop">
      <div class="panel panel-default arrierePlanTitre">
        <h2 class="panel-body titreConcept">Notre Concept</h2>
      </div>
        <div class="row blocConcept">
            <div class="col-md-7">
              <h3>Genese du projet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
              <h3>Notre ambition</h3>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. </p>
            </div>
            <div class="col-md-5 col-xs-12">
              <img class="imgConcept img-responsive" src="Images/brochette_1.jpg" alt="X">
            </div>
        </div>
    </div>

    <div class="container">
      <div class="panel panel-default arrierePlanTitre">
        <h2 class="panel-body">Les Fondateurs</h2>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-1 fondateur01">
          <img class="imgFondateur img-responsive" src="Images/jonathan-portrait-R.jpg" alt="photo fondateur">
          <h4>Jonathan Plantey</h4>
        </div>
        <div class="col-md-6 describFondateur">
          <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>

      <div class="row">
          <div class="col-md-2 col-md-push-9 fondateur02">
            <img class="imgFondateur img-responsive" src="Images/laurent-portrait-R.jpg" alt="photo fondateur">
            <h4>Laurent Aubertin</h4>
          </div>

            <div class="col-md-6 col-md-offset-3 col-md-pull-3 describFondateur">
              <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
      </div>
    </div>

    <div class="container">
      <div class="panel panel-default arrierePlanTitre">
        <h2 class="panel-body titreConcept">Pourquoi les insectes ?</h2>
      </div>
      <div id="myCarousel" class="carousel slide" data-interval="0">
        <ol class="carousel-indicators yellowIndicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner carouselTaille">
          <div class="item active contentCarousel">
              <h2 class="titreArticle">Aspect environnemental de l'élevage d'insectes</h2>
              <p class="textArticle">Un élevage d’insectes pollue 10 à 100 fois moins qu’un élevage de viande, il est également plus économique en eau
              </p>
              <img class="img-responsive imgCarousel" src="Images/impact-envir2.jpg" alt="slide environnement"/>
              </div>

          <div class="item contentCarousel">
            <h2 class="titreArticle">Excellent taux de conversion</h2>
            <p class="textArticle">La consommation d'insection peut etre une solution pour nourrir 9 milliards d’individus d’ici 2050, en effet le taux de conversion de la production d'insectes est excellente</p>
            <img class="img-responsive imgCarousel" src="Images/taux-conver2.jpg" alt="slide conversion"/>

          </div>

          <div class="item contentCarousel">
            <h2 class="titreArticle">Cras sit amet nibh libero</h2>
            <p class="textArticle">Cras sit amet nibh libero ras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibu</p>
            <img class="img-responsive imgCarousel" src=""/>

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

      <div class="container imgResponsiveMobile">
          <img class="imgPhotoInsectes img-responsive" src="Images/impact-envir2.jpg" alt="..."><br>
          <img class="imgPhotoInsectes img-responsive" src="Images/taux-conver.jpg" alt="..."><br>
          <img class="imgPhotoInsectes img-responsive" src="Images/taux-conver.jpg" alt="...">
      </div>

    </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <a id="aDecouvrezCarte" href="LIEN.MENU.A.METTRE">Decouvrez Notre Carte </a>
      </div>
    </div>
  </div>

  <footer class="banniere_top">
      <?php include("footer.php");?>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>
