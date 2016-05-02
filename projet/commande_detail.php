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
    <div class="p_title"><h2>commande detail</h2></div>
    <div class="list_head">
    <table width="872" border="0">
      <tbody>
        <tr>
          <td width="65%"></td>
          <td width="15%" align="left">Prix</td>
          <td width="20%" align="right">Quantité&nbsp;</td>
        </tr>
      </tbody>
    </table>
    </div>
    <div class="list_body">
    <table width="872" border="0" class="panier_table">
  	<tbody>
	<?php
      
	    $id_basket=$_GET['id_basket'];
		include_once('Database.php');
		$bdd = Database::getDb();
		 $query = 'SELECT price,name,image_src, basket_line.quantity from basket,basket_line,article 
		 where basket.id_basket=basket_line.id_basket 
		 and basket_line.id_article=article.id_article 
		 and basket.id_basket='.$id_basket;
										$req=$bdd->prepare($query);
										$req->execute();
										while ($result = $req->fetch()) {
											
											?>	
										
         
    <tr>
      	<td width="10%" valign="middle"><img src=<?php echo $result["image_src"]?> width="100" height="100"/></td>
      	<td width="55%" valign="middle">
          	<table border="0">
            <tr>
                <td>
                <span class="a-size-medium sc-product-title a-text-bold a-color-title"><?php echo $result["name"]?> </span>
                </td>
            </tr>
        	</table>
		</td>
      	<td width="15%" valign="middle"><span class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold">EUR <?php echo $result["price"]?></span></td>
      	<td width="20%" valign="middle" align="right"><span type="text" name="quantity"> <?php echo $result["quantity"]?></span></td>
        
    </tr>
	<?php
 }
	
?>
  	</tbody>
	</table>
	</div>
    
    </div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>

</form>
</body>
</html>
