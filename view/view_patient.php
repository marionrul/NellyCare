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
            <li class="collection-header"><h4>Patients</h4></li>
            <?php
            foreach ($patients as $patient){
                echo "<li class=\"collection-item\"><div> <a href=\"fichePatient.php?idpatient={$patient->getNumSecu()}\" class=\"waves-effect waves-light btn\">{$patient->getPrenom()} {$patient->getNom()}</a></div>
                        <div class=\"right-align\" style=\"margin-right: 40px\"><a class=\"btn waves-effect waves-light\" href=\"controller/controllerSupprimerPatient.php?idpatient={$patient->getNumSecu()}\">Supprimer</a></div>
                        </li>";
            }
            ?>
        </ul>
    </div>
</div>

<?php  include ('config/js_config.php')?>
</body>
</html>


