<?php
require_once '../models/Models.class.php';
$model = new Mode();
$id=(int)htmlspecialchars($_GET['id_matiere']);
$model->supprimerMatiere($id);
header("location:list_matiere.php");
?>