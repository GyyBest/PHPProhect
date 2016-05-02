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
		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
	</head>
	
	<body>
		<div id="Container">
			<?php include 'header.php';?>
			<?php include 'menu.php';?>
   
			<div id="center">
				<div class="p_title"><h2>resultat</h2></div>
				
				<div class="list_body">
					<table width="872" border="0" class="panier_table">
							<?php
								include_once('Database.php');
								
									$search;
									$id_category;
									$search_content;
									if (isset($_POST['search_text']) || isset($_GET['search_text'])||isset($_GET['id_category'])||isset($_POST['id_category'])){
									
									if(isset($_POST['search_text'])){
										$search= $_POST['search_text'];
										$search_content='search_text';
									 }
									 else if (isset($_GET['search_text'])){
										 $search= $_GET['search_text'];
										 $search_content='search_text';
									 }else if(isset($_GET['id_category'])){
										  $id_category= $_GET['id_category'];
										  $search_content='id_category';
									 }	
									else if(isset($_POST['id_category'])){
										  $id_category= $_POSY['id_category'];
										  $search_content='id_category';
									 }										 
									$query;
									if(isset($search)){
										$query = "Select * from article where name like '%$search%'";
									}
									if(isset($id_category)){
										$query = "Select * from article where id_category=".$id_category;
										
									}
									
									}
									try {
										$bdd = Database::getDb();
										$req=$bdd->prepare($query);
										$req->execute();
										while ($result = $req->fetch()) {?>	
										
										<tr>
							<td width="10%" valign="top"><img src=<?php echo $result["image_src"]?> width="100" height="100"/></td>
							<td width="55%" valign="top">
								<table border="0">
								<tr>
									<td>
									<a href="article_detail.php?id_article=<?php echo $result["id_article"]?>&&price=<?php echo $result["price"]?>&&image_src=<?php echo $result["image_src"]?>&&name=<?php echo $result["name"]?>"><span class="a-size-medium sc-product-title a-text-bold a-color-title"><?php echo $result["name"]?></span></a></td>
								</tr>
								<tr><td>
								<span class="a-size-medium a-color-price sc-white-space-nowrap a-text-bold">EUR <?php echo $result["price"]?></span></td>
								</tr>
								<tr><td>
								<span class="a-size-medium a-color-success sc-white-space-nowrap"><?php $result["quantity"]>0 ? "en stock": "epuise" ?></span></td>
								</tr>
								</table>
							</td>
						</tr>
						<?php
																			}
										}
											catch (PDOException $e) {
												echo("<pre>");
												var_dump($e);
												return null;
												                     }
						?>
						
					</table>
				
			</div>
		</div>
		<div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
	</div>
	
</body>

</html>
