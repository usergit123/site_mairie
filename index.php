<?php 
	session_start();
	require_once ("controleur/controleur.class.php");
	$unControleur = new Controleur ("localhost", "mairie", "root", "");
?>

<html>
	<head>
		<?php
			include("vue/head_presentation.php");
			
			if (isset($_GET['page']))
			{
				if ($_GET['page']==10) 
				{ 
					header('Location: index.php'); //Header => Pour rafraîchir la page
				} 
			}
		?>
	</head>
	
	<body style="background-color: #8dc6ba";>

	<?php
	include("vue/presentation.php");
	
	if($_SESSION==null)
	{
		echo "</br></br><strong>Bienvenue sur le site de la mairie de Villiers<strong>";
		include ("vue/form_connexion.php");
		include("vue/connexion.php");
	}
	else
	{		
		if (isset($_SESSION['idP']))
		{
				

				if (isset($_GET['page']))
				{
					$page=$_GET['page'];
				}else{
					$page=0;
				}
				switch ($page)
				{
					case 1 :
					$unControleur->setTable("cantine");
					$lesLignes = $unControleur->selectALL();
					//var_dump($lesLignes);
					include("vue/tableau_cantine.php");
					break;
					
					case 2:
					$unControleur->setTable("loisir");
					$lesLignes = $unControleur->selectALL();
					//var_dump($lesLignes);
					include("vue/tableau_loisir.php");
					break;
					
					case 3:
					$unControleur->setTable("evenement");
					$lesLignes = $unControleur->selectALL();
					//var_dump($lesLignes);
					include("vue/tableau_evenement.php");
					break;
					
					case 4:
					$unControleur->setTable("association");
					$lesLignes = $unControleur->selectALL();
					include("vue/tableau_association.php");
					break;
					
					case 5:
					$lesLignes = $unControleur->afficher_mariage($_SESSION['idP']);
					include ("vue/tableau_mariage.php");
					break;
					
					case 6:
					$unControleur->setTable("actes");
					$champs = array("idF", "idP", "mariage", "naissance", "deces" ); 
					//var_dump($champs);
					$where = array("idP"=>"".$_SESSION['idP'].""); 
					$operateur = ""; 					
					$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
					 include("vue/tableau_acte.php");
					break;
					
					case 7:
					$unControleur->setTable("enfants");
					$champs = array("*"); 
					//var_dump($champs);
					$where = array("idP"=>"".$_SESSION['idP'].""); 
					$operateur = ""; 					
					$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
					
					echo "<h3>Vous avez :</h3>";
					include("vue/tableau_enfants.php");
					break;
					
					case 8:
					//pas de stats pour l'utilisateur
					break;
					
					case 10: session_destroy();
				}
		}
	}
		
	?>
	
	
	</body>
	</html>
	