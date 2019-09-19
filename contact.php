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





<section class="my-5">
    <form id="contact" method="post" action="traitement_formulaire.php">
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
                <label for="objet" class="my-2">Votre demande</label>
                <input type="text" class="form-control" id="objet" name="objet" placeholder="Saisir l'objet du mail">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto">
                <label for="message" class="my-2">Votre message</label>
                <textarea row="5" class="form-control" id="message" name="message" placeholder="Saisir votre message"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mx-auto my-4">
                <button class="btn btn-outline-primary p-2 text-center font-weight-bold" type="submit" name="envoi">Envoyer</button>
            </div>
        </div>
    </form>


</section>


<?php
require('footer.php');
?>