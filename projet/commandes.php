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
    <div class="list_head">
        <table width="852" border="0">
            <tr>
                <td width="25%" align="left">		 
                <span class="a-color-secondary a-label">N° de commande</span>
                </td>
                <td width="25%" align="left">
                <span class="a-color-secondary a-label">Commande effectuée le</span>
                </td>
                <td width="25%" align="right">
                <span class="a-color-secondary a-label">detail</span>
                </td>
            </tr>
        </table>
    </div>
    <?php 
    include_once('Database.php');
    $bdd = Database::getDb();
        $query = "select * from basket where id_user=:id_user";
        $req=$bdd->prepare($query);
        $req->execute(array("id_user" => $_SESSION['id_user']));
        while ($result = $req->fetch()) {
	?>	

    <div class="list_body">
        <table width="852" border="0">
        <tr>
            <td width="25%" align="left">		 
                <span class="a-color-secondary value"><?php echo $result["id_basket"]?></span>
            </td>
            <td width="25%" align="left">
                <span class="a-color-secondary value"><?php echo $result["date_time"]?></span>
            </td>
            <td width="25%" align="right">
                <a href="commande_detail.php?id_basket=<?php echo $result['id_basket']?>" class="a-color-secondary value detail">detail</a>
            </td>
        </tr>
        </table>
    </div>
    <?php 
        }
    ?>   
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>
</body>
</html>
