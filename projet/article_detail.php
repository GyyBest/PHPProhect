<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>search result</title>
		<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
		<link rel="stylesheet" type="text/css" href="css/lrtk.css"/>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="css/buttons.css" rel="stylesheet" type="text/css">
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>
	
	<body>
		<div id="Container">
			<?php include 'header.php';?>
			<?php include 'menu.php';?>
   
			<div class="center">
				<div class="article_pic">
				<img src=<?php echo $_GET["image_src"] ?> width="320" height="360" alt="">
				</div>
				<div class="article_info_simple">
				<form method='get' action='ajouterAuPanier.php'>
					<table border="0">
					<tr>
						<td>
						<span class="a-size-medium sc-product-title a-text-bold a-color-title"><?php echo $_GET["name"] ?></span>
						</td>
					</tr>
					<tr>
						<td>
						<span class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold">EUR <?php echo $_GET["price"]?></span>
						</td>
					</tr>
					<tr>
						
						
						<td >
						<span class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold"><input type="number" name="quantity" min="1" max="10" value=1></input></span>
						<input type="hidden" name="id_article"  value=<?php echo $_GET["id_article"]?>></input>
						
						</td>
						
					</tr>
					<tr>
						<td>
						<span class="a-size-medium a-color-success sc-white-space-nowrap">En stock</span>
						</td>
					</tr>
					
					</table>
					
					<div class="bt_addtopanier"><input type='submit' class="button button-glow button-rounded button-highlight" value="Ajouter au panier"></div>
					</form>
				</div>
				
		</div>
		
		<div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
	</div>
	
</body>
</html>
