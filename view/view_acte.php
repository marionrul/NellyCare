<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="card-panel #b2dfdb teal lighten-4" style="width : 20%">
        <?php
        echo "<tr><td>";
                echo "Nom  : {$acte->getNomActe()} </br>
              Désignation : {$acte->getDesignation()}</br>
              Date de début : {$acte->getDateDebut()}</br>
              Tarif appliqué : {$acte->getTarif()}</br>
              </br>";
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

