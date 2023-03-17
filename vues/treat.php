<?php
session_start();
require_once '../models/Models.class.php';
$model = new Mode();

if(!empty($_POST['nom']) AND !empty($_POST['prenoms']) AND !empty($_POST['classe'])){
    $nom = htmlspecialchars($_POST['nom']); 
    $prenoms = htmlspecialchars($_POST['prenoms']); 
    $classe = htmlspecialchars($_POST['classe']);
    $model->ajouterEleve($nom,$prenoms,$classe);
     $_SESSION['good']="Enregistrement effectué avec succes!";
    header("location:list_eleve.php");
}
// var_dump($_POST);
if(!empty($_POST['nom']) AND !empty($_POST['prof']) AND !empty($_POST['coefficient'])){
    $nom = htmlspecialchars($_POST['nom']); 
    $professeur = htmlspecialchars($_POST['prof']); 
    $coefficient = htmlspecialchars($_POST['coefficient']);

//    var_dump($nom, $professeur, $coefficient);
//    exit;


$model->ajouterMatiere($nom,$professeur,$coefficient);
header("location:list_matiere.php");
}

if(!empty($_POST['id_eleve']) AND !empty($_POST['id_matiere']) AND !empty($_POST['note'])){
    $id_eleve=htmlspecialchars($_POST['id_eleve']);
    $id_matiere=htmlspecialchars($_POST['id_matiere']);
    $note=htmlspecialchars($_POST['note']);
    
    $model->ajouterNote($id_eleve,$id_matiere,$note);
    header("location:list_note.php");
}
?>