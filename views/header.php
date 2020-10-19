<!DOCTYPE html>
<html lang="fr">
<head>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Carousel -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
                height: 300px;
            }

        </style>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <title>U.K.A. Dépannage</title>
    </head>
</head>

<header id="header">
    <nav>
        <div class="navbar navbar-custom">

                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php?action=homepage">Accueil</a>
                </div>
                <ul class="nav navbar-nav">
                    <a class="navbar-brand" href="index.php?action=homepage">Contact</a>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand">En panne? 0477 50 93 27</a>
                </ul>

    </nav>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo CHEMIN_VUES ?>images/dep1.jpeg" alt="Los Angeles" width="10" height="10">
            </div>
            <div class="carousel-item">
                <img src="<?php echo CHEMIN_VUES ?>images/dep4.jpeg" alt="Chicago" width="500" height="500">
            </div>

        </div>


    </div>
</header>

<!-- A essayé de mettre dans le css -->
<style>
    .navbar-custom{
        background-color: rgba(0,0,0,0.17);
    }
</style>