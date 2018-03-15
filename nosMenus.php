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
        <h1 class="sr-only">Notre carte</h1>
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
                                <div class="panel -default">
                                    <div class="panel-heading" data-toggle="collapse" href="#collapseOne">
                                        <h4 class="panel-title">Entrées</h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p class="text-center">Lorem ipsum dolor sit amet - 12€<br>
                                                Consectetur adipisicing elit - 15€<br>
                                                Sed do eiusmod tempor incididunt - 14€<br>
                                                Ut labore et dolore - 22€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="collapse" href="#collapseTwo">
                                        <h4 class="panel-title">Plats</h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="text-center">Laboris nisi ut aliquip - 20€<br>
                                                Ut enim ad minim veniam - 25€<br>
                                                Quis nostrud exercitation ullamco - 24€<br>
                                                Ex ea commodo consequat - 32€</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="collapse" href="#collapseThree">
                                        <h4 class="panel-title">Desserts</h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p class="text-center">Duis aute irure dolor in reprehenderit - 15€<br>
                                                In voluptate velit esse - 10€<br>
                                                Cillum dolore eu fugiat - 14€<br>
                                                Nulla pariatur - 18€</p>
                                        </div>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <p class="text-center"><a href="/nosRestaurants.php#loupe" class="btn btn-color" role="button">LA LOUPE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-orleans">
                            <img src="Images/frites_1_resize.jpg" alt="pates">
                            <div class="caption text-center">
                                <h3>Spécialités<br>ORLÉANS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="text-center"><a href="nosRestaurants.php#orleans" class="btn btn-color" role="button">ORLÉANS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-bordeaux">
                            <img src="Images/brochette_1_resize.jpg" alt="brochettes">
                            <div class="caption text-center">
                                <h3>Spécialités<br>BORDEAUX</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <p class="text-center"><a href="nosRestaurants.php#bordeaux" class="btn btn-color" role="button">BORDEAUX</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-lyon">
                            <img src="Images/qcorpion_2.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>LYON</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#lyon" class="btn btn-color" role="button">LYON</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-toulouse">
                            <img src="Images/composition_1_resize.jpg" alt="composition">
                            <div class="caption text-center">
                                <h3>Spécialités<br>TOULOUSE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#toulouse" class="btn btn-color" role="button">TOULOUSE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-lille">
                            <img src="Images/composition_3_resize.jpg" alt="composition">
                            <div class="caption text-center">
                                <h3>Spécialités<br>LILLE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#lille" class="btn btn-color" role="button">LILLE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-strasbourg">
                            <img src="Images/criquets_1_resize.jpg" alt="criquet">
                            <div class="caption text-center">
                                <h3>Spécialités<br>STRASBOURG</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#strasbourg" class="btn btn-color" role="button">STRASBOURG</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite"  id="spe-paris">
                            <img src="Images/scorpion_3_resize.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>PARIS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#paris" class="btn btn-color" role="button">PARIS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-md-offset-3">
                        <div class="thumbnail specialite" id="spe-reims">
                            <img src="Images/scorpion_1_resize.jpg" alt="scorpions">
                            <div class="caption text-center">
                                <h3>Spécialités<br>REIMS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#reims" class="btn btn-color" role="button">REIMS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite" id="spe-biarritz">
                            <img src="Images/sushi_1.jpg" alt="sushi">
                            <div class="caption text-center">
                                <h3>Spécialités<br>BIARRITZ</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurants.php#biarritz" class="btn btn-color" role="button">BIARRITZ</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="banniere_top">
        <?php include("footer.php");?>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
