<?php
include '../menu.php';
?>
   
    <div>
            <div style=" border: solid; height: 350px; margin: auto; width: 650px;background-color: #fff; margin-top: 50px; border-radius: 10px;  box-shadow: 15px 15px 20px; ">
                <form method="post" style="margin-left: 50px;" action="treat.php">
                	<center>
                		<h1>Informations etudiants</h1>
                	
                
                
                		<label for="">Nom :</label>
	                    <input type="" style=" width: 150px; margin-left:30px;" name="nom" id="nom" maxlength="50" size="50" requcired >
	                    <br><br>

	                    <label for="">Prenoms :</label>
	                    <input type="text" style="margin-left:10px;" name="prenoms" id="prenoms" maxlength="40" size="15" requcired>
	                    <br><br>

                        <label for="">Classe :</label>
	                    <input type="text" style="margin-left:25px;" name="classe" id="classe" maxlength="40" size="15" requcired>
	                    <br><br>
	                    
                          		<div style="margin-top: 25px; justify-content: center;">
		                			<input type="submit" class="btn btn-success" name="btnAjouter" value="AJOUTER">
			                        <input type="submit" class="btn btn-primary" name="btnModifier" value="MODIFIER">
			                        <input type="submit" class="btn btn-danger" name="btnSupprimer" value="SUPPRIMER">
                				</div>
                    </center>                
                		   
                </form>
            </div>
    </div>
   
</body>
</html>