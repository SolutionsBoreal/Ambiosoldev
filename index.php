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
    </head>
    <body>

<?php

if(Session::exists('home')) {
	echo '<p>', Session::flash('home'), '</p>';
}

if($user->isLoggedIn()) {
    include 'includes/html/headmenu.php';
	?>
<div class="container">
    <div class="starter-template">
        <h2>Bonjour</h2>
	<p><a href="profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>
	

		<a href="logout.php">Log out</a><br>
		<a href="changepassword.php">Change password</a><br>
		<a href="update.php">Update details</a><br>

        </div>
    </div>

	<?php

	if($user->hasPermission('admin')) {
	?>
		<p>You're also an administrator!</p>
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