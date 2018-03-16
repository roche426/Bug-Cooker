<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BugCookers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <?php $nav_en_cours = 'nosmenus'; ?>
</head>
<body>
    <header>
        <h1 id="#top" class="sr-only">Notre carte</h1>
        <?php include("header.php");?>
    </header>

    <section>

        <div class="container">
            <div class="title-div">
                <div class="left-line"></div>
                <h2 class="text-center title-heading">Menu BUG COOKERS</h2>
                <div class="right-line"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="bs-example">
                            <div class="panel-group" id="accordion">
                                <div class="panel menu-panel">
                                    <div class="panel-heading menu-panel-heading" data-toggle="collapse" href="#collapseOne">
                                        <h5 class="panel-title">Entrées</h5>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p class="text-center p-nosMenus">Salade de criquet sauce citronnée au miel et au sésame - 12€<br><span class="span-menu">~</span><br>
                                                Velouté, carotte et amandes aux vers croustillants - 15€<br><span class="span-menu">~</span><br>
                                                Tartelette aux moucherons et larves Sago au lard de la forêt noires, praliné amande - 14€<br><span class="span-menu">~</span><br>
                                                Quenelle de ténébrion Tenebrio molitor à la lyonnaise - 22€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel menu-panel">
                                    <div class="panel-heading menu-panel-heading" data-toggle="collapse" href="#collapseTwo">
                                        <h5 class="panel-title">Plats</h5>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="text-center p-nosMenus">Gratin Dauphinois aux termites et cafards - 20€<br><span class="span-menu">~</span><br>
                                                Tagliatelles aux vers Mopanes - 25€<br><span class="span-menu">~</span><br>
                                                Mille-feuille de crêpes aux scorpions - 24€<br><span class="span-menu">~</span><br>
                                                Filet mignon farci aux tarantules, sauce au poivre et au whisky - 32€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel menu-panel">
                                    <div class="panel-heading menu-panel-heading" data-toggle="collapse" href="#collapseThree">
                                        <h5 class="panel-title">Desserts</h5>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="text-center p-nosMenus">Tarte soufflée au criquet Caelifera, sorbet au fromage blanc, gingembre confit - 15€<br><span class="span-menu">~</span><br>
                                                Macarons Larves de Witchetty-basilic - 10€<br><span class="span-menu">~</span><br>
                                                Verrines de scarabée & tuiles aux amandes - 14€<br><span class="span-menu">~</span><br>
                                                Clafoutis aux libellule et miel - 18€</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="title-div">
                <div class="left-line"></div>
                <h2 class="text-center title-heading">Spécialités par restaurant BUG COOKERS</h2>
                <div class="right-line"></div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-loupe">
                            <img src="Images/abeille_1_resize.jpg" alt="abeille">
                            <div class="caption text-center">
                                <h3>Spécialités<br>LA LOUPE</h3>
                                <p class="p-nosMenus">Tartines de gueppes sur son lit d'oeufs d'esturgeons</p>
                                <p class="text-center"><a href="/nosRestaurants.php#loupe" class="btn btn-color" role="button">LA LOUPE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-orleans">
                            <img src="Images/frites_1_resize.jpg" alt="pates">
                            <div class="caption text-center">
                                <h3>Spécialités<br>ORLÉANS</h3>
                                <p class="p-nosMenus">Vers de farine servi avec des strozzapreti aux légumes, sauce guacamole</p>
                                <p class="text-center"><a href="nosRestaurants.php#orleans" class="btn btn-color" role="button">ORLÉANS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-bordeaux">
                            <img src="Images/brochette_1_resize.jpg" alt="brochettes">
                            <div class="caption text-center">
                                <h3>Spécialités<br>BORDEAUX</h3>
                                <p class="p-nosMenus">Brochettes de criquets et poivrons</p>
                                <p class="text-center"><a href="nosRestaurants.php#bordeaux" class="btn btn-color" role="button">BORDEAUX</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-lyon">
                            <img src="Images/qcorpion_2.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>LYON</h3>
                                <p class="p-nosMenus">Brochettes de scorpions accompagnées d'une salade de cafards</p>
                                <p class="text-center"><a href="nosRestaurants.php#lyon" class="btn btn-color" role="button">LYON</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-toulouse">
                            <img src="Images/composition_1_resize.jpg" alt="composition">
                            <div class="caption text-center">
                                <h3>Spécialités<br>TOULOUSE</h3>
                                <p class="p-nosMenus">Méli mélo de vers, cafards et larves à partager entre amis</p>
                                <p class="text-center"><a href="nosRestaurants.php#toulouse" class="btn btn-color" role="button">TOULOUSE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-lille">
                            <img src="Images/composition_3_resize.jpg" alt="composition">
                            <div class="caption text-center">
                                <h3>Spécialités<br>LILLE</h3>
                                <p class="p-nosMenus">Barquette de cafards</p>
                                <p class="text-center"><a href="nosRestaurants.php#lille" class="btn btn-color" role="button">LILLE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-strasbourg">
                            <img src="Images/criquets_1_resize.jpg" alt="criquet">
                            <div class="caption text-center">
                                <h3>Spécialités<br>STRASBOURG</h3>
                                <p class="p-nosMenus">Grillons grillés</p>
                                <p class="text-center"><a href="nosRestaurants.php#strasbourg" class="btn btn-color" role="button">STRASBOURG</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite"  id="spe-paris">
                            <img src="Images/scorpion_3_resize.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>PARIS</h3>
                                <p class="p-nosMenus">Brochettes de scorpions et larves</p>
                                <p class="text-center"><a href="nosRestaurants.php#paris" class="btn btn-color" role="button">PARIS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-md-offset-3">
                        <div class="thumbnail specialite" id="spe-reims">
                            <img src="Images/scorpion_1_resize.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>REIMS</h3>
                                <p class="p-nosMenus">Salade fraicheur aux scorpions géants grillés</p>
                                <p class="text-center"><a href="nosRestaurants.php#reims" class="btn btn-color" role="button">REIMS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-biarritz">
                            <img src="Images/sushi_1.jpg" alt="sushi">
                            <div class="caption text-center">
                                <h3>Spécialités<br>BIARRITZ</h3>
                                <p class="p-nosMenus">Assortiments de sushis larves et cafards</p>
                                <p class="text-center"><a href="nosRestaurants.php#biarritz" class="btn btn-color" role="button">BIARRITZ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scrollUp">
            <a href="#top"><img src="Images/to_top.png"/></a>
        </div>
    </section>

    <footer class="banniere_top">
        <?php include("footer.php");?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
