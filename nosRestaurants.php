<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bug_cookers</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css"/>
    </head>

    <body>
        <header>
            <h1 class="sr-only">BugCookers</h1>
            <?php include("header.php");?>
        </header>

        <section class="container"><!--our restaurants-->
            <h2 class="text-center titre-section" id="location-h2">Trouver votre restaurant BugCookers</h2>
            <div class="row"><!--map-->
                <div class="col-sm-12 hidden-xs" id="map">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1LxqFAQapbNo_85xnMo-mSTdg2biGlEXz"></iframe>
                    </div>
                </div>
            </div>
            <div class="row "><!--restaurants thumbnail-->
                <div class="col-xs-12">
                    <div class="restaurant-location">
                        <div class="col-thumbnail"><!--La loupe-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>La Loupe</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@48.4738245,1.009727,17z/data=!3m1!4b1!4m5!3m4!1s0x47e3c1f7f7d69b13:0x44cf293e5870383a!8m2!3d48.473821!4d1.011921" class="link-adress link-adress-disable" target="_blank">18 Rue de la Gare<br/>28240 La Loupe</a>
                                    <p class="text-center">06 19 34 42 37</p>
                                    <a class="link-mail" href="laloupe@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Orléans-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Orléans</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@47.8939773,1.8919842,17z/data=!3m1!4b1!4m5!3m4!1s0x47e4e5268a751659:0xbc57826d5c23bd7!8m2!3d47.8939737!4d1.8941782" class="link-adress link-adress-disable" target="_blank">1 Avenue du Champ de Mars<br/>45074 Orléans</a>
                                    <p class="text-center">06 58 11 24 70</p>
                                    <a class="link-mail" href="orleans@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Bordeaux-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Bordeaux</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@44.8494108,-0.5771717,17z/data=!3m1!4b1!4m5!3m4!1s0xd5527cba74d1bdf:0xb92bcdcad0920688!8m2!3d44.849407!4d-0.5749777" class="link-adress link-adress-disable" target="_blank">68 Cours de Verdun<br/>33000 Bordeaux</a>
                                    <p class="text-center">06 66 96 17 77</p>
                                    <a class="link-mail" href="bordeaux@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Lyon-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Lyon</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@45.7464077,4.824766,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4ea4ac9e1fd2f:0xabc36e768b27c9a0!8m2!3d45.746404!4d4.82696" class="link-adress link-adress-disable" target="_blank">17 rue Delandine<br/>69002 Lyon</a>
                                    <p class="text-center">06 58 46 83 32</p>
                                    <a class="link-mail" href="lyon@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Toulouse-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Toulouse</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web%2Fmobile/@43.6015229,1.439835,17z/data=!3m1!4b1!4m5!3m4!1s0x12aebb62f2131681:0x62336d5cff38c7f5!8m2!3d43.601519!4d1.442029" class="link-adress link-adress-disable" target="_blank">1 Place de la Bourse<br/>31000 Toulouse</a>
                                    <p class="text-center">06 66 47 68 70</p>
                                    <a class="link-mail" href="toulouse@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Lille-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Lille</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@50.6331163,3.0166325,17z/data=!3m1!4b1!4m5!3m4!1s0x47c2d55c63d0d77d:0x6986c08acba25607!8m2!3d50.6331129!4d3.0188265" class="link-adress link-adress-disable" target="_blank">4 avenue des Saules, bâtiment Le Doge<br/>59160 Lille</a>
                                    <p class="text-center">07 61 83 26 08</p>
                                    <a class="link-mail" href="lille@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Strasbourg-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Strasbourg</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@48.5579775,7.7660728,17z/data=!3m1!4b1!4m5!3m4!1s0x4796c96d34025333:0x4fefbe61ce54f79a!8m2!3d48.557974!4d7.7682668" class="link-adress link-adress-disable" target="_blank">1 Rue des Corps-de-Garde<br/>67100 Strasbourg</a>
                                    <p class="text-center">06 58 70 53 99</p>
                                    <a class="link-mail" href="strasbourg@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Paris-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Paris</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+-+Formation+d%C3%A9veloppeur+web/@48.8490755,2.350406,17z/data=!3m1!4b1!4m5!3m4!1s0x47e671e4f9ed9097:0x21f0557e9b283397!8m2!3d48.849072!4d2.3526" class="link-adress link-adress-disable" target="_blank">11 Rue de Poissy<br/>75005 Paris</a>
                                    <p class="text-center">06 58 74 30 91</p>
                                    <a class="link-mail" href="paris@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Reims-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Reims</h3>
                                    <a href="https://www.google.fr/maps/place/6+Rue+de+Saint-Brice,+51100+Reims/@49.2571621,4.0180802,17z/data=!3m1!4b1!4m5!3m4!1s0x47e97501a1f9a0f5:0xf9ef0cdf67c7926a!8m2!3d49.2571586!4d4.0202742" class="link-adress link-adress-disable" target="_blank">6 rue de Saint Brice<br/>51100 Reims</a>
                                    <p class="text-center">06 58 30 24 94</p>
                                    <a class="link-mail" href="reims@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-thumbnail"><!--Biarritz-->
                            <div class="thumbnail text-center restaurant-thumbnail">
                                <div class="caption">
                                    <h3>Biarritz</h3>
                                    <a href="https://www.google.fr/maps/place/Wild+Code+School+Formation+d%C3%A9veloppeur+web%2Fmobile/@43.4463785,-1.5549161,17z/data=!3m1!4b1!4m5!3m4!1s0xd51151b04400001:0x5e8e4026b1a5e55f!8m2!3d43.4463746!4d-1.5527221" class="link-adress link-adress-disable" target="_blank">Technopole, 97 Allée Théodore Monod<br/>64210 Bidart</a>
                                    <p class="text-center">07 76 38 22 32</p>
                                    <a class="link-mail" href="biarritz@bugCookers.com">mail</a>
                                    <a class="btn btn-color" href="" role="button">Nos specialités</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section><!--contact section-->
            <div class="container">
                <h2 class="text-center titre-section" id="form-h2">Une question, une suggestion ? Contactez-nous</h2>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">
                        <form method="post" name="formInformation">
                            <label for="name">Nom :</label>
                            <input id="name" type="text" name="name"class="form-control"/>
                            <label for="email">Email :</label>
                            <input id="email" type="email" name="email"class="form-control"/>
                            <label for="textarea">Message :</label>
                            <textarea class="form-control" rows="3" id="textarea"></textarea>
                            <button class="btn btn-color" id="send-button" name="send-button" type="submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="banniere_top">
            <?php include("footer.php");?>
        </footer>

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVey409tCuTrEvxBikHt4qso7jbpotsh4&callback=initMap"></script>
        <script src="script_map.js"></script>

    </body>

</html>
