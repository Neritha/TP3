<?php session_start();?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.2/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <a class="navbar-brand" href="index.php">Ma bibliothèque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i> Gestion des genres</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="listeGenres.php"><i class="fas fa-list-ul"></i> Liste des genres</a>
                      <a class="dropdown-item" href="formGenre.php?action=Ajouter"><i class="fas fa-plus-circle"></i> Ajouter un genre</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> Gestion des auteurs</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="#"><i class="fas fa-list-ul"></i> Liste des auteurs</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i> Ajouter un auteur</a>
                      <a class="dropdown-item" href="#"><i class="fas fa-search"></i> Rechercher un auteur</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> Gestion des nationalités</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="listeNationalites.php"><i class="fas fa-list-ul"></i> Liste des nationalités</a>
                      <a class="dropdown-item" href="formNationalite.php?action=Ajouter"><i class="fas fa-plus-circle"></i> Ajouter une nationalité</a>
                  </div>
              </li>
          </ul>
      </div>
  </nav>