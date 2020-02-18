

					<center>
					<h1> Ajouter un évènement </h1>
                    <form method ="post" action ="">
					<div>
						Lieu de l'événement : <input type='text' name='lieu'> 
					</div>
					<div>
						Nom de l'événement <input type='text' name='libelle'>
					</div>
					<div>
						date de l'événement <input type='date' name='dateEV'>
					</div>
					<div>					
						Type d'événement<SELECT id="leSelect" name="uneTable" size="1" onChange="THEFUNCTION(this.selectedIndex);">
							<option value ='choix'>choix</option>
							<option value ='interieur'>intérieur</option>
							<option value ='exterieur'>extérieur</option>
						</SELECT>		
					</div>
					<div style="display:none;" id="divSuperficie">
						Superficie <input type='text' name='superficie'> 
					</div>
					
					<div style="display:none;" id="divMeteo">
						Meteo <input type='text' name='meteo'>
					</div>
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</center>
					
					<script src="scripts/select.js"></script>