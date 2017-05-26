<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <h1 class="thin">Modifier les informations</h1>

    <form action="controller/controllerModifierPrescripteur.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="num" placeholder="6541236" id="num" type="text" class="validate" <?php echo"value=\"".$prescripteur->getNumeroIdentificateur()."\""; ?>>
                <label for="num">Numéro d'identificateur</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nom" placeholder="RUL" id="nom" type="text" class="validate" <?php echo"value='{$prescripteur->getNom()}'";?>>
                <label for="nom">Nom </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="prenom" placeholder="Nelly" id="prenom" type="text" class="validate" <?php echo"value='{$prescripteur->getPrenom()}'" ?>>
                <label for="prenom">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="specialite" placeholder="Cardiologue" id="specialite" type="text" class="validate" <?php echo"value='{$prescripteur->getSpecialite()}'" ?>>
                <label for="specialite">Specialite</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="rue" placeholder="12 rue des tulipes" id="rue" type="text" class="validate" <?php echo"value='{$prescripteur->getRue()}'" ?>>
                <label for="rue">Rue</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="cp" placeholder="34500" id="cp" type="text" class="validate" <?php echo"value='{$prescripteur->getCodePostal()}'" ?>>
                <label for="cp">Code postal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="ville" placeholder="Béziers" id="ville" type="text" class="validate" <?php echo"value='{$prescripteur->getVille()}'" ?>>
                <label for="ville">Ville</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="tel" placeholder="0645897563" id="tel" type="text" class="validate" <?php echo"value='{$prescripteur->getTel()}'" ?>>
                <label for="tel">Numéro de téléphone</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="submit">Modifier
            <i class="material-icons right">envoyer</i>
        </button>
    </form>

</div>

<?php  include ('config/js_config.php')?>
</body>
</html>