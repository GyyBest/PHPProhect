<?php

include_once('Database.php');
session_start ();


 if (isset($_POST['username'])&&isset($_POST['password'])) {
			 try { 
           
            $bdd = Database::getDb();
			$query="insert into user (name,password,role) values (:name,:password,:role)";
			$req=$bdd->prepare($query);
			$req->execute(array("name"=>$_POST['username'],
			"password"=>$_POST['password'],
			"role"=>"user"));
			
             if($req){
				echo '<body onLoad="alert(\'successfully add the user\')">';
				echo '<meta http-equiv="refresh" content="0;URL=login.html">';
			
			}
			else{
				echo '<body onLoad="alert(\'not successfully add the user\')">';
				echo '<meta http-equiv="refresh" content="0;URL=login.html">';
			}
		   
            }
        catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
            return null;
			}
        } 
		
		
		

?>