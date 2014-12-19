<?php
require 'core/init.php';

$user = new User();

?>

    <!DOCTYPE html>
<html>
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
        <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
        <script src='lib/jquery.min.js'></script>
        <script src='lib/moment.min.js'></script>
        <script src='fullcalendar/fullcalendar.js'></script>
        <script type='text/javascript'>
            $(document).ready(function() {
                //fullcalendar
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
            }

        </script>
    </head>
    <body>

<?php

if(Session::exists('home')) {
	echo '<p>', Session::flash('home'), '</p>';
}

if($user->isLoggedIn()) {
    include 'includes/html/headmenu.php';
	?>
<div class="container"><h3>TEST éâäàå</h3></div>
    <div class="container"><h3 id="wtf">TEST</h3></div>
    </br><div id='calendar'></div>
<!-- cette section doit plutot aller dans le headmenu.php
<div class="container">
    <div class="starter-template">

        <p> Bonjour
	        <a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!
		    <a href="logout.php">Log out</a>&nbsp;
		    <a href="changepassword.php">Change password</a>&nbsp;
		    <a href="update.php">Compte</a>
        </p>
    </div>
</div>
-->
	<?php

	if($user->hasPermission('admin')) {
	?>
		<p>+ droits d'administrateur</p>
	<?php
	}

} else { ?>
    <div class="container">

      <div class="starter-template">
        <h1>Bonjour</h1>
        <p class="lead"> <br> <?php echo 'Vous devez <a href="login.php">log in</a> ou <a href="register.php">créer un compte</a>'; ?></p>
      </div>

    </div><!-- /.container -->
<?php }

?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>



    </body>
</html>