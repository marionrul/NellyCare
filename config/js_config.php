<script src="ressources/js/jquery-2.1.1.min.js"></script>
<script src="ressources/js/jquery.js"></script>
<script src="ressources/js/materialize.js"></script>


<script>

    $(document).ready(function(){
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('select').material_select();
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown();
        materialize.updateTextFields();

    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });



</script>

<?php if(!empty($message)) { ?>
    <script >
        $(document).ready(function () { // permet de générer des toasts après un envoi de formulaire
            Materialize.toast('<?php echo $message;?>', 4000, '<?php echo $couleur; ?>') // Le 4000 est la durée du toast
        });
    </script>
<?php } ?>