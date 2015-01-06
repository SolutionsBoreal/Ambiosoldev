<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 14-12-03
 * Time: 19:51
 */
require 'core/init.php';
$user = new User();
?>

<!DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logiciel</title>
    <!-- todo optionnel un icone qui apparait dans l'onglet -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstraptweak.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- ci-dessous les scripts et css pour fullcalendar-->
        <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
        <script src='lib/jquery.min.js'></script>
        <script src='lib/moment.min.js'></script>
        <script src='fullcalendar/fullcalendar.js'></script>
        <script src='fullcalendar/lang/fr.js'></script>
        <script>
            $(document).ready(function() {
                // page is now ready, initialize the calendar...
                $('#calendar').fullCalendar({
                    // put your options and callbacks here
                })
            });
        </script>
    <?php //todo régler encodage de carractère utf-8 dans fullcalendar(aucun probleme dans firefox, mais dans chrome oui)
          //todo le systeme de login n'est pas implante sur cette page... ?>
    </head>
    <body>
            <?php include 'includes/html/headmenu.php'; ?>
            <div class="container">
                <br>
                <div id='calendar'></div>
            </div>
    </body>
