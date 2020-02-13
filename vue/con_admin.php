<?php

if (isset($_POST['SeConnecter']))
		{
			$pseudo = $_POST['pseudo'];
			$mdp = $_POST['mdp'];
			
			$unControleur->setTable("admin");
			$champs = array("*"); //la selection
			//var_dump($champs);
			$where = array("pseudo"=>"".$pseudo."","mdp"=>"".$mdp.""); 
			$operateur = " and "; 
			
			$resultat = $unControleur->selectWhere($champs,$where,$operateur);
			
			
			//$resultat = $unControleur->selectUser($pseudo,$mdp);
			
			
			
			//var_dump($resultat);
			if($resultat==null)
			{
				echo"<br/> veuillez vérifier vos identifiants ";
			}else{
				//var_dump($resultat);
				foreach ($resultat as $uneLigne)
					{
						echo "<br/> Bienvenue ".$uneLigne["pseudo"]."";			
						$_SESSION['numA']=$uneLigne['numA'];
						$int='prenom';
						//echo strlen((string)$int); 
					}
				
			}
		}
?>


