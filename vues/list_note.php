<?php
require_once'../models/Models.class.php';

$mode= new Mode();
$result= $mode->listNote();
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
                    <th >Nom Matiere</th>
                    <th >Notes</th>                   
                    <th >Date de composition</th>
                   
                </tr>
                </thead>
                <tbody>
                    <?php
                        
                        foreach($result as $row){   ?>
            
                            <tr>
                                <td ><?= $row['nom'].' '.$row['id_eleve'] ?></td>
                                <td ><?= $row['id_matiere'] ?></td>                               
                                <td ><?= $row['note'] ?></td>                              
                                <td ><?= $row['date_compo'] ?></td>                              
                                               
                                        
                            </tr>

                        <?php  }
                    ?>

                
                
                </tbody>