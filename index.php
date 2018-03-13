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
        <div class="panel panel-default arrierePlanTitre">
            <div class="panel-body titreConcept">Bug Cookers : Gastronomie et Insectes dans la même assiette !</div>
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
                    <img class="imgConcept" src="Images/sushi_1.jpg" alt="X">
                </div>
            </div>
    </div>

    <br>

    <div class="container">
        <div class="panel panel-default arrierePlanTitre">
            <div class="panel-body titreConcept">Manger des insectes : tous les bienfaits !</div>
        </div>
            <div id="myCarousel" class="carousel slide" data-interval="0">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active imgCarousel1">
                        <h2 class="titreArticle">Titre 1</h2>
                        <p class="textArticle">En savoir plus >></p>

                    </div>

                    <div class="item imgCarousel2">
                        <img src="Images/tauxDeConversion.jpg" no-repeat;>
                        <h2 class="titreArticle">Titre 2</h2>
                        <p class="textArticle">En savoir plus >></p>
                    </div>

                    <div class="item imgCarousel3">
                        <img src="Images/tauxDeConversion.jpg" no-repeat;>
                        <h2 class="titreArticle">Titre 3</h2>
                        <p class="textArticle">En savoir plus >></p>
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


    </div>

    <br>

    <div class="container">
        <div class="panel panel-default arrierePlanTitre">
            <div class="panel-body titreConcept">En savoir plus sur nous!</div>
        </div>
        <div class="row blocFondateur">
            <div class="col-md-2  fondateur1">
                <img class="imgFondateur" src="Images/jo_Portrait.jpg" width="150px" alt="...">
                <h4>Jonathan PLANTEY</h4>
            </div>
            <div class="col-md-8 col-md-offset-1 describFondateur">
                <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>
        </div>
        <br><hr class="founderSepation"><br>
        <div class="row">
            <div class="col-md-2 fondateur2">
                <img class="imgFondateur" src="Images/laurent-Portrait.jpg" width="150px" alt="...">
                <h4>Laurent AUBERTIN</h4>
            </div>
            <div class="col-md-8 col-md-offset-1 describFondateur1">
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

</body>
</html>
