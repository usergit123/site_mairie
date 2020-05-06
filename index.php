<?php
    session_start();
	require_once ("controleur/controleur.class.php");
	$unControleur = new Controleur ("localhost", "mairie", "root", "");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mairie de Villiers</title>
  
  
  

  
  
  <!-->
  <link rel="stylesheet" type="text/css" href="style/style.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Pratt
    Template URL: https://templatemag.com/pratt-app-landing-page-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

  <!-- Fixed navbar -->
  <?php
  if (isset($_SESSION['idP']))
  {
	  include("vue/nav_connexion.php");
  }else{
	  include("vue/nav.php");  
  }
  ?>
          
            <img src="img/mairie15.png" width="100%"height="10%" >
<center>
<br>
<?php
	
	
	if (isset($_GET['page']))
			{
				if ($_GET['page']==10) 
				{ 
					header('Location: index.php'); //Header => Pour rafraîchir la page
				} 
			}
	
	//les pages visitables hors connexion
	if(isset($_GET['HS']))
	{
		switch ($_GET['HS'])
				{
					case 1 :
						include ("vue/recherche.php");
						$unControleur->setTable("cantine");
						$lesLignes = $unControleur->selectALL();
						//var_dump($lesLignes);
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("ville"=>$_POST['recherche'],"codePostal"=>$_POST['recherche'],"prix"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
							
							
						}
						include("vue/tableau_cantine.php");
						break;
					
					case 2:
						//si la personne a cliquée sur "s'insrire"
						if(isset($_GET['num']))
						{							
							$unControleur->setTable("Participer");	
							$where = array("idL"=>"".$_GET['num']."","idP"=>"".$_SESSION['idP']."","datePL"=>"curdate()");  
							//var_dump($champs);
							$unControleur->insert_participer($where);
							echo "<br><br>Vous avez bien été inscrit !";
						}
						include ("vue/recherche.php");
						$unControleur->setTable("loisir");					
						$lesLignes = $unControleur->selectALL();
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("idL"=>$_POST['recherche'],"libelle"=>$_POST['recherche'],"lieu"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
							
							
						}
						include("vue/tableau_loisir.php");
						//var_dump($lesLignes);
						break;
					
					case 3:
						include ("vue/recherche.php");
						/*
						$unControleur->setTable("evenement");
						$lesLignes = $unControleur->selectALL();
						*/
						include("vue/tableau_evenement.php");
						//var_dump($lesLignes);
						include("vue/inscription_evenement.php");
						
						break;
					
					case 4:
						include("vue/recherche.php");
						$unControleur->setTable("association");
						$lesLignes = $unControleur->selectALL();
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("libelleA"=>$_POST['recherche'],"adresse"=>$_POST['recherche'],"tel"=>$_POST['recherche'],
											"codeP"=>$_POST['recherche'],"dateA"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
						}
						include("vue/tableau_association.php");
						break;
						
						
					case 5:
						include ("vue/form_connexion.php");
						include("vue/connexion.php");
						break;

					case 6:
						include("vue/inscription.php");
						break;
						
				}
				
	}
	
	if($_SESSION==null && $_GET==null)
	{
		echo "</br></br><strong>Bienvenue sur le site de la mairie de Villiers<strong>";
		include ("vue/form_connexion.php");
		include("vue/connexion.php");
	}
	else
	{		
		if (isset($_SESSION['idP']))
		{
				//si la personne vient de se connecter
				if(isset($_GET['first']))
				{
					echo "<br/> Bienvenue ".$_SESSION["nom"]." , ".$_SESSION["prenom"]."";					
				}
				
				
				

				if (isset($_GET['page']))
				{
					$page=$_GET['page'];
				}else{
					$page=0;
				}
				switch ($page)
				{
					case 1 :
						include ("vue/recherche.php");
						$unControleur->setTable("cantine");
						$lesLignes = $unControleur->selectALL();
						//var_dump($lesLignes);
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("ville"=>$_POST['recherche'],"codePostal"=>$_POST['recherche'],"prix"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
							
							
						}
						include("vue/tableau_cantine.php");
						break;
					
					case 2:
						//si la personne a cliquée sur "s'insrire"
						if(isset($_GET['num']))
						{							
							$unControleur->setTable("Participer");	
							$where = array("idL"=>"".$_GET['num']."","idP"=>"".$_SESSION['idP']."","datePL"=>"curdate()");  
							//var_dump($champs);
							$unControleur->insert_participer($where);
							echo "<br><br>Vous avez bien été inscrit !";
						}
						include ("vue/recherche.php");
						$unControleur->setTable("loisir");					
						$lesLignes = $unControleur->selectALL();
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("idL"=>$_POST['recherche'],"libelle"=>$_POST['recherche'],"lieu"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
							
							
						}
						include("vue/tableau_loisir.php");
						//var_dump($lesLignes);
						break;
					
					case 3:
						include ("vue/recherche.php");
						/*
						$unControleur->setTable("evenement");
						$lesLignes = $unControleur->selectALL();
						*/
						include("vue/tableau_evenement.php");
						//var_dump($lesLignes);
						break;
					
					case 4:
						include("vue/recherche.php");
						$unControleur->setTable("association");
						$lesLignes = $unControleur->selectALL();
						if(isset($_POST['valider']))
						{
							//$recherche = $_POST['recherche'];
							
							$champs = array("*"); 
							//var_dump($champs);
							$where = array("libelleA"=>$_POST['recherche'],"adresse"=>$_POST['recherche'],"tel"=>$_POST['recherche'],
											"codeP"=>$_POST['recherche'],"dateA"=>$_POST['recherche']); 
							$operateur = " or "; 					
							$lesLignes = $unControleur->selectWhere($champs,$where,$operateur);
							
							
							
						}
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
</center>
<br><br><br><br><br>
    <div id="footerwrap">
      <div class="container">
        
          <h3>Adresse</h3>
          <p>
            Av. Greenville 987,<br/> Villiers,<br/> 91873
            <br/> France
          </p>       
      </div>
    </div>

</body>
</html>
