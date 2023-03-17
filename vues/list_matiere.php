<?php
require_once'../models/Models.class.php';

$mode= new Mode();
$result= $mode->listMatiere();
?>
<?php
include '../menu.php';
?>
    <a style="margin-top:50px; margin-left:80px;float:right;" class="btn btn-dark" href="add_matiere" role="button"><span class="bx bx-plus"></span> Ajouter</a>


<h1>Listes des matieres</h1>

        

    <table class="table table-bordered">
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Professeur</th>
                            <th>Coefficient</th>
                            <th>Actions</th>

                            
                        </tr>

                <?php
                foreach($result as $row){
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['professeur']?></td>
                    <td><?=$row['coefficient']?></td>
                    <td>
                        <a class="btn btn-info" href="list_note_matiere?id_matiere=<?=$row['id']?>"> <span class="glyphicon glyphicon-pencil"></span> Voir</a>
                        <a class="btn btn-danger" href="delete_matiere.php?id_matiere=<?=$row['id']?>"> <span class="glyphicon glyphicon-remove"></span> Supprimer</a>                                                                           
                    </td>
                </tr>
                <?php }?>
            
    </table>
    
</body>
</html>

          