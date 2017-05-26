<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="col s12">
        <ul class="collection with-header">
            <li class="collection-header"><h4>Prescriptions</h4></li>
        <?php
        foreach ($prescriptions as $prescription) {
            echo "<div class=\"card-panel #b2dfdb teal lighten-4\">
              Patient : {$prescription['Nom'] } {$prescription['Prenom'] } </br>
              Date de début  : {$prescription['Date_debut']} </br>
              Durée de la prescription : {$prescription['Duree']}</br>
              Nombre de séances nécessaires : {$prescription['Nb_seances']}</br>
              Période : {$prescription['Periode']}</br>
              <a href=\"acte.php?idprescription={$prescription['Num_prescription']}\" class=\"waves - effect waves - light btn\">Voir les actes</a></br>
              <div class=\"right - align\" style=\"margin - right: 40px\"><a class=\"btn waves - effect waves - light\" href=\"controller/controllerSupprimerPrescription.php?idprescription={$prescription['Num_prescription']}\">Supprimer</a></div>
              </br></div>";
        }
        ?>
        </ul>
    </div>
</div>

<div class="left-align" style="margin-right: 40px">
    <a href="javascript:history.back()">
        <button class="btn waves-effect waves-light #4db6ac teal lighten-2" type="submit" name="action">Retour</button>
    </a>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>