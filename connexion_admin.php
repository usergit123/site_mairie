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
  
  <?php
				if (isset($_GET['page']))
				{
    				if ($_GET['page']==10) 
    					header('Location: connexion_admin.php'); //Header => Pour rafraîchir la page
    				else
    				{
    					if( $_GET['page']==2  && (isset($_POST['ajouter']) || isset($_POST['supprimer']))  )
    						header('Location: connexion_admin.php?page=2');
    					else
    					{
    						if( $_GET['page']==3  && (isset($_POST['ajouter']) || isset($_POST['supprimer']))  )
    							header('Location: connexion_admin.php?page=3');
    					}

    							
    				}
    					
    				 if( $_GET['page']==4  && (isset($_POST['ajouter']) || isset($_POST['supprimer']))  )
    							header('Location: connexion_admin.php?page=4');
    				
				}
		?>
  

  
  
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
  if (isset($_SESSION['numA']))
  {
	  include("vue/nav_connexion_admin.php");
  }
  ?>
          
            <img src="img/mairie15.png" width="100%"height="10%" >
			
<center>
<?php
	if(!isset($_SESSION['numA']))
	{
		include("vue/form_con_admin.php");
		include("vue/con_admin.php");		
	}
	
	//echo $_SESSION['numA']."<br><br><br>";
	
	if (isset($_SESSION['numA']))
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
							echo "
						<table>
							<tr>
								<td style='vertical-align:top;'>";
								include('vue/ajout_cantine.php');
								
								echo
								"</td> <td width='100px'>
								
								<td style='vertical-align:top;'>";
								include('vue/supprimer_cantine.php');
								echo "</td>
							</tr>
						</table>";
						
						
						
						
						if(isset($_POST['ajouter']))
						{
							$unControleur->setTable($_POST["uneTable"]);	
							if ($_POST["uneTable"] == "publique")
							{
								$tab = array("ville"=>$_POST['ville'],"codePostal"=>$_POST['codePostal'],"prix"=>$_POST['prix'],"reduction"=>$_POST['reduction']);	
							}
							else
							{
								$tab = array("ville"=>$_POST['ville'],"codePostal"=>$_POST['codePostal'],"prix"=>$_POST['prix'],"bourse"=>$_POST['bourse']);
							}
							 $unControleur->insert($tab);
							 echo "La cantine a bien été ajouté";
						}
										
										
						if(isset($_POST['supprimer']))
						{
							$unControleur->setTable("cantine");
							 $tab = array("idC"=>$_POST['idC']);
							 $unControleur->delete($tab);
						}
						include("vue/tableau_cantine.php");
						break;
					case 2:
						$unControleur->setTable("loisir");
						$lesLignes = $unControleur->selectALL();
						//var_dump($lesLignes);
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
						include("vue/tableau_loisir.php");
						
						
						break;
					
					case 3:
						
						echo "
						<table>
							<tr>
								<td style='vertical-align:top;'>";
								include('vue/ajout_evenement.php');
								
								echo
								"</td> <td width='100px'>
								
								<td style='vertical-align:top;'>";
								include('vue/supprimer_evenement.php');
								echo "</td>
							</tr>
						</table>";
						
						
						
						
						if(isset($_POST['ajouter']))
						{
							$unControleur->setTable($_POST["uneTable"]);	
							if ($_POST["uneTable"] == "interieur")
							{
								$tab = array("libelle"=>$_POST['libelle'],"lieu"=>$_POST['lieu'],"dateEV"=>$_POST['dateEV'],"superficie"=>$_POST['superficie']);	
							}
							else
							{
								$tab = array("libelle"=>$_POST['libelle'],"lieu"=>$_POST['lieu'],"dateEV"=>$_POST['dateEV'],"meteo"=>$_POST['meteo']);
							}
							 $unControleur->insert($tab);
							 echo "l'événement a bien été ajouté";
						}
										
						if(isset($_POST['supprimer']))
						{
							$unControleur->setTable("evenement");
							 $tab = array("idEV"=>$_POST['idEV']);
							 $unControleur->delete($tab);
						}
						include("vue/tableau_evenement.php");
						break;
					
					case 4:
						$unControleur->setTable("association");
						$lesLignes = $unControleur->selectALL();
						include("vue/ajout_association.php");
						if(isset($_POST['ajouter']))
						{
							 $tab = array("libelleA"=>$_POST['libelleA'],"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'],"codeP"=>$_POST['codeP'],"dateA"=>$_POST['dateA']);
							 $unControleur->insert($tab);
							 echo "L'association a bien été ajouté";
						}
						
						if(isset($_POST['supprimer']))
						{
							 $tab = array("idA"=>$_POST['idA']);
							 $unControleur->delete($tab);
						}
						include("vue/supprimer_association.php");
						include("vue/tableau_association.php");
						break;
					
					case 5:
						$unControleur->setTable("mariage");
						$lesLignes = $unControleur->afficher_mariage_admin();
						include ("vue/tableau_mariage.php");
						include("vue/ajout_mariage.php");
						if(isset($_POST['ajouter']))
						{
							 $tab = array("idP1"=>$_POST['idP1'],"idP2"=>$_POST['idP2'],"dateMariage"=>$_POST['dateMariage']);
							 $unControleur->insertMariage($tab);
							 echo "Le mariage a bien été ajouté";
						}
						
						if(isset($_POST['supprimer']))
						{
							 $tab = array("idP1"=>$_POST['idP1']);
							 $unControleur->delete($tab);
						}
						include("vue/supprimer_mariage.php");
						
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
						include("vue/ajouter_enfant.php");
						if(isset($_POST['ajouter']))
						{
							$tab = array("idP"=>$_POST['idP'],"nomE"=>$_POST['nomE'],"prenomE"=>$_POST['prenomE'],"sexe"=>$_POST['sexe']);
							 $unControleur->insertEnfant($tab);
							 echo "le loisir a bien été ajouté";
						}
						break;
					
					case 8:
						$unControleur->setTable("vstat");
						$lesLignes = $unControleur->selectALL();
						$unControleur->setTable("vassister");
						$lesLignes2 = $unControleur->selectALL();
						include ("vue/tableau_stat.php");
						break;
					
					case 10: session_destroy();
				}
		}
		
	?>
</center>
<br><br><br>
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
