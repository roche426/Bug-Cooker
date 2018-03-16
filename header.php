<!--Banniere top-->
<header>
	<a href="index.php"><img src="../Images/logo_sans_fond_blanc.png"alt="logo_restaurant" id="logo_restaurant_head"></a>
<!--Barre de navigation-->
	<hr class="ligne_separation">
		<ul id="navigation" class="nav nav-pills">
			<li<?php if ($nav_en_cours == 'index') {echo ' id="en-cours"';} ?>><a href="index.php" class="nav_text">Concept</a></li>
			<li<?php if ($nav_en_cours == 'nosmenus') {echo ' id="en-cours"';} ?>><a href="nosMenus.php" class="nav_text">Notre Carte</a></li>
			<li<?php if ($nav_en_cours == 'nosrestaurants') {echo ' id="en-cours"';} ?>><a href="nosRestaurants.php" class="nav_text">Nos Restaurants</a></li>
		</ul>
	<hr class="ligne_separation">

</header>
