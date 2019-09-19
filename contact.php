<?php
require('header.php');
?>

<section class="my-5">
    <div class="row">
        <div class="col-md-5 mx-auto my-3">
            <h1>Téléphone du professionnel</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 mx-auto">
            <button class="btn btn-outline-primary p-4 text-center btn-telephone font-weight-bold"><i class="fas fa-phone-alt"></i> 01.01.01.01.01.</button>
        </div>
    </div>
</section>


<?php

// span style="color: #808080; font-style: italic;">// S'il y des données de postées
// 'REQUEST_METHOD']=='POST') {

// (1) Code PHP pour traiter l'envoi de l'email

// Récupération des variables et sécurisation des données
// 'nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
// 'email''message']);

// Variables concernant l'email

$destinataire = 'magali.milbergue@hotmail.fr'; // Adresse email de l'artisan 
$sujet = 'Vous avez reçu un email de votre site'; // Titre de l'email
$contenu = '<html>

<head>
    <title>Titre du message</title>
</head>

<body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
    $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
    $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
    $contenu .= '<p><strong>Téléphone</strong>: ' . $telephone . '</p>';
    $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
    $contenu .= '</body>


</html>'; // Contenu du message de l'email (en XHTML)

// définition de l'entête (!!Obligatoire)
'MIME-Version: 1.0'."\r\n" . 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Envoyer l'email
// Fonction principale qui envoi l'email
'<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
// (2) Fin du code pour traiter l'envoi de l'email
?>


<section class="my-5">
    <form method="post">
        <div class="row">
            <div class="col-md-7 mx-auto my-3">
                <h1 class="text-center">Formulaire de contact et demande de devis</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <label for="nom">Votre nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Saisir nom">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <label for="email" class="my-2">Votre email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Saisir email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <label for="telephone" class="my-2">Votre téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Saisir téléphone">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <label for="message" class="my-2">Votre message</label>
                <textarea row="5" class="form-control" id="message" name="message" placeholder="Saisir votre téléphone"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto my-4">
                <button class="btn btn-outline-primary p-2 text-center font-weight-bold" type="submit" name="submit">Envoyer</button>
            </div>
        </div>
    </form>


</section>


<?php
require('footer.php');
?>