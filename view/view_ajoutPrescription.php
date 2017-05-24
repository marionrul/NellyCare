<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container">
    <form action="controller/controllerPrescription.php" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input name="date_debut" type="date" class="datepicker">
                <label for="date_debut">Date de début</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="patient">
                <option value="" disabled selected>Choisissez le patient</option>
                <?php
                foreach($patients as $patient) {
                    echo "<option value='{$patient->getNumSecu()}'>{$patient->getPrenom()} {$patient->getNom()}</option>";
                }
                ?>
            </select>
            <label>Patient</label>
        </div>
        <div class="input-field col s12">
            <select name="prescripteur">
                <option value="" disabled selected>Choisissez le prescripteur</option>
                <?php
                foreach($prescripteurs as $prescripteur) {
                    echo "<option value='{$prescripteur->getNumeroIdentificateur()}'>{$prescripteur->getPrenom()}  {$prescripteur->getNom()}</option>";
                }
                ?>
            </select>
            <label>Prescripteur</label>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="duree" placeholder="10" id="duree" type="text" class="validate">
                <label for="duree">Durée</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="nbSeances" placeholder="8" id="nbSeances" type="text" class="validate">
                <label for="nbSeances">Nombre de séances à effectuer</label>
            </div>
        </div>
        <div class="input-field col s12">
            <select name="periode">
                <option value="" disabled selected>Choisir la période</option>
                <option value="Tous les jours">Tous les jours</option>
                <option value="Toutes les semaines">Toutes les semaines</option>
                <option value="Tous les mois">Tous les mois</option>
            </select>
            <label>Période</label>
        </div>


        <button class="btn waves-effect waves-light" type="submit" name="submit">Envoyer
            <i class="material-icons right">envoyer</i>
        </button>
    </form>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>






