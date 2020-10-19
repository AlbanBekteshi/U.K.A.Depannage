<!DOCTYPE html>
<html lang="en">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<h1> Sociéte de dépannage auto</h1>
<p>U.K.A DEPANNAGE est une société de dépannage et remorquage de véhicules active partout en Belgique. Grâce à son expérience et son professionnalisme, le personnel de la société mettra à votre disposition toutes ses compétences afin de vous conseiller et d'exécuter les solutions qui répondront à vos situations de panne.</p>
<div class="container-fluide">
    <div class="row">
        <div class="col-sm-6" >
            <h1 class="a">Information de contact</h1>
            <p class="a"><span class="glyphicon glyphicon-envelope"></span> uka-depannage@hotmail.com </p>
            <p class="a"><span class="glyphicon glyphicon-earphone"></span> +32 492 31 09 33</p>
            <p class="a"><a href="https://www.facebook.com/" class="fa fa-facebook"> Facebook</a></p>
            <p class="a"><a href="https://instagram.com/uka_depannage?igshid=1ke7zun5t6f03" class="fa fa-instagram"> Instagram</a></p>

        </div>
        <div class="col-sm-6" >
            <h1 class="a"> Contactez-nous</h1>
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
    }

</style>
</html>
