<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="ressources/js/materialize.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>



<script>

    $(document).ready(function(){
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('select').material_select();
        $(".dropdown-button").dropdown();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    var slider = document.getElementById('heure');
    noUiSlider.create(slider, {
        start: [5, 21],
        connect: true,
        step: 1,
        range: {
            'min': 5,
            'max': 21
        },
        format: wNumb({
            decimals: 2
        })
    });


</script>

<?php if(!empty($message)) { ?>
    <script >
        $(document) . ready(function () { // permet de générer des toasts après un envoi de formulaire
            Materialize . toast('<?php echo $message;?>', 4000, '<?php echo $couleur; ?>') // Le 4000 est la durée du toast
        });
    </script >
<?php } ?>