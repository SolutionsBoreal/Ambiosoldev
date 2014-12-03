<?php ?>
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
</head>
<body>
<?php
require 'core/init.php';

$user = new User();

if($user->isLoggedIn())
    { include 'includes/html/headmenu.php'; }
else
    {Redirect::to('index.php');}


if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'password_current' => array(
				'required' => true,
				'min' => 6),
			'password_new' => array(
				'required' => true,
				'min' => 6),
			'password_new_again' => array(
				'required' => true,
				'min' => 6,
				'matches' => 'password_new')
		));

		if($validation->passed()) {
			if(Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
				echo 'Your current password is wrong.';
			} else {
				try {
					
					$salt = Hash::salt(32);	

					$user->update(array(
						'password' => Hash::make(Input::get('password_new'), $salt),
						'salt' => $salt
					));
					
					Session::flash('home', 'Your password has been changed!');
					Redirect::to('index.php');

				} catch(Exception $e) {
					die($e->getMessage());
				}
			}
		} else {
			foreach($validate->errors() as $error) {
				echo $error, '<br>';
			}
		}
	}
}
?>

<form action="" method="post">
	<div class="field">
		<label for="password_current">Current password:</label>
		<input type="password" name="password_current" id="password_current">
	</div>
	
	<div class="field">
	<label for="password_new">New password:</label>
		<input type="password" name="password_new" id="password_new">
	</div>

	<div class="field">
		<label for="password_new_again">New password again:</label>
		<input type="password" name="password_new_again" id="password_new_again">
	</div>

	<input type="submit" value="Change">
	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
</form>
</body>
</html>