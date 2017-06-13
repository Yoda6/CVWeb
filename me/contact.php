<?php
        $destinataire = 'contact@antoinebastin.fr';
        $email = 'mail@antoinebastin.fr';
        $sujet = 'Contact: '.stripslashes($_POST['name'])." - Téléphone : ".stripslashes($_POST['phone']);
        $message = stripslashes($_POST['message']);
        $headers = "From: <".$email.">\n";
        $headers .= "Reply-To: ".$email."\n";
        $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
        mail($destinataire,$sujet,$message,$headers);
?>