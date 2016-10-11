<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Accueil I OfficeToShare</title>
	<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;" />
	<meta name="description" content="OfficeToShare" />
	<link rel="canonical" href="http://www.OfficeToShare.fr" />
	<meta property="og:locale" content="fr_FR" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="OfficeToShare" />
	<meta property="og:description" content="Louez des bureaux partout en france" />
	<meta property="og:url" content="http://OfficeToShare.fr" />
	<meta property="og:site_name" content="OfficeToShare" />
	<meta property="og:image" content="../img/logo-final.jpg" />
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/front/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/front/css/mobile.css" rel="stylesheet" type="text/css" media="only screen and (min-width:200px) and (max-width:599px)" />
	<link href="assets/front/css/tablette.css" rel="stylesheet" type="text/css" media="only screen and (min-width:600px) and (max-width:1024px)" />
	<link rel="stylesheet" type="text/css" href="assets/front/css/icon.css">
	<link rel="stylesheet" type="text/css" href="assets/front/css/semantic.css">
	<link rel="stylesheet" type="text/css" href="assets/front/css/dropdown.min.css">


</head>

<body>

<!-- HEADER -->


<nav id="navbar">

	<div class="lft">

		<span><a href="index.php" title="Accueil"><img  class="logo" src="assets/front/img/logo-1.png" alt="logo"></a></span>


		<span class="logo-title"><h4>Office To Share</h4></span>

	</div>

	<div id="social" class="rgt">

		<button class="ui facebook button"><i class="facebook icon"></i>Facebook</button>
		<button class="ui twitter button"><i class="twitter icon"></i>Twitter</button>


	</div>




	<div id="langue" class="rgt">




		<div class="ui fluid search selection dropdown select">
			<input type="hidden" name="country">
			<i class="dropdown icon"></i>
			<div class="default text">Langue</div>
			<div class="menu">
				<div class="item" data-value="en"><i class="gb flag"></i>US</div>
				<div class="item" data-value="fr"><i class="fr flag"></i>FR</div>
				<div class="item" data-value="de"><i class="de flag"></i>AL</div>
				<div class="item" data-value="es"><i class="es flag"></i>ES</div>

			</div>
		</div>




</nav>


<!-- START FLASH MESSAGES -->
<?php
	if(isset($_SESSION['flash']))
	{
		foreach($_SESSION['flash'] as $type => $message)
		{
		?>
			<div class="alert-<?php echo $type; ?>">
				<?php echo $message; ?>
			</div>
			<?php
			unset($_SESSION['flash']);
		}
	}
?>
<!-- END FLASH MESSAGES -->

<!--  FIN HEADER -->