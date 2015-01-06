<?php
/**
 * Created by PhpStorm.
 * User: Steve
 * Date: 14-10-18
 * Time: 16:35
 * barre de menu prise sur http://getbootstrap.com/examples/starter-template/
 *
 */

// require 'core/init.php';

$user = new User();

if(!$user->isLoggedIn()) {  //todo doit-on faire un ce isLoggedIn ici? quel handling faire?
    Redirect::to('index.php');
}
//ActiveMenu permet de rendre actif la page choisie dans la barre de menu

function ActiveMenu($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">GPAO Ambiosol</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php ActiveMenu("index"); ?>><a href="index.php">Accueil</a></li>
                <li <?php ActiveMenu("changepassword"); ?>><a href="changepassword.php">Change password</a></li>
                <li <?php ActiveMenu("fullcal"); ?>><a href="fullcal.php">Test FullCalendar</a></li>
                <li <?php ActiveMenu("logout"); ?>><a href="logout.php">Logout</a></li>
                <?php //todo layout : le class="active" doit etre dynamique, dépendre de la page ou l'on est ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<br/><br/><?php //todo optionnel du css au lieu de ce </br></br>  ?>
