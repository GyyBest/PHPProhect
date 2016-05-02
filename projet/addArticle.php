<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
<body>
<?php

include_once('Database.php');

try{
    $query="insert into article (name,image_src,id_category,price,quantity,description) values (:name,:image_src,:id_category,:price,:quantity,:description)";
    $req=$bdd->prepare($query);
    $req->execute(array("name"=>$_POST['name'],
        "image_src"=>"images/".$_POST['image_name'],
		 "price"=>$_POST['price'],
		  "quantity"=>$_POST['quantity'],
		  "description"=>$_POST['description'],
        "id_category"=>$_POST["id_category"]));
	if($req){
		?>
		 
alert('删除成功！');   


	<?php	
	}else{
		?>alert('删除失败！'); <?php	
	}
	
}catch (PDOException $e) {
    echo("<pre>");
    var_dump($e);
}
?>
</body>
</html>