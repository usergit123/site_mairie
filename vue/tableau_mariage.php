					
					<h2> Voici les mariages </h2> 
					
					<table border=1>
					<tr><td> nom 1er marié(é) </td>
					 <td> prenom 1er marié(é)</td>
					 <td> nom 2ème marié(é) </td>
					 <td> prenom 2ème marié(é) </td>
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['a']." </td>
						<td> ".$uneLigne['b']." </td>
						<td>".$uneLigne['c']." </td>
						<td>".$uneLigne['d']." </td>
						</tr>";
					}
					?>
					</table>
					</br>
					</br>