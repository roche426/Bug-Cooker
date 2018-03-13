<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Menu</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <?php include("header.php");?>
    </header>
<<<<<<< HEAD
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading text-center">Menu
            </div>
            <div class="panel-body">
              <button class="accordion" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Entrées</button>
              <div class="panelaccordeon">
                <p>Lorem ipsum dolor sit amet - 12€<br>
                  Consectetur adipisicing elit - 15€<br>
                  Sed do eiusmod tempor incididunt - 14€<br>
                  Ut labore et dolore - 22€</p>
              </div>
                <button class="accordion">Plats</button>
                <div class="panelaccordeon">
                  <p>Laboris nisi ut aliquip - 20€<br>
                    Ut enim ad minim veniam - 25€<br>
                    Quis nostrud exercitation ullamco - 24€<br>
                    Ex ea commodo consequat - 32€</p>
=======
    <section>

        <div class="container">
            <h2 class="titre-section text-center">Menu BUB COOKERS</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-body">
                        <div class="bs-example">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
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
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
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
                                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
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
>>>>>>> 90fd68823f58b4e4f4723214aafedde0f8d39f6a
                </div>
            </div>
<<<<<<< HEAD

            <div id="accordion">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <p class="btn button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Collapsible Group Item #1
                  </p>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Collapsible Group Item #2
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Collapsible Group Item #3
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
            </div>

          </div>
=======
>>>>>>> 90fd68823f58b4e4f4723214aafedde0f8d39f6a
        </div>


        <div class="container">
            <h2 class="titre-section text-center">Spécialités par restaurant BUG COOKERS</h2>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/abeille_1_resize.jpg" alt="abeille">
                            <div class="caption">
                                <h3>Spécialités <br> LA LOUPE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">LA LOUPE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/frites_1_resize.jpg" alt="pates">
                            <div class="caption">
                                <h3>Spécialités <br> ORLÉANS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">ORLÉANS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/brochette_1_resize.jpg" alt="brochettes">
                            <div class="caption">
                                <h3>Spécialités <br> BORDEAUX</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">BORDEAUX</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/qcorpion_2.jpg" alt="scorpions">
                            <div class="caption">
                                <h3>Spécialités <br> LYON</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">LYON</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/composition_1_resize.jpg" alt="composition">
                            <div class="caption">
                                <h3>Spécialités <br> TOULOUSE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">TOULOUSE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/composition_3_resize.jpg" alt="composition">
                            <div class="caption">
                                <h3>Spécialités <br> LILLE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">LILLE</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/criquets_1_resize.jpg" alt="criquet">
                            <div class="caption">
                                <h3>Spécialités <br> STRASBOURG</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">STRASBOURG</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/scorpion_3_resize.jpg" alt="scorpions">
                            <div class="caption">
                                <h3>Spécialités <br> PARIS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">PARIS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-md-offset-3">
                        <div class="thumbnail specialite">
                            <img src="Images/scorpion_1_resize.jpg" alt="scorpions">
                            <div class="caption">
                                <h3>Spécialités <br> REIMS</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">REIMS</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail specialite">
                            <img src="Images/sushi_1.jpg" alt="sushi">
                            <div class="caption">
                                <h3>Spécialités <br> BIARRITZ</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <p class="text-center"><a href="nosRestaurant.php" class="btn btn-primary" role="button">BIARRITZ</a></p>
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
