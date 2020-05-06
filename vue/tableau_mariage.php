					<center>
					<h2> Voici les mariages </h2> 
					
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">
					
					
					<tr><th> 1er marié(e) </th>
					 <th> 2ème marié(e)</th>
					 <th> date</th>
					 
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