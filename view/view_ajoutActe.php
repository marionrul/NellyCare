<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <form action="controller/controllerActe.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="nom" placeholder="AMI6" id="nom" type="text" class="validate">
                <label for="nom">Nom de l'acte</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="designation" placeholder="Prise de sang" id="designation" type="text" class="validate">
                <label for="designation">Désignation</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="date_debut" type="date" class="datepicker">
                <label for="date_debut">Date de début</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="tarif" placeholder="25" id="tarif" type="text" class="validate">
                <label for="tarif">Tarif</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="prescription">
                <option value="" disabled selected>Choisissez la prescription</option>
                <?php
                foreach($prescriptions as $prescription) {
                    echo "<option value='{$prescription->getNumPrescription()}'>{$prescription->getNumPrescription()}</option>";
                }
                ?>
            </select>
            <label>Prescription</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
            <i class="material-icons right">envoyer</i>
        </button>
    </form>
</div>


<?php  include ('config/js_config.php')?>
</body>
</html>
