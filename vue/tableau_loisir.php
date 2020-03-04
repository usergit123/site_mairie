
					<center>
					<h3> Voici les loisirs </h3>
					<table border=1>
					<tr><td>Id Loisir </td> <td>Libelle</td>
					<td> Lieu</td> </tr>
					
					
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