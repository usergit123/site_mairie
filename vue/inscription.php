
<?php
//error_reporting(0);

?>


	
		
      	<bR>
      	<bR>
      	<bR>
      	<bR>


      	<div class="container">

      	    <div class="row">
      	        <div class="col-md-4 offset-md-4">
      	        <div class="card text-center card  bg-default mb-3">
      	          <div class="card-header">
      	            Inscrivez-vous
      	          </div>
      	          <div class="card-body">
      				<form method="post" action="">
			<input type="text" name="pseudo" class="form-control input-sm chat-input" placeholder="pseudo" />
			</br>
			<input type="text" name="mdp" class="form-control input-sm chat-input" placeholder="mdp" />
			</br>
			<input type="text" name="nom" class="form-control input-sm chat-input" placeholder="nom" />
			</br>
            <input type="text" name="prenom" class="form-control input-sm chat-input" placeholder="prenom" />
			</br>
			<input type="text" name="adresse" class="form-control input-sm chat-input" placeholder="adresse" />
			</br>
      		<input type="text" name="tel" class="form-control input-sm chat-input" placeholder="tel" />
      		</br>
            <input type="text" name="cp" class="form-control input-sm chat-input" placeholder="code postal" />
            </br>
			<input type="text" name="email" class="form-control input-sm chat-input" placeholder="email" />
            </br>
			<input type="date" name="datenaiss" class="form-control input-sm chat-input" placeholder="datenaiss" />
            </br>
			<input type="text" name="sexe" class="form-control input-sm chat-input" placeholder="sexe" />
            </br>
			<input type="text" name="fonction" class="form-control input-sm chat-input" placeholder="fonction" />
            </br>


      							<div class="card-footer text-muted">
      							<input type ="reset" name ="annuler" value ="Annuler" class="btn btn-secondary">
      							<input type ="submit" name ="valider" value="S'inscrire" class="btn btn-secondary">

      						</div>
      					</form>
      	        </div>
      	    </div>
      	    </div>
      	</div>
		
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


