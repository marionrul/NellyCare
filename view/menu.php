

<nav>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="ajoutPrescription.php">Ajouter une prescription</a></li>
        <li><a href="prescription.php">Voir les prescriptions</a></li>
    </ul>
    <div class="nav-wrapper teal lighten-2">
        <a href="index.php" class="brand-logo">NellyCare</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="calendrier.php">Agenda</a></li>
            <li><a href="gererPatient.php">Patients</a></li>
            <li><a href="gererPrescripteur.php">Prescripteurs</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="" data-activates="dropdown1">Prescription<i class="material-icons right">arrow_drop_down</i></a></li>

            <?php if(connexion()){echo "<li><a href=\"controller/controllerDeconnexion.php\"><i class=\"material-icons\">power_settings_new</i></a></li>";} ?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="calendrier.php">Agenda</a></li>
            <li><a href="gererPatient.php">Patients</a></li>
            <li><a href="gererPrescripteur.php">Prescripteurs</a></li>
        </ul>
    </div>
</nav>

