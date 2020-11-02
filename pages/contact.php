
<div id="wrap_contact">

<div id="contact_infos">
    <p>
    <label for="comments">Vous avez des commentaires ou des questions ? Ils nous intéressent, mais veillez à ne pas communiquer d’informations sensibles. Consultez également les Infos consommateurs.</label>
    </p>
</div>

<!-- Formulaire de contact -->
<div id="contact_form">
    <form method="post" action="">
    <textarea type="text" name="commentaire" id="commentaire" placeholder="Insérez vos commentaires ici..." autofocus required ><?php if (isset($_POST[
    'commentaire'])) echo htmlspecialchars($_POST['commentaire']);?></textarea>
    <input id="submit" type="submit" value="Envoyer" name="mailform" />
    </form>
</div>

<!-- Fonctions PHP pour l'envoi du mail -->
<?php
    if(isset($_POST['commentaire'])) {
    
        $email = "nasfernane@gmail.com";
        $email_to = "nasfernane@gmail.com";
        $email_subject = "Le sujet de votre email";
    
        function died($error) {
            // Messages d'erreur
            echo "Nous sommes désolés, mais des erreurs ont été détectées dans le formulaire que vous avez envoyé. ";
            echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
            echo $error."<br /><br />";
            echo "Merci de corriger ces erreurs.<br /><br />";
            die();
        }
    
        // si la validation des données attendues existe
        if(!isset($_POST['commentaire'])) {
            died('Nous sommes désolés, mais le formulaire que vous avez soumis semble poser problème.');
        }
    
        $commentaire = $_POST['commentaire']; // required
    
        $error_message = "";
    
        // Prend les caractères alphanumériques + le point et le tiret 6
        $string_exp = "/^[A-Za-z0-9 .'-]+$/";
    
        if(strlen($commentaire) < 2) {
            $error_message .= 'Le commentaire que vous avez entré ne semble pas être valide.<br />';
        }
    
        if(strlen($error_message) > 0) {
            died($error_message);
        }
    
        $email_message = "Détail.\n\n";
        $email_message .= "Commentaire : ".$commentaire."\n";

        // create email headers
        $headers = 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_subject, $email_message, $headers);
        echo("<p id=\"message_remerciement\">Votre message a bien été envoyé.</p>");
    
    }	
?>
    
</div>

