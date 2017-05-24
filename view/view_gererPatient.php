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
                <span class="card-title">Patients</span>
                <p>Bienvenue dans votre espace de gestion des patients. Ici, vous pouvez voir la liste de vos patients accèder à leurs informations, les modifier ou les supprimer en cliquant sur le premier lien,
                    ou en ajouter en cliquant sur le deuxième.</p>
            </div>
            <div class="card-action">
                <a class="waves-effect waves-light btn teal white-text" href="../patient.php">Liste des patients</a>
                <a class="waves-effect waves-light btn teal white-text" href="../ajoutPatient.php">Ajouter un patient</a>
            </div>
        </div>
    </div>
</div>


<?php  include ('config/js_config.php')?>
</body>
</html>