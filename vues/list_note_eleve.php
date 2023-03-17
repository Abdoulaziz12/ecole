<?php
require_once'../models/Models.class.php';

$mode= new Mode();
$resut= $mode->listNoteParEleve($_GET['id_eleve']);
?>
<?php
include '../menu.php';
?>
 <a style="margin-top:50px; margin-left:80px;float:right;" class="btn btn-dark" href="add_note" role="button"><span class="bx bx-plus"></span> Ajouter</a>


<h1>Listes des Notes</h1>

<table  class="table table-bordered">
                <thead>
                <tr>
                    <th >Nom eleve</th>
                    <th >Note</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($resut as $row){   ?>
            
                            <tr>
                                <td ><?= $row['nom'].' '.$row['prenoms']?></td>                               
                                <td ><?= $row['note'] ?></td>                              
                              
                            </tr>

                        <?php  }
                    ?>

                
                
                </tbody>