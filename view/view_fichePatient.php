<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="card-panel #b2dfdb teal lighten-4">
        <?php
            echo "<tr><td>";
            echo "Numéro de sécurité sociale : {$patient->getNumSecu()} </br>
              Nom : {$patient->getNom()}</br>
              Prénom : {$patient->getPrenom()}</br>
              Date de naissance : {$patient->getDateNaissance()}</br>
              Téléphone : {$patient->getTel()}</br>
              Adresse : {$patient->getRue()}  {$patient->getCodePostal()}  {$patient->getVille()} </br>
              Qualité : {$patient->getQualite()}</br>
              Prescripteur : <a href=\"prescripteur.php?idprescripteur={$prescripteur->getNumeroIdentificateur()}\" class=\"waves - effect waves - light btn\">Voir le prescripteur</a></br>";
            echo "</td></tr>";
        echo "</table></div></div>";
        ?>
    </div>
</div>
<div class="right-align" style="margin-right: 40px">
    <a href="javascript:history.back()">
        <button class="btn waves-effect waves-light #4db6ac teal lighten-2" type="submit" name="action">Retour</button>
    </a>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>

