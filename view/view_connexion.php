<!DOCTYPE html>
<html>
<head>
    <?php include ('config/css_config.php'); ?>
</head>
<body>
<?php include ('view/menu.php'); ?>

<div class="container" id="formConnexionAdmin" style="margin-top: 200px;">
    <!-- formulaire de connexion -->

    <form action="controller/controllerConnexion.php" method="post">
        <div class="form-group">

            <label>Identifiant : </label>

            <input id="mailAdm" name="mailAdmin" class="form-control" placeholder="email" type="email"/>

        </div>
        <div class="form-group">

            <label>Mot de passe : </label>

            <input type="password" name="password" id="mdpAdm" class="form-control" placeholder="mot de passe "/></br>

        </div>

        <button  id="connexionAdm" type="submit" name="action" class="btn">Connexion</button> </br>

    </form>

</div>

<?php  include ('config/js_config.php')?>
</body>
</html>


