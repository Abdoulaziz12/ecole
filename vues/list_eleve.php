<?php
session_start();
    require_once'../models/Models.class.php';

    $mode= new Mode();
    $result= $mode->listEleve();
    include '../menu.php';

    if (isset($_SESSION['good'])) {       
       ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                 <?php echo $_SESSION['good']; ?>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
       <?php
        unset($_SESSION['good']);
    }
    if (isset($_SESSION['supprimer'])) {       
        ?>
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo $_SESSION['supprimer']; ?>.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
        <?php
         unset($_SESSION['supprimer']);
     }
?>

    <a style="margin-top:50px; margin-left:80px;float:right;" class="btn btn-dark" href="add_eleve" role="button">Ajouter</a>
    
        <h1>Listes des eleves</h1>
    
    <table class="table table-bordered">
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Classe</th>
                            <th>Actions</th>


                        </tr>

                <?php
                foreach($result as $row){
                ?>
                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenoms']?></td>
                    <td><?=$row['classe']?></td>
                    <td>
                    <a class="btn btn-info" href="list_note_eleve.php?id_eleve=<?=$row['id']?>"> <span class="glyphicon glyphicon-pencil"></span> Voir</a>
                        <a class="btn btn-primary" href=""> <span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                        <a class="btn btn-danger" href="delete_eleve.php?id_eleve=<?=$row['id']?>"> <span class="glyphicon glyphicon-remove"></span> Supprimer</a>                                                                           
                    </td>
                </tr>
                <?php }?>
            
    </table>
    
</body>
</html>

          