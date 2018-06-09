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
    <?php $nav_en_cours = 'index'; ?>
</head>

<body>
    <header>
        <h1 id="#top" class="sr-only">Bug Cookers</h1>
        <?php include("header.php");?>
    </header>

    <br>

    <section class="container">
        <!--<div class="text-center">-->
            <div class="title-div">
                <div class="left-line"></div>
                <h2 class="text-center title-heading">Gastronomie et Insectes dans la même assiette</h2>
                <div class="right-line"></div>
            </div>
            <div class="row concept-block">
                <div class="col-md-7 col-md-offset-1">
                    <h4 class="subtitle-index"> Un festin exotique à base d'insectes<br><span>~</span></h4>
                    <p class="p-index">Bug Cookers vous offre des saveurs exotiques unique en France. Nos plats sont inspirés de recettes tradionnelles provenant du monde entier dans lesquelles nous ajoutons le rafinnement de la cuisine française. </p><br>
                    <br>
                    <h4 class="subtitle-index"> L'art de la cuisine française assiocié aux bienfaits des insectes<br><span>~</span></h4>
                    <p class="p-index">Nos savoureux plats ont mde qualité nutritionnelle exceptionnelle. En effet, la valeur nutritive des insectes permet d'avoir une alimentation riche et variée. A déguster sans modération.  </p>
                </div>
                <div class="col-md-3 col-xs-12">
                    <img class="img-concept" src="Images/img-restaurant.jpg" height="390" alt="X"><br>
                </div>
            </div>
    </section>

    <br>

    <section class="container "><!-- why eating insects section-->
        <!--<div class="text-center">--><!--carousel slides-->
            <div class="title-div">
                <div class="left-line"></div>
                <h2 class="text-center title-heading">Manger des insectes, tous les bienfaits</h2>
                <div class="right-line"></div>
            </div>
        <!--</div>-->
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
                    <p class="p-carousel p-index">C'est un apport nutritionnel exceptionnel très riche en proteine et pauvre en matière grasse.</p>
                    <img class="img-responsive img-carousel" src="Images/alimentation.jpg" alt="slide alimentation"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Aspect environnemental de l'élevage d'insectes</h4>
                    <p class="p-carousel p-index">Un élevage d’insectes pollue 10 à 100 fois moins qu’un élevage de viande, il est également plus économique en eau.</p>
                    <img class="img-responsive img-carousel" src="Images/impact-envir2.jpg" alt="slide environnement"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Excellent taux de conversion</h4>
                    <p class="p-carousel p-index">La consommation d'insection peut etre une solution pour nourrir 9 milliards d’individus d’ici 2050.</p>
                    <img class="img-responsive img-carousel" src="Images/taux-conver2.jpg" alt="slide conversion"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Des valeurs nutritives uniques </h4>
                    <p class="p-carousel p-index">Les insectes offrent une valeur énergétique exceptionnelle par rapport aux viandes, en plus d'être riche en minéraux.</p>
                    <img class="img-responsive img-carousel" src="Images/valeurNutritive.png" width="750" alt="slide conversion"/>
                    <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
                </div>
                <div class="item content-carousel">
                    <h4 class="header-carousel">Et bien sûr, c'est délicieux!</h4>
                    <p class="p-carousel p-index">Les insectes apportent un goût innovant à vos papilles, pour de nouveaux plaisirs.</p>
                    <img class="img-responsive img-carousel" src="Images/delicieux.jpg" width="650" alt="slide conversion"/>
                    <a class="btn more-info-button" href="http://www.insectescomestibles.fr/" role="button" target="_blank">En savoir plus</a>
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
              <h4 class="header-carousel">Bienfaits pour la santé</h4>
              <p class="p-carousel p-index">C'est un apport nutritionnel exceptionnel très riche en proteine et pauvre en matière grasse.</p>
              <img class="img-photo-insects img-responsive" src="Images/alimentation.jpg" width="500" alt="alimentation">
          </div>
          <br>
          <div>
              <h4 class="header-carousel">Aspect environnemental de l'élevage d'insectes</h4>
              <p class="p-carousel p-index">Un élevage d’insectes pollue 10 à 100 fois moins qu’un élevage de viande, il est également plus économique en eau.</p>
              <img class="img-photo-insects img-responsive" src="Images/impact-envir2.jpg" width="500" alt="...">
          </div>
          <br>
          <div>
              <h4 class="header-carousel">Excellent taux de conversion</h4>
              <p class="p-carousel p-index">La consommation d'insectes peut-etre une solution pour nourrir 9 milliards d’individus d’ici 2050.</p>
              <img class="img-photo-insects img-responsive" src="Images/taux-conver2.jpg" width="500" alt="...">
          </div>
          <div id="more-info-div">
              <a class="btn more-info-button" href="http://www.mangeons-des-insectes.com/" role="button" target="_blank">En savoir plus</a>
          </div>
      </div>
    </section>

    <br>

    <section class="container">
        <div class="title-div">
            <div class="left-line"></div>
            <h2 class="text-center title-heading">En savoir plus sur nous</h2>
            <div class="right-line"></div>
        </div>
        <br>
        <div class="row blocFondateur">
            <div class="col-sm-3">
                <img class="img-founder img-responsive" src="Images/jo_Portrait.jpg" alt="...">
                <h4>Jonathan PLANTEY <br> Co-fondateur</h4><br>
            </div>
            <div class="col-sm-9 col-md-9">
                <p class="p-index text-founder">"La cusine a toujours été pour moi une source d'inspiration. Lors d'un séjour en République d'Ouganda, j'ai découvert des mets succulents à base d'insectes. De retour en France, j'ai décidé de poursuivre cette alimentation, riche en fibre et protéine, et surtout très gourmande. En rencontrant Laurent, nous avons donc décidé d'adapter ces recettes à la cuisine française. "</p>
            </div>
        </div>
        <br><hr class="founder-separation"><br>
        <div class="row">
            <div class="col-sm-3 founder-portrait2">
                <img class="img-founder" src="Images/laurent-Portrait.jpg" alt="...">
                <h4>Laurent AUBERTIN <br> Co-fondateur</h4><br>
            </div>
            <div class="col-sm-9 col-md-9">
                <p class="p-index text-founder">"Ancien chef dans un restaurant gastronomique, j'ai découvert par hasard les plats à base d'insectes lors d'un repas préparé par Jonathan. Ces goûts innovants m'ont donné envie de travailler ces produits afin de les rendre plus populaires. La joie provoquée chez nos amis, lors de la dégustation de nos plats, nous a poussé à créer notre premier restaurant Bug Cookers à Lyon afin de partager ces nouvelles saveurs."
            </div>
        </div>
    </section>

    <br>

    <section class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <a href="nosMenus.php#accordion" style="text-decoration:none">
                    <button type="button" class="btn-primary btn-block btn-link-menu">Decouvrez notre carte </button>
                </a>
            </div>
        </div>
        <div id="scrollUp">
            <a href="#top"><img src="Images/to_top.png"/></a>
        </div>
    </section>
    <br>

    <footer class="banniere_top">
        <?php include("footer.php");?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</html>
