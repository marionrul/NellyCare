<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="col s12">
        <div class="card #ff8a80 red accent-1 center-align">
            <div class="card-content white-text">
                <span class="card-title">Prescripteurs</span>
                <p>Bienvenue dans votre espace de gestion des prescripteurs. Ici, vous pouvez les voir, les modifier ou les supprimer en cliquant sur le premier lien,
                ou en ajouter en cliquant sur le deuxième.</p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light btn teal white-text" href="../listePrescripteur.php">Liste des prescripteurs</a>
                <a class="waves-effect waves-light btn teal white-text" href="../ajoutPrescripteur.php">Ajouter un prescripteur</a>
            </div>
        </div>
    </div>
</div>


<?php  include ('config/js_config.php')?>
</body>
</html>

