<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <h1 class="thin">Modifier les informations</h1>

    <form action="controller/controllerModifierPatient.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="num" placeholder="6541236" id="num" type="text" class="validate" <?php echo"value=\"".$patient->getNumSecu()."\""; ?>>
                <label for="num">Numéro de sécurité sociale</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nom" placeholder="RUL" id="nom" type="text" class="validate" <?php echo"value='{$patient->getNom()}'";?>>
                <label for="nom">Nom </label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="prenom" placeholder="Nelly" id="prenom" type="text" class="validate" <?php echo"value='{$patient->getPrenom()}'" ?>>
                <label for="prenom">Prénom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="date" placeholder="08/04/1996" id="date" type="text" class="validate" <?php echo"value='{$patient->getDateNaissance()}'" ?>>
                <label for="date">Date de naissance</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="tel" placeholder="0645897563" id="tel" type="text" class="validate" <?php echo"value='{$patient->getTel()}'" ?>>
                <label for="tel">Numéro de téléphone</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="rue" placeholder="12 rue des tulipes" id="rue" type="text" class="validate" <?php echo"value='{$patient->getRue()}'" ?>>
                <label for="rue">Rue</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="cp" placeholder="34500" id="cp" type="text" class="validate" <?php echo"value='{$patient->getCodePostal()}'" ?>>
                <label for="cp">Code postal</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="ville" placeholder="Béziers" id="ville" type="text" class="validate" <?php echo"value='{$patient->getVille()}'" ?>>
                <label for="ville">Ville</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="qualite">
                <option value=<?php echo "\"".$patient->getQualite()."\"";?>  selected><?php echo $patient->getQualite(); ?></option>
                <option value="Assure">Assuré(e)</option>
                <option value="Fils">Fils</option>
                <option value="Marie">Marié(e)</option>
            </select>
            <label>Qualité</label>
        </div>
        <div class="input-field col s12 m6">
            <select name="mutuelle">
                <?php if($mutuelle!=""){
                    ?>
                <option value=<?php echo "\"".$mutuelle->getNumeroMutuelle()."\"";?> selected><?php echo $mutuelle->getNom(); ?></option>
                <?php
                }else{?>
                 <option value="" disabled selected>Choisissez la mutuelle</option>
                <?php
                }?>

                <?php
                foreach($mutuelles as $mutuelle) {
                    echo "<option value='{$mutuelle->getNumeroMutuelle()}'>{$mutuelle->getNom()}</option>";
                }
                ?>
            </select>
            <label>Mutuelle</label>
        </div>
        <div class="input-field col s12 ">
            <select name="caisse">
                <?php if($caisse!=""){
                    ?>
                    <option value=<?php echo "\"".$caisse->getNumeroCaisse()."\"";?> selected><?php echo $caisse->getNom(); ?></option>
                    <?php
                }else{?>
                    <option value="" disabled selected>Choisissez la caisse</option>
                    <?php
                }?>

                <?php
                foreach($caisses as $caisse) {
                    echo "<option value='{$caisse->getNumeroCaisse()}'>{$caisse->getNom()}</option>";
                }
                ?>
            </select>
            <label>Caisse</label>
        </div>

        <button class="btn waves-effect waves-light" type="submit" name="submit">Modifier
            <i class="material-icons right">envoyer</i>
        </button>
    </form>

</div>

<?php  include ('config/js_config.php')?>
</body>
</html>
