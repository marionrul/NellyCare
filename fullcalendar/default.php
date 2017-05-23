<!DOCTYPE html>
<html>
<head>

<?php include ('view/menu.php'); ?>
    <?php include ('config/css_config.php'); ?>

<link href='fullcalendar/css/fullcalendar.css' rel='stylesheet' />
<script src='fullcalendar/js/jquery-1.9.1.min.js'></script>
<script src='fullcalendar/js/jquery-ui-1.10.2.custom.min.js'></script>
<script src='fullcalendar/js/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            editable: true,
            events: "http://marionrul.com/fullcalendar/events.php",
            eventColor: '#f06292'

        });

    });


</script>
<style>

    body {
        margin-top: 40px;
        text-align: center;
        font-size: 14px;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    }

    #calendar {
        width: 900px;
        margin: 0 auto;
    }

</style>
</head>
<body>

<div id='calendar'></div>
<div class="right-align" style="margin-right: 40px">
    <a href="javascript:history.back()">
        <button class="btn waves-effect waves-light #4db6ac teal lighten-2" type="submit" name="action">Retour</button>
    </a>
</div>



</body>
</html>
