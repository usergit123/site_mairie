					<center>
					<h2> Voici les mariages </h2> 
					
					<table border=1>
					<tr><td> 1er marié(e) </td>
					 <td> 2ème marié(e)</td>
					 <td> date</td>
					 
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> 
								<td>".$uneLigne['a']." </td>
								<td> ".$uneLigne['b']." </td>
								<td> ".$uneLigne['dateMariage']." </td>
							</tr>";
					}
					?>
					</table>
					</center>
					
					</br>
					</br>