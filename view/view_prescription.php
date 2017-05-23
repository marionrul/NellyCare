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
              Actes : <a href=\"acte.php?idacte={$prescription['Nom_acte']}\" class=\"waves - effect waves - light btn\">Voir les actes</a></br>
              <a href=\"ajoutActe.php\" class=\"waves - effect waves - light btn\">Ajouter un acte</a></br>
              </br></div>";
        }
        ?>
        </ul>
    </div>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>