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
<h2> Societe de depannage auto</h2>
<p>KMR DEPANNAGE est une société de dépannage et remorquage de véhicules active partout en Belgique. Grâce à son expérience et son professionnalisme, le personnel de la société mettra à votre disposition toutes ses compétences afin de vous conseiller et d'exécuter les solutions qui répondront à vos situations de panne.</p>
<div class="container-fluide">
    <div class="row">
        <div class="col-sm-6" >
            <h1>Information de contact</h1>
            <p><span class="glyphicon glyphicon-envelope"></span> uka-depannage@hotmail.com </p>
            <p><span class="glyphicon glyphicon-earphone"></span> +32 492 31 09 33</p>
        </div>
        <div class="col-sm-6" >
            <h1> Contactez-nous</h1>
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
</html>
