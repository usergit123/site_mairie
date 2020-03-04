
					<center>
					<h3> Voici les loisirs </h3>
					<table class="unTypeDeTableau">
					<tr><th>Id Loisir </th> <th>Libelle</th>
					<th> Lieu</th> </tr>
					
					
					<?php

						foreach ($lesLignes as $uneLigne)
						{
							
							echo "<tr> <td>".$uneLigne['idL']."</td>
							<td>".$uneLigne['libelle']."</td>
							<td>".$uneLigne['lieu']."</td><td><a href='inscriptionLoisir.php'> s'inscrire </a></td><tr>";
							 
						}
						echo "</table>";
						echo "</br></br><a href='inscriptionLoisir.php'> s'inscrire à une activité </a>";
					?>
					
					</table>
					</center>
					</br>
					</br>
					
					
<style>
.unTypeDeTableau {
  width:400px;
  border-collapse: separate;
  border-spacing: 0px;
  border: 1px solid red;
}
.unTypeDeTableau th, .unTypeDeTableau td {
  border: 1px solid red;
}
</style>