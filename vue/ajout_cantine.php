		<h1> Ajouter une cantine </h1> </br>
                    <form method ="post" action ="">
					
					<table>
					<tr>
					<td><label for="ville">Ville : </label></td>				<td><input type='text' name='ville' id="ville"></td>
					</tr>
					
					<tr>
						<td><label for="codePostal"> Code Postal : </label></td>			<td><input type='text' name='codePostal' id="codePostal"></td>
					</tr>
					
					<tr>
						<td><label for="prix">Prix : </label></td>			<td><input type='text' name='prix' id="prix"></td>
					</tr>
					
					<tr>
						<td><label for="leSelect">Type de cantine : </label></td>			<td><SELECT id="leSelect" name="uneTable" size="1" onChange="THEFUNCTION1(this.selectedIndex);">
																									<option value ='choix'>Choix : </option>
																									<option value ='publique'>Publique</option>
																									<option value ='privee'>Privée</option>
																								</SELECT></td>
					</tr>
					
					<tr>
						<td></td>			<td></td>
					</tr>
					
					
					</table>
					
						
					
				
						
						
					
						
					
										
						
						

						
								
					
					
					
					<div style="display:none;" id="divReduction">
						<label for="reduction"> Réduction : </label>
						<input type='text' name='reduction' id="reduction">
					</div>

					<div style="display:none;" id="divBourse">
						<label for="bourse"> Bourse : </label>
						<input type='text' name='bourse' id="bourse">
					</div>
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</br></br>
					
					<script src="scripts/select_cantine.js"></script>
					
					
				
					

					
