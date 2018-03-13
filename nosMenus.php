<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
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
                </div>
                  <button class="accordion">Desserts</button>
                  <div class="panelaccordeon">
                    <p>Duis aute irure dolor in reprehenderit - 15€<br>
                      In voluptate velit esse - 10€<br>
                      Cillum dolore eu fugiat - 14€<br>
                      Nulla pariatur - 18€</p>
                  </div>
            </div>

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
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading text-center">Spécialités par restaurant
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6 col-md-3">
                  <div class="thumbnail specialite specialiteLG1">
                    <img src="Images/abeille_1.jpg" alt="abeille">
                      <div class="caption">
                        <h3>Spécialités LYON</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco .</p>
                        <p><a href="#" class="btn btn-primary" role="button">LYON</a></p>
                      </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="thumbnail specialite specialiteLG1">
                    <img src="Images/abeille_1.jpg" alt="abeille">
                      <div class="caption">
                        <h3>Spécialités PARIS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        <p><a href="#" class="btn btn-primary" role="button">PARIS</a></p>
                      </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="thumbnail specialite specialiteLG2">
                    <img src="Images/abeille_1.jpg" alt="abeille">
                      <div class="caption">
                        <h3>Spécialités BORDEAUX</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        <p><a href="#" class="btn btn-primary" role="button">BORDEAUX</a></p>
                      </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3">
                  <div class="thumbnail specialite specialiteLG2">
                    <img src="Images/abeille_1.jpg" alt="abeille">
                      <div class="caption">
                        <h3>Spécialités MARSEILLE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p><a href="#" class="btn btn-primary" role="button">MARSEILLE</a></p>
                      </div>
                  </div>
                </div>
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


  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</body>
</html>
