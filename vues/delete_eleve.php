<?php
session_start();
require_once '../models/Models.class.php';
$model = new Mode();
$id=(int)htmlspecialchars($_GET['id_eleve']);
$model->supprimerEleve($id);
header("location:list_eleve.php");
$_SESSION['supprimer']="Suppression réussie!";

?>