<?php 
	session_start();
	require_once ("controleur/controleur.class.php");
	$unControleur = new Controleur ("localhost", "mairie", "root", "");
?>

<html>
	<head>
		<title> Site de la Mairie de Villiers </title>
		<meta charset = "utf-8">

		<?php
				if (isset($_GET['page']))
				{
    				if ($_GET['page']==10) 
    				{ 
        				header('Location: connexion_admin.php'); //Header => Pour rafraîchir la page
    				} 
				}
		?>
	</head>
	<body>
		<center>
			<h1> SITE DE LA MAIRIE </h1>
		    <form method ="post" action ="">
		    Pseudo : <input type ="text" name="pseudo"> </br> 
		    MDP : <input type ="password" name="mdp"> </br> 
		    <input type ="reset" name ="Annuler" value ="Annuler">
		    <input type ="submit" name ="SeConnecter" value ="SeConnecter"><br/>
		    </form>
		    <a href="inscription.php"> Inscrivez-vous ici </a>
			</center>
			<?php
		
		include("vue/con_admin.php");
		

		if (isset($_SESSION['numA']))
		{
				include ("vue/pages_admin.php");

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
					include("vue/ajout_loisir.php");
					 
					if(isset($_POST['ajouter']))
					{
						 $tab = array("libelle"=>$_POST['libelle'],"lieu"=>$_POST['lieu']);
						 $unControleur->insert($tab);
						 echo "le loisir a bien été ajouté";
					}
					include("vue/supprimer_loisir.php");
					if(isset($_POST['supprimer']))
					{
						 $tab = array("idL"=>$_POST['idL']);
						 $unControleur->delete($tab);
					}
					
					
					break;
					
					case 3:
					$unControleur->setTable("evenement");
					$lesLignes = $unControleur->selectALL();
					//var_dump($lesLignes);
					include("vue/tableau_evenement.php");
					
					include("vue/ajout_evenement.php");
					if(isset($_POST['ajouter']))
                    {
						$unControleur->setTable("interieur");	
						 $tab = array("libelle"=>$_POST['libelle'],"lieu"=>$_POST['lieu'],"dateEV"=>$_POST['dateEV'],"superficie"=>$_POST['superficie']);
						 $unControleur->insert($tab);
						 echo "l'événement a bien été ajouté";
                    }
					
					include("vue/ajout_evenement_externe.php");
					if(isset($_POST['ajouter2']))
                    {
						$unControleur->setTable("exterieur");	
						 $tab = array("libelle"=>$_POST['libelle'],"lieu"=>$_POST['lieu'],"dateEV"=>$_POST['dateEV'],"meteo"=>$_POST['meteo']);
						 $unControleur->insert($tab);
						 echo "l'événement a bien été ajouté";
                    }
					
					
					
					include("vue/supprimer_evenement.php");
					if(isset($_POST['supprimer']))
                    {
						 $tab = array("idEV"=>$_POST['idEV']);
						 $unControleur->delete($tab);
                    }
					break;
					
					case 4:
					$unControleur->setTable("association");
					$lesLignes = $unControleur->selectALL();
					include("vue/tableau_association.php");
					break;
					
					case 5:
					$lesLignes = $unControleur->afficher_mariage_admin();
					include ("vue/tableau_mariage.php");
					break;
					
					case 6:
					$unControleur->setTable("actes");				
					$lesLignes = $unControleur->selectALL();
					 include("vue/tableau_acte.php");
					break;
					
					case 7:
					$unControleur->setTable("enfants");
					$lesLignes = $unControleur->selectALL();
					
					include("vue/tableau_enfants.php");
					break;
					
					case 8:
					$unControleur->setTable("vstat");
					$lesLignes = $unControleur->selectALL();
					include ("vue/tableau_stat.php");
					break;
					
					case 10: session_destroy();
				}
		}
		
	?>
	
	
	</body>
	</html>
	