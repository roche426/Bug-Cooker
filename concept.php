<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bug Cookers Concept</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body class="bodyConcept">
     <header>
         <?php include("header.php");?>
     </header>

    <div class="container">
      <div class="panel panel-default arrierePlanTitre">
        <div class="panel-body titre-section">Notre Concept</div>
      </div>
        <div class="row blocConcept">
            <div class="col-md-6 col-md-offset-1">
              <h5> Sous partie 1</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
              <h5> Sous partie 1</h5>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
            </div>
            <div class="col-md-4 col-xs-12">
              <img class="imgConcept" src="http://via.placeholder.com/300x150" alt="X">
            </div>
        </div>
    </div>

<br>

    <div class="container">
      <div class="panel panel-default arrierePlanTitre">
        <div class="panel-body titre-section">Les Fondateurs</div>
      </div>
      <div class="row blocFondateur">
        <div class="col-md-2 col-md-offset-1 fondateur01">
          <img class="imgFondateur" src="http://via.placeholder.com/150x100" alt="...">
          <h4>Nom Prénom</h4>
        </div>
        <div class="col-md-8 col-md-8 describFondateur">
          <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
      <br>
      <div class="col-md-2 col-md-offset-1 col-md-push-8 fondateur02">
        <img class="imgFondateur" src="http://via.placeholder.com/150x100" alt="...">
        <h4>Nom Prénom</h4>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-pull-2 describFondateur">
          <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>

      </div>
    </div>

<br>

    <div class="container">
      <div class="panel panel-default arrierePlanTitre">
        <div class="panel-body titre-section">Pourquoi les insectes ?</div>
      </div>
      <div id="myCarousel" class="carousel slide" data-interval="0">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner carouselTaille">
          <div class="item active imgCarousel1">
            <h2 class="titreArticle">Cras sit amet nibh libero</h2>
            <p class="textArticle">Cras sit amet nibh libero ras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibu</p>
          </div>

          <div class="item imgCarousel2">
            <h2 class="titreArticle">Cras sit amet nibh libero</h2>
            <p class="textArticle">Cras sit amet nibh libero ras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibu</p>
          </div>

          <div class="item imgCarousel3">
            <h2 class="titreArticle">Cras sit amet nibh libero</h2>
            <p class="textArticle">Cras sit amet nibh libero ras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibu</p>
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
          <img class="imgPhotoInsectes" src="http://via.placeholder.com/300x150" alt="..."><br>
          <img class="imgPhotoInsectes" src="http://via.placeholder.com/300x150" alt="..."><br>
          <img class="imgPhotoInsectes" src="http://via.placeholder.com/300x150" alt="...">
      </div>

    </div>

  <br>

  <div class="container">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <a href="LIEN.MENU.A.METTRE"
          <button type="button" class="btn btn-primary btn-block boutonCarte">Decouvrez Notre Carte</button>
        </a>
      </div>
    </div>
  </div>

  <footer>
      <?php include("footer.php");?>
  </footer>

  </body>
</html>
