<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="/ajoutPrescription.php">Ajouter une prescription</a></li>
    <li><a href="/prescription.php">Voir les prescriptions</a></li>
</ul>
<nav>
    <div class="nav-wrapper #4db6ac teal lighten-2">
        <a href="index.php" class="brand-logo">NellyCare</a>
        <ul class="right hide-on-med-and-down ">
            <li><a href="/calendrier.php">Agenda</a></li>
            <li><a href="/patient.php">Patients</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Prescription<i class="material-icons right">arrow_drop_down</i></a></li>
            <?php if(connexion()){echo "<li><a href=\"controller/controllerDeconnexion.php\"><i class=\"material-icons\">power_settings_new</i></a></li>";} ?>
        </ul>
    </div>
</nav>

