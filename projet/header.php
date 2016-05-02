<div id="Header">
		<div id="logo"><a href="homepage.php"><img src="images/logo.png" width="220" height="80" alt=""/></a></div>
        <div id="search">
        	<div id="search_loc">
			<form action = "search_resultat.php" method="POST" >
			<input type="text" name="search_text" class="search_text">
            <input type="submit" name="search_buttom" value="Recherche" class="search_btn">
			</form>
        	</div>
        </div>
        <div id="login">
        <div class="dropdown col-lg-6">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><a class="compt" href="decideCompte.php">
		<?php 
		session_start ();
		if(isset($_SESSION['userName'])){
		echo $_SESSION['userName'];
		}
		 else{
		 echo 'Compte';
		}
		?>
		</a><span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="decideCompte.php">Votre compte</a></li>
              <li><a href="commandes.php">Vos commandes</a></li>
              <li class="divider"></li>
              <li><a href="exit.php">Déconnectez-vous</a></li>
            </ul>
        </div>
		<div class="image_panier_pos">
        <a href="panier.php"><img src="images/panier.png" alt=""></a>
        </div>
        </div>
    </div>