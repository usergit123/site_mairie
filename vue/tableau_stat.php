<table border=1>
					<tr><td> lieu </td>
					 <td> nombre d'événement </td></tr>
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['lieu']." </td>
						<td> ".$uneLigne['nb_Evenement']." </td>
						</tr>";
					}
					?>
					</table>
