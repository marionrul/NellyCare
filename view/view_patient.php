<!DOCTYPE html>
    <html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="row">
    <div class="col s6">
        <ul class="collection with-header">
            <li class="collection-header"><h4>Patients</h4></li>
            <?php
            foreach ($patients as $patient){
                echo "<li class=\"collection-item\"><div> <a href=\"fichePatient.php?idpatient={$patient->getNumSecu()}\" class=\"waves-effect waves-light btn \">{$patient->getPrenom()} {$patient->getNom()}</a></div>
                        <div class=\"right-align\" style=\"margin-right: 40px\"><a class=\"btn waves-effect waves-light\" href=\"controller/controllerSupprimerPatient.php?idpatient={$patient->getNumSecu()}\">Supprimer</a></div>
                        </li>";
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


