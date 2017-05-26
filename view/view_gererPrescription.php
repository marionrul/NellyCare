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
                <p>Bienvenue dans votre espace de gestion des prescriptions. Ici, vous pouvez les voir ainsi que voir les actes qui la composent en cliquant sur le premier lien,
                    vous pouvez ajouter de nouvelles prescriptions en cliquant sur le second lien ou ajouter des actes en cliquant sur le troisième.</p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light btn teal white-text" href="../prescription.php">Liste des prescriptions</a>
                <a class="waves-effect waves-light btn teal white-text" href="../ajoutPrescription.php">Ajouter un prescription</a>
                <a class="waves-effect waves-light btn teal white-text" href="../ajoutActe.php">Ajouter un acte</a>
            </div>
        </div>
    </div>
</div>


<?php  include ('config/js_config.php')?>
</body>
</html>

