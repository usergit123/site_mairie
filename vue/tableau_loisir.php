
					<center>
					<h3> Voici les loisirs </h3>
					<div class="table-responsive" id="sailorTableArea">
<table id="sailorTable" class="table table-striped table-bordered" width="25%">

<thead>
					<tr>
						<th>Id Loisir </th> 
						<th>Libelle</th>
						<th> Lieu</th> 
						<th> Inscrivez-vous ici</th> 
					</tr>
</thead>
<tbody>
					
					<?php
						$num=0;
						foreach ($lesLignes as $uneLigne)
						{
							$num++;
							echo "<tr> <td>".$uneLigne['idL']."</td>
							<td>".$uneLigne['libelle']."</td>
							<td>".$uneLigne['lieu']."</td><td><a href='index.php?page=2&num=".$num."'> s'inscrire </a></td><tr>";
							 
						}
						echo "</table>";
						//echo "</br></br><a href='inscriptionLoisir.php'> s'inscrire à une activité </a>";
					?>
</tbody>
					
					</table>
					</center>
					</br>
					</br>
					
					
<style>
.unTypeDeTableau {
  width:400px;
  border-collapse: separate;
  border-spacing: 0px;
  border: 1px solid red;
}
.unTypeDeTableau th, .unTypeDeTableau td {
  border: 1px solid red;
}
</style>