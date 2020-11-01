<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo CHEMIN_VUES ?>images/dep1.jpeg" alt="Los Angeles" width="1110" height="1">
        </div>
        <div class="carousel-item">
            <img src="<?php echo CHEMIN_VUES ?>images/dep4.jpeg" alt="Chicago" width="1100" height="1">
        </div>

    </div>
</div>

<h1 class="b"> Sociéte de dépannage auto</h1>
<p class="b">U.K.A DEPANNAGE est une société de dépannage et remorquage de véhicules active partout en Belgique. Grâce à son expérience et son professionnalisme, le personnel de la société mettra à votre disposition toutes ses compétences afin de vous conseiller et d'exécuter les solutions qui répondront à vos situations de panne.</p>
<div class="container-fluide">
    <div class="row">
        <div class="col-sm-6" >
            <h1 class="a">Information de contact</h1>
            <p class="a"><a href="mailto:uka-depannage@hotmail.com"><span class="glyphicon glyphicon-envelope"></span> uka-depannage@hotmail.com</a></p>
            <p class="a"><a href="tel:0032492310933"><span class="glyphicon glyphicon-earphone" ></span> +32 492 31 09 33</a></p>
            <p class="a"><a href="https://www.facebook.com/" class="fa fa-facebook"> Facebook</a></p>
            <p class="a"><a href="https://instagram.com/uka_depannage?igshid=1ke7zun5t6f03" class="fa fa-instagram"> Instagram</a></p>

        </div>
        <div class="col-sm-6" >
            <h1 class="a" id="contact"> Contactez-nous</h1>
            <form class="contact-form" action="contactform.php" method="post">
                <input type="text" name="name" class="form-control" id="usr" placeholder="email">
                <p></p>
                <input type="text" name="mail" placeholder="Votre email" class="form-control" >
                <p></p>
                <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
                <button type="submit"  name="submit" class="btn btn-default">Envoi</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<style>
    h1.a, p.a {
        text-align: center;
        font-family: Bahnschrift ;

    }
    h1.b{
        font-family: Bahnschrift ;
        padding-left: 0.2em;

    }
    p.b{
        padding-left: 1em;
        padding-right: 1em;
    }
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }


</style>
</html>
