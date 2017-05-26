<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <h1 class="thin">Ajouter un patient</h1>
    <form action="controller/controllerPatient.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="num" placeholder="6541236" id="num" type="text" class="validate">
                <label for="num">Numéro de sécurité sociale</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nom" placeholder="RUL" id="nom" type="text" class="validate">
                <label for="nom">Nom </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="prenom" placeholder="Nelly" id="prenom" type="text" class="validate">
                <label for="prenom">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="date" placeholder="08/04/1996" id="date" type="text" class="validate">
                <label for="date">Date de naissance</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="tel" placeholder="0645897563" id="tel" type="text" class="validate">
                <label for="tel">Numéro de téléphone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="rue" placeholder="12 rue des tulipes" id="rue" type="text" class="validate">
                <label for="rue">Rue</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="cp" placeholder="34500" id="cp" type="text" class="validate">
                <label for="cp">Code postal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="ville" placeholder="Béziers" id="ville" type="text" class="validate">
                <label for="ville">Ville</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="qualite">
                <option value="" disabled selected>Qualité</option>
                <option value="Assure">Assuré(e)</option>
                <option value="Fils">Enfant</option>
                <option value="Marie">Conjoint</option>
            </select>
            <label>Qualité</label>
        </div>
        <div class="input-field col s12">
            <select name="mutuelle">
                <option value="" disabled selected>Choisissez la mutuelle</option>
                <?php
                foreach($mutuelles as $mutuelle) {
                    echo "<option value='{$mutuelle->getNumeroMutuelle()}'>{$mutuelle->getNomMutuelle()}</option>";
                }
                ?>
            </select>
            <label>Mutuelle</label>
        </div>
        <div class="input-field col s12">
            <select name="caisse">
                <option value="" disabled selected>Choisissez la caisse</option>
                <?php
                foreach($caisses as $caisse) {
                    echo "<option value='{$caisse->getNumeroCaisse()}'>{$caisse->getNomCaisse()}</option>";
                }
                ?>
            </select>
            <label>Caisse</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
            <i class="material-icons right">envoyer</i>
        </button>
    </form>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>

