<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>search result</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
<link rel="stylesheet" type="text/css" href="css/buttons.css"/>
<link rel="stylesheet" type="text/css" href="css/lrtk.css"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>
<form action = "search_resultat.php" method="POST" >
<div id="Container">
	
    <?php include 'header.php';?>
	<?php include 'menu.php';?>
    
	<div id="center">
    <div class="p_title"><h2>Votre panier</h2></div>
    <div class="list_head">
    <table width="872" border="0">
      <tbody>
        <tr>
          <td width="65%"></td>
          <td width="15%" align="left">Prix</td>
          <td width="10%" align="right">Quantité&nbsp;</td>
          <td width="10%" align="right"></td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="list_body">
    <table width="872" border="0" class="panier_table">
  	<tbody>
	<?php

	if(isset($_SESSION['panier'])){
	$paniers = $_SESSION['panier'];
	$price_total=0;
	$total=0;
	
 foreach ($paniers as $panier) {
	 $price_total = $price_total + $panier["price"]*$panier["quantity"];
	  $total++;
          ?>	
    <tr class="a-oneborder">
      	<td width="10%" valign="middle"><img src=<?php echo $panier["image"]?> width="100" height="100"/></td>
      	<td width="55%" valign="middle">
          	<table border="0">
            <tr>
                <td>
                <span class="a-size-medium sc-product-title a-text-bold a-color-title"><?php echo $panier["name"]?></span>
                </td>
            </tr>
        	</table>
		</td>
      	<td width="15%" valign="middle"><span class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold">EUR <?php echo $panier["price"]?></span></td>
      	<td width="10%" valign="middle" align="right"><input type="number" name="quantity" min="1" max="10" value=<?php echo $panier["quantity"]?>></td>
        <td width="10%" valign="middle" align="middle"></td>
    </tr>
	<?php
 }
	}
?>
  	</tbody>
	</table>
	</div>
    <div class="a-text-right a-float-right">
    <span class="a-size-medium a-text-bold">
      Sous-total (<?php echo $total?> articles):
      <span class="a-color-price a-text-bold a-size-medium">EUR <?php echo $price_total?></span></br>
	  <a href="buy.php" class="button button-glow button-rounded button-highlight">buy</a>
						
    </span>
    </div>
    </div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>

</form>
</body>
</html>
