
<h3> Voici les événements </h3>
<table border=1>
					<tr><td>Lieu </td> <td>Libelle</td>
					
					<?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['lieu']."</td>
						<td>".$uneLigne['libelle']."</td></tr>";
					}
					?>
					
					</table>
					</br>
					</br>