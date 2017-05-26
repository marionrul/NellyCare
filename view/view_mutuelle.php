<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="col s6">
        <?php
        echo "<tr><td>";
        echo "<div class=\"card-panel #b2dfdb teal lighten-4\">
              Numéro de la mutuelle : {$mutuelle->getNumeroMutuelle()} </br>
              Nom : {$mutuelle->getNomMutuelle()}</br>
              Adresse : {$mutuelle->getRue()} {$mutuelle->getCodePostal()}  {$mutuelle->getVille()}  </br>
              Téléphone : {$mutuelle->getTel()}</br>
              </br>
              </div>";
        echo "</td></tr>";
        echo "</table></div></div>";
        ?>
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