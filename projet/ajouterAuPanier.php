
<?php
include_once('Database.php');
session_start ();


if (isset($_GET['id_article'])) {
	
	$bdd = Database::getDb();
            $query = "select * from article where id_article=:id_article";
            $req=$bdd->prepare($query);
            $req->execute(array("id_article" => $_GET['id_article']));
           $result = $req->fetch();
	
	
	$flag = true;
	if(isset($_SESSION['panier'])){
	foreach ($_SESSION['panier'] as &$panier){
		if($panier['id_article']==$_GET['id_article']){
			$panier['quantity']=$_GET['quantity'];
			
			$flag = false;
			break;
		}
	}}
	
	
	if($flag){
		$article=array('id_article'=>$result['id_article'],'name' => $result['name'],'price' => $result['price'],'image' => $result['image_src'],'quantity' => $_GET['quantity']);
		$_SESSION['panier'][]=$article;
	}
	echo "<script type='text/javascript'>alert('successfully added');</script>";
	/* echo '<body onLoad="alert(\'successfully added\')">'; */
	header('location:panier.php');
	/* echo '<meta http-equiv="refresh" content="0; URL=article_detail.php?id_article='.$_GET["id_article"].'&&price='.$result['price'].'&&image_src='.$result['image_src'].'&&name='.$result['name'].'>'; */
	
}

?>