<?php
include_once('Database.php');
session_start ();
//echo $_SESSION['id_user'];
if(isset($_SESSION['panier'])){
	$paniers = $_SESSION['panier'];
	//$price_total=0;
	//$total=0;

	$id_basket;
	try{
		$query="insert into basket (etat,id_user) values (:etat,:id_user)";
		$req=$bdd->prepare($query);
		$req->execute(array("etat"=>'1',"id_user"=>$_SESSION['id_user']));		
		$id_basket=$bdd->lastInsertId();		
	}
	catch (PDOException $e) {
		echo("<pre>");
		var_dump($e);
	}

	foreach ($paniers as $panier) {
		$quantity = $panier["quantity"];
		$id_article = $panier["id_article"];
		
		try{
			$query="insert into basket_line (id_basket,id_article,quantity) values (:id_basket,:id_article,:quantity)";
			$req=$bdd->prepare($query);
			$req->execute(array("id_basket"=>$id_basket,"id_article"=>$id_article,"quantity"=>$quantity));
			if($req){
				$_SESSION['panier']=null;
				echo '<body onLoad="alert(\'successfully added\')">';
				echo '<meta http-equiv="refresh" content="0;URL=commandes.php">';
			}	
		}
		catch (PDOException $e) {
			echo("<pre>");
			var_dump($e);
		}
	}
}
 
 
?>