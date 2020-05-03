

					
					<h1> Ajouter un événement </h1> </br>
                    <form method ="post" action ="">
					
						<label for="lieu">Lieu de l'événement : </label><input type='text' name='lieu' id="lieu"> </br>
					
					
						<label for="nom">Nom de l'événement </label><input type='text' name='libelle' id="nom"> </br>
					
					
						<label for="laDate">date de l'événement </label><input type='date' name='dateEV' id="laDate"> </br>
					
										
						<label for="leSelect">Type d'événement</label>
						<SELECT id="leSelect" name="uneTable" size="1" onChange="THEFUNCTION(this.selectedIndex);">
							<option value ='choix'>choix</option>
							<option value ='interieur'>intérieur</option>
							<option value ='exterieur'>extérieur</option>
						</SELECT>		</br>
					
					<div style="display:none;" id="divSuperficie">
						<label for="superficie"> Superficie </label>
						<input type='text' name='superficie' id="superficie"> 
					</div>
					
					<div style="display:none;" id="divMeteo">
						<label for="meteo"> Météo </label>
						<input type='text' name='meteo' id="meteo">
					</div>
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</br></br>
					
					<script src="scripts/select.js"></script>