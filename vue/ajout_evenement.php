

					<center>
					<h1> Ajouter un évènement </h1>
                    <form method ="post" action ="">
                    <tr>Lieu de l'événement : <input type='text' name='lieu'> </tr>
                    <tr>Nom de l'événement <input type='text' name='libelle'> </tr>
					<tr>date de l'événement <input type='date' name='dateEV'> </tr>
					
					<tr>Type d'évènement<SELECT name="uneTable" size="1">
					<option value ='choix'>choix</option>
                    <option value ='interieur'><form method ="post" action =""><input type ="submit" name ="interieur" value ="interieur"></form></option>
					<option value ='exterieur'>exterieur</option>
                    </SELECT></tr>
					<?php
					if (isset($_POST['interieur']))
					{
						echo "<tr>superficie <input type='text' name='superficie'> </tr>";        				
						 
					}
					
					?>
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</center>