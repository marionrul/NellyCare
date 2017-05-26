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
        <?php
        foreach ($actes as $acte) {
        echo "<div class=\"card-panel #b2dfdb teal lighten-4\">
               Nom  : {$acte['Nom_acte']} </br>
              Désignation : {$acte['Designation']}</br>
              Date de début : {$acte['Date_debut']}</br>
              Tarif appliqué : {$acte['Tarif']}</br>
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


