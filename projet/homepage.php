<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>homepage</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<link rel="stylesheet" type="text/css" href="css/slide.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/slide.js" type="text/javascript"></script>
</head>


<body>
<div id="Container">
	<?php include 'header.php';?>
	
    <div id="Content">
    	<div id="affiche">
            <div class="abgne-player">
                <ul class="abgne-list">
                    <li><a href="#"><img src="images/adv/adv1.jpg"></a></li>
                    <li><a href="#"><img src="images/adv/adv2.jpg"></a></li>
                    <li><a href="#"><img src="images/adv/adv3.jpg"></a></li>
                </ul>
            </div>
            <div class="abgne-control">
                <ul class="arrows"> 
                    <li class="prev">&lt;</li> 
                    <li class="next">&gt;</li> 
                </ul>
            </div>
        </div>
        <div id="menu">
			<table width="800" height="500" border="0">
				<tbody>
					<tr>
					  <td><a href="search_resultat.php?id_category=1"><img src="images/a1.jpg" width="200" height="150"/><p>High-Tech et Informatique</p></a></td>
					  <td><a href="search_resultat.php?id_category=2"><img src="images/a2.jpg" width="200" height="150"/><p>Jouets, Enfants et Bébés</p></a></td>
					  <td><a href="search_resultat.php?id_category=3"><img src="images/a3.jpg" width="200" height="150"/><p>Maison, Bricolage</p></a></td>
					</tr>
					<tr>
					  <td><a href="search_resultat.php?id_category=4"><img src="images/a4.jpg" width="200" height="150"/><p>Beauté, Santé, Épicerie</p></a></td>
					  <td><a href="search_resultat.php?id_category=5"><img src="images/a5.jpg" width="200" height="150"/><p>Vêtements et Chaussures</p></a></td>
					  <td><a href="search_resultat.php?id_category=6"><img src="images/a6.jpg" width="200" height="150"/><p>Sports et Loisirs
</p></a></td>
					</tr>
				</tbody>
			</table>
		</div>
    </div>
   
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>


</body>
</html>
