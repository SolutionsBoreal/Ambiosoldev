<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 14-12-03
 * Time: 19:51
 */
?>

<!DOCTYPE html>
    <head>
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
    </head>
    <body>

            <div id='calendar'></div>
    </body>
