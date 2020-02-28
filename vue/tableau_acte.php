					<h1> Voici les actes </h1>
					<center>
					<table border=1>
					<tr><td> id acte </td>
					 <td> id personne </td>
					 <td> date de mariage </td>
					 <td> date de naissance </td>
					 <td> date de décès </td>
					 <?php
					foreach ($lesLignes as $uneLigne)
					{
						echo "<tr> <td>".$uneLigne['idF']." </td>
						<td> ".$uneLigne['idP']." </td>
						<td>".$uneLigne['mariage']." </td>
						<td>".$uneLigne['naissance']." </td>
						<td>".$uneLigne['deces']." </td>
						</tr>";
					}
					?>
				</table>
				</center>
				
				</br>
				</br>