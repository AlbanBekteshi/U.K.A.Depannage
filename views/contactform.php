<!-- A mettre dans les controllers -->
<?php

if (isset($_POST['submit'])){
    require 'PHPMailer/PHPMailerAutoload.php';

    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "albanbekteshi97@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Ta recu un msg a fd via Ukadep de".$name.".\n\n".$message;

    mail($mailTo,$txt,$headers);

    header("Location : inex.php?mailsend");
}