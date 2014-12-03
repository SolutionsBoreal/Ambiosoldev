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

if(!$user->isLoggedIn()) {
    Redirect::to('index.php');
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
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="changepassword.php">Change password</a></li>
                <li><a href="#contact">une autre fonction</a></li>
                <li><a href="#contact">une autre fonction</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
</br>