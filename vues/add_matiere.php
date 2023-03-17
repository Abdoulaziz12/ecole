

<?php
include '../menu.php';
?>
    <div>
            <div style=" border: solid; height: 350px; margin: auto; width: 400px;background-color: #fff; margin-top: 50px; border-radius: 10px;  box-shadow: 15px 15px 20px; ">
                <form method="post" style="margin-left: 50px;" action="treat.php">
                	<center>
                		<h1>Matieres</h1>
                	</center>
                
                        <label for="">Nom :</label>
                        <input type="text" style="margin-left:55px;" name="nom" id="nom" maxlength="40" size="15" required>
                        <br><br>
                		                        
	                        
                        

	                    
	                    <label for="">Professeurs :</label>
                        <input type="text" style="margin-left:10px;" name="prof" id="prof" maxlength="40" size="15" required>
                        <br><br>

                       
                	
                		
                        <label for="">Coefficient :</label>
                        <input type="text" style="margin-left:20px;" name="coefficient" id="coefficient" maxlength="40" size="10" required>
                        <br><br>

	                   
                	
                          <center>
                          		<div style="margin-top: 25px; justify-content: center;">
		                			<input type="submit" class="btn btn-success" name="btnAjoute" value="AJOUTER">
			                        <input type="submit" class="btn btn-primary" name="btnModifie" value="MODIFIER">
			                        <input type="submit" class="btn btn-danger" name="btnSupprime" value="SUPPRIMER">
                				</div>
                          </center>                
                		
                        
                        
                        
                </form>                         
</body>
</html>