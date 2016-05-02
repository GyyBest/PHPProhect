<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/homepage.css"/>
</head>

<body>
<div id="Container">
	<div id="Header">
		<div id="logo"><a href="homepage.php"><img src="images/logo.png" width="220" height="80" alt=""/></a></div>
        <div id="search">
			<h1 align="center" >Administration Mode</h1>
        </div>
        <div id="admin_compt">
        <a href="login.html">MON COMPTE</a>
        &nbsp;
        <a href="homepage.php">EXIT</a>
        </div> 
    </div>
    <div id="Content">
    <form action="addArticle.php" method="post" >
    <div class="form_table">
    <table>
        <tr>
		<td class="form_table_td1">Nom du produit:</td>
        <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td class="form_table_td1">Catégorie:</td>
          <td>
            <select name="id_category"">
                <option value="0">Tous les catégories</option>
                <option value="1">High-Tech et Informatique</option>
                <option value="2">Jouets, Enfants et Bébés</option>
                <option value="3">Maison, Bricolage, Animalerie</option>
                <option value="4">Beauté, Santé, Épicerie</option>
                <option value="5">Vêtements et Chaussures</option>
                <option value="6">Sports et Loisirs</option>
            </select>
            
          </td>
        </tr>
        <tr>
          <td class="form_table_td1">Prix:</td>
          <td><input type="text" name="price" /></td>
        </tr>
		 <tr>
          <td class="form_table_td1">quantity:</td>
          <td><input type="text" name="quantity" /></td>
        </tr>
        <tr>
          
          
          	<td class="form_table_td1"><label  for="file">image_name:</label> </td>
            <td><input type="file" name="image_name"  /> </td>
           </tr>
		   <tr>
			<td  class="form_table_td1"><label for="file">description:</label></td>
            <td><textarea rows="4" cols="50" name='description'></textarea></td>
           
        </tr>
        
    </table>

    </div>
    <div class="bt_submit">
    <input type="submit" value="Soumettre"><input type="reset" value="Annuler">
    </div>
    </form>
    </div>
    <div class="Clear"></div>
    <div id="Footer">Copyright © 2014-2015 abcd Inc. Tous droits réservés.</div>
</div>
</body>
</html>
