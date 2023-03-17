<?php
require_once '../models/Models.class.php';

include '../menu.php';
?>
   
    <div>
      
            <div style=" border: solid; height: 350px; margin: auto; width: 650px;background-color: #fff; margin-top: 50px; border-radius: 10px;  box-shadow: 15px 15px 20px; ">
                <form method="post" style="margin-left: 50px;" action="treat.php">
                	<center>
                		<h1>Notes</h1>               	
                              
                		<label for="">Eleve :</label>
	                    <select name="id_eleve" value="">
                        <option value="">Choisir un éleve</option>

                        <?php
                        
                        $model = new Mode();
                        $result = $model->listEleve();
                        foreach($result as $row){ 
                          
                        ?>
                        
                        <option value="<?= $row['id']?>"> <?= $row['nom'].' '. $row['prenoms'] ?></option>
                        <?php }?>
                      </select><br><br>

	                    <label for="">Matiere :</label>
	                    <select name="id_matiere" value="">
                        <option value="">Choisir un éleve</option>

                        <?php
                        
                        $model = new Mode();
                        $result = $model->listMatiere();
                        foreach($result as $row){ 
                          
                        ?>
                        
                        <option value="<?= $row['id']?>"> <?= $row['nom'] ?></option>
                        <?php }?>
                      </select><br><br>

                        <label for="">Note :</label>
	                    <input type="text" style="margin-left:10px;" name="note" id="note" maxlength="40" size="15" requcired>
	                    <br><br>
	                    
                          		<div style="margin-top: 25px; justify-content: center;">
		                			    <input type="submit" class="btn btn-success" name="btnAjouter" onclick="ControlerSaisie();" value="AJOUTER">
			                        <input type="submit" class="btn btn-primary" name="btnModifier" value="MODIFIER">
			                        <input type="submit" class="btn btn-danger" name="btnSupprimer" value="SUPPRIMER">
                				</div>
                    </center>                
                		   
                </form>
            </div>
    </div>
    
</body>
</html>