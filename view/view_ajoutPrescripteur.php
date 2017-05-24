<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <h1 class="thin">Ajouter un prescripteur</h1>
    <form action="controller/controllerPrescripteur.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input name="num" placeholder="6541236" id="num" type="text" class="validate">
                <label for="num">Numéro d'identificateur</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="nom" placeholder="RUL" id="nom" type="text" class="validate">
                <label for="nom">Nom </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="prenom" placeholder="Nelly" id="prenom" type="text" class="validate">
                <label for="prenom">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="specialite" placeholder="Cardiologue" id="specialite" type="text" class="validate">
                <label for="date">Spécialité</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="rue" placeholder="12 rue des tulipes" id="rue" type="text" class="validate">
                <label for="rue">Rue</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="cp" placeholder="34500" id="cp" type="text" class="validate">
                <label for="cp">Code postal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="ville" placeholder="Béziers" id="ville" type="text" class="validate">
                <label for="ville">Ville</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="tel" placeholder="0645897563" id="tel" type="text" class="validate">
                <label for="tel">Numéro de téléphone</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
            <i class="material-icons right">envoyer</i>
        </button>
    </form>
</div>

<div class="left-align" style="margin-right: 40px">
    <a href="javascript:history.back()">
        <button class="btn waves-effect waves-light #4db6ac teal lighten-2" type="submit" name="action">Retour</button>
    </a>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>