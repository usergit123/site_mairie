
<?php
//error_reporting(0);

?>


	
		
      	<bR>
      	<bR>
      	<bR>
      	<bR>


      	

      	    
      	        
      	        
      	          
      	            <H3><strong>Inscrivez-vous</strong></H3>
					<br><br>
      	          
      	          
      				<form method="post" action="">
			<table>
			
			<tr>
				<td><strong>Pseudo:</strong></td>
				<td>
				<input type="text" name="pseudo" placeholder="pseudo" />
				</td>
			</tr>
			
			<tr>
				<td><strong>MDP:</strong></td>
				<td>
				<input type="text" name="mdp" placeholder="mdp" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Nom:</strong></td>
				<td>
				<input type="text" name="nom" placeholder="nom" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Prenom:</strong></td>
				<td>
				<input type="text" name="prenom" placeholder="prenom" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Adresse:</strong></td>
				<td>
				<input type="text" name="adresse" placeholder="adresse" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Tel:</strong></td>
				<td>
				<input type="text" name="tel" placeholder="tel" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Code Postal:</strong></td>
				<td>
				<input type="text" name="cp" placeholder="code postal" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Email:</strong></td>
				<td>
				<input type="text" name="email" placeholder="email" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Date de naissance: </strong>&nbsp; </td>
				<td>
				<input type="date" name="datenaiss" placeholder="datenaiss" />
				</td>
			</tr>
			
			<tr>
				<td><strong>Fonction:	</strong></td>
				<td>
				<input type="text" name="fonction" placeholder="fonction" />
				</td>
			</tr>
			
			<tr>
				<td><Strong>sexe: </strong></td>
				<td>
				 Homme<input type="radio" name="sexe" value="homme" />
				Femme<input type="radio" name="sexe" value="femme" />
				</td>
			</tr>
			</table>
			
			
			
			
			
      		
            
            
            
            
            </br>


      							
      							<input type ="reset" name ="annuler" value ="Annuler" >
      							<input type ="submit" name ="valider" value="S'inscrire" >

      						
      					</form>
      	      
		
		<?php

		if(isset($_POST['valider']))
		{
			$pseudo=$_POST['pseudo'];
			$mdp=$_POST['mdp'];
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$adresse=$_POST['adresse'];
			$tel=$_POST['tel'];
			$cp=$_POST['cp'];
			$email=$_POST['email'];
			$datenaiss=$_POST['datenaiss'];
			$sexe=$_POST['sexe'];
			$fonction=$_POST['fonction'];
			

			

			$pseudo2 = $unControleur->verif_pseudo($pseudo);
			var_dump($pseudo2);
			
			if(empty($pseudo2))
			{
				echo "y a rien";
				$unControleur->setTable("personne");
				
				$tab = array("pseudo"=>$_POST['pseudo'],"mdp"=>$_POST['mdp'],"nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'],
				"adresse"=>$_POST['adresse'],"tel"=>$_POST['tel'],"cp"=>$_POST['cp'],"email"=>$_POST['email'],"datenaiss"=>$_POST['datenaiss'],
				"sexe"=>$_POST['sexe'],"fonction"=>$_POST['fonction']);
				
				$unControleur->insert($tab);
				echo "Votre inscription a bien été effectuée !";
			}else{
				echo "y a un truc";
			}

			
			
		}

		?>


