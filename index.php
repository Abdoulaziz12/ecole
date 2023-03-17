<?php
require_once'models/Models.class.php';

$mode= new Mode();
$result= $mode->ListCinqMeilleurEleve();
$resul= $mode->ListCinqMeilleurNote();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="../css/ecole.css">

</head>

<body>
<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   
                    <li class="nav-item">
                    <a style="color:white" class="nav-link active"  href="vues/list_eleve.php">Listes des eleves</a>
                    </li>
                   
                    <li class="nav-item">
                    <a style="color:white" class="nav-link active" href="vues/list_matiere.php">Listes des matières</a>
                    </li>
                    
                    <li class="nav-item">
                    <a style="color:white" class="nav-link active" href="vues/list_note.php">Listes des notes</a>
                    </li>

                    <li class="nav-item">
                    <a style="color:white" class="nav-link active" href="index.php">Listes des 5 meilleurs</a>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

<div style="margin-top:50px;" class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Listes des 5 meilleurs eleves</h1>
                <table  class="table table-bordered">
                            <thead>
                            <tr>
                                <th >Nom eleve</th>
                                <th >Moyenne</th>                   
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    foreach($result as $row){   ?>
                        
                                        <tr>
                                            <td ><?= $row['nom'].' '.$row['id_eleve'] ?></td>                              
                                            <td ><?= $row['moyenne'] ?></td>                                                            
                                                        
                                                    
                                        </tr>

                                    <?php  }
                                ?>
                            </tbody>
                    </table>
        </div>
        <div class="col-md-6">
            <h1>Listes des 5 meilleurs notes</h1>
                <table  class="table table-bordered">
                            <thead>
                            <tr>
                                <th >Nom eleve</th>
                                <th >Matiere</th>
                                <th >Note</th>                   
                                
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    
                                    foreach($resul as $row){   ?>
                        
                                        <tr>
                                            <td ><?= $row['nom'].' '.$row['id_eleve'] ?></td> 
                                            <td ><?= $row['matiere'] ?></td>                                                            
                                            <td ><?= $row['note'] ?></td>                                                            
                                                        
                                                    
                                        </tr>

                                    <?php  }
                                ?>
                            </tbody>
                    </table>
        </div>
    </div>
</div>



                