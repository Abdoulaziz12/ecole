<?php
require_once'../models/Models.class.php';

$mode= new Mode();
$result= $mode->listNoteParMatiere($_GET['id_matiere']);
?>
<?php
include '../menu.php';
?>
 <a style="margin-top:50px; margin-left:80px;float:right;" class="btn btn-dark" href="add_note" role="button"><span class="bx bx-plus"></span> Ajouter</a>


<h1>Listes des Notes</h1>

<table  class="table table-bordered">
                <thead>
                <tr>
                    <th >Matiere</th>
                    <th >Note</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($result as $row){   ?>
            
                            <tr>
                                <td ><?= $row['matiere'] ?></td>                               
                                <td ><?= $row['note'] ?></td>                              
                              
                            </tr>

                        <?php  }
                    ?>

                
                
                </tbody>