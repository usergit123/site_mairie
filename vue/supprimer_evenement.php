<h1> Supprimer un evenement </h1>
                    <form method ="post" action ="">
                    Evènement à supprimer : 
                    <td><SELECT name="idEV" size="1">
                    <?php
                    $connexion = mysqli_connect("localhost","root","","mairie");
                    $requete="select * from evenement;";
                    $resultats=mysqli_query($connexion,$requete);
                    while ($ligne = mysqli_fetch_assoc($resultats))
                            {
                                echo"<option value ='".$ligne["idEV"]."'>".$ligne["libelle"]."</option>";
                            }

                         ?>
                         </SELECT></td>
                    <input type ="reset" name ="Annuler" value ="Annuler">
                    <input type ="submit" name ="supprimer" value ="supprimer"><br/>
                    </form>