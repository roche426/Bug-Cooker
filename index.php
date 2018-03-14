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
        <div class="text-center">
            <h2>Bug Cookers : Gastronomie et Insectes dans la même assiette</h2>
        </div>
        <br>
            <div class="row blocConcept">
                <div class="col-md-6 col-md-offset-1">
                    <h4> Un festin exotique à base d'insectes</h4>
                    <p>Bug Cookers vous offre des saveurs exotiques unique en France. Nos plats sont inspirés de recettes tradionnelles provenant du monde entier dans lesquelles nous ajoutons le rafinnement de la cuisine française. </p><br>
                    <h4> L'art de la cuisine française assiocié aux bienfaits des insectes</h4>
                    <p>Nos savoureux plats ont une qualité nutritionnelle exceptionnelle. En effet, la valeur nutritive des insectes permet d'avoir une alimentation riche et variée. A déguster sans modération.  </p>
                </div>
                <div class="col-md-4 col-xs-12">
                    <img class="imgConcept img-responsive" src="Images/sushi_1.jpg" alt="X">
                </div>
            </div>
    </div>

    <br>

    <section class="container "><!-- why eating insects section-->
        <div class="text-center"><!--carousel slides-->
            <h2>Manger des insectes : tous les bienfaits</h2>
        </div>
        <div id="myCarousel" class="carousel slide" data-interval="0">
            <ol class="carousel-indicators color-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
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
                <div class="item content-carousel">
                    <h4 class="header-carousel">Des valeurs nutritives uniques </h4>
                    <p class="p-carousel">Les insectes offrent une valeur énergétique exceptionnelle par rapport aux viandes, en plus d'être riche en minéraux.</p>
                    <img class="img-responsive img-carousel" src="Images/valeurNutritive.png" alt="slide conversion"/>
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
            <h2 class="text-center">En savoir plus sur nous</h2>
        <br>
        <div class="row blocFondateur">
            <div class="col-sm-3 portraitFounder1">
                <img class="imgFondateur img-responsive" src="Images/jo_Portrait.jpg" alt="...">
                <h4>Jonathan PLANTEY <br> Co-fondateur</h4>
            </div>
            <div class="col-sm-9 col-md-9 describFounder1">
                <p><em> "La cusine a toujours été pour moi une source d'inspiration. Lors d'un séjour en République d'Ouganda, j'ai découvert des mets succulents à base d'insectes. De retour en France, j'ai décidé de poursuivre cette alimentation, riche en fibre et protéine, et surtout très gourmande. En rencontrant Laurent, nous avons donc décidé d'adapter ces recettes à la cuisine française. "</p>
            </em></div>
        </div>
        <br><hr class="founderSepation"><br>
        <div class="row">
            <div class="col-sm-3 portraitFounder2">
                <img class="imgFondateur" src="Images/laurent-Portrait.jpg" alt="...">
                <h4>Laurent AUBERTIN <br> Co-fondateur</h4>
            </div>
            <div class="col-sm-9 col-md-9 describFounder2">
                <p><em> Ancien chef dans un restaurant gastronomique, j'ai découvert par hasard les plats à base d'insectes lors d'un repas, où par la même occasion, j'ai rencontré Jonathan qui les cuisinait. Ces goûts innovant m'ont donné envie de travailler ce produit afin de le rendre plus populaire. Pour partager ces saveurs, nous avons créé Bug Cookers, "Bug" pour l'étonnement et la joie provoqués chez nos amis après la dégustation de nos plats. </em></p>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
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
