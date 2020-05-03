					
					<center>
					
					<table>
					<td style="vertical-align:top;">
					<h3>nombre d'événements par lieu </h3>
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
					</td>
					
					<td width="100px"></td>
					
					<td style="vertical-align:top;">
					<h3>nombre de personnes par événement</h3>
					<table border=1>
					<tr><td> libelle </td>
					 <td> nombre de participants </td></tr>
					 <?php
					foreach ($lesLignes2 as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['libelle']." </td>
						<td> ".$uneLigne['nbAssistants']." </td>
						</tr>";
					}
					?>
					</td>
					</table>
					</table>

					</center>