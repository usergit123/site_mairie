
<center>
<h3> Voici les cantines </h3>

<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">

<thead>
		<tr>
				<th>Ville</th>
				<th>Code Postal</th>
				<th>Prix</th>
		</tr>
</thead>
<tbody>
					
					
					<?php
						foreach ($lesLignes as $uneLigne)
						{
							echo "<tr> <td>".$uneLigne['ville']."</td>
							<td>".$uneLigne['codePostal']."</td>
							<td>".$uneLigne['prix']."</td><tr>";
						}
					?>
</tbody>
									</table>
									</div>
									</center>
									</br>
									</br>
									
									
									
									
									
									
									
									
									
									
									





	

		
