					
					<center>
					
					<table>
					<td style="vertical-align:top;">
					<h3>nombre d'événements par lieu </h3>
					
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
					
					<tr>
					<th> lieu </th>
					 <th> nombre d'événement </th>
					 </tr>
					 
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
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">


					<tr>
					<th> libelle </th>
					<th> nombre de participants </th>
					</tr>
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