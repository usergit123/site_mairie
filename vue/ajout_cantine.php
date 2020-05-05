		<h1> Ajouter une cantine </h1> </br>
                    <form method ="post" action ="">
					
						
					
				
						<label for="ville">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;Ville : </label><input type='text' name='ville' id="ville"> </br>
						
					
						<label for="codePostal"> Code Postal : </label><input type='text' name='codePostal' id="codePostal"> </br>
					
										
						
						<label for="prix">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Prix : </label><input type='text' name='prix' id="prix"> </br>

						<label for="leSelect">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type de cantine : </label>
						<SELECT id="leSelect" name="uneTable" size="1" onChange="THEFUNCTION1(this.selectedIndex);">
							<option value ='choix'>Choix : </option>
							<option value ='publique'>Publique</option>
							<option value ='privee'>Privée</option>
						</SELECT>		</br>
					
					
					
					<div style="display:none;" id="divReduction">
						<label for="reduction"> Réduction </label>
						<input type='text' name='reduction' id="reduction">
					</div>

					<div style="display:none;" id="divBourse">
						<label for="bourse"> Bourse </label>
						<input type='text' name='bourse' id="bourse">
					</div>
					
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="ajouter" value ="ajouter"><br/>
                    </form>
					</br></br>
					
					<script src="scripts/select_cantine.js"></script>
					
					
				
					

					
