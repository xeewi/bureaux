<?php require_once("view/layout/header.front.inc.php");?>

<div class="row">

	<section id="section1" class="txt-center">



	<div id="intro" class="txt-center">

	<h1 class="title">Office To Share</h1>
	<h2 class="subtitle">Louer des bureaux partout en france</h2>


			<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>




	</div>

	<!-- FORMULAIRE RECHERCHE -->


		<div id="forms" class="block-center txt-center">

			<h3>Rechercher un bureau</h3>

			<P> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</P>


			<form id="search" name="so_search_form" method="POST" action="?module=home&action=index">
				<div class="ui medium icon input input-search">
					<input type="text" placeholder="Localisation" required="required" name="so_page_title">
					<i class="map icon"></i>
				</div>

				<select class="ui dropdown input-search select" required="required" >
					<option value="">Capacité</option>
					<option value="1">de 0 à 10 employés</option>
					<option value="2">de 10 à 20 employés</option>
					<option value="3">de 20 à 50 employés</option>
					<option value="4">Plus</option>
				</select>


				<select class="ui dropdown input-search select" required="required">
					<option value="">Durée</option>
					<option value="1">1 mois</option>
					<option value="2">2 mois</option>
					<option value="3">3 mois</option>
					<option value="4">Plus</option>
					<i class="search icon"></i>
				</select>

				<div class="btn">
					<button type="submit" class="ui blue button">Chercher</button>
				</div>
			</form>

			<!-- FIN FORMULAIRE RECHERCHE -->



		</section>

		<section class="block-center" >

			<button type="submit" id="contact-home-btn" class="ui large blue button block-center"><i class="phone icon"></i> On vous rappelle tout de suite </button>




			<form id="contact-home" class="ui form block-center txt-center" name="so_contact_form" method="POST" action="?module=home&action=index">

				<h2 class="txt-center">Nous vous recontactons</h2>

				<p class="txt-center">Rentrez vos informations et l'un de nos conseiller vous contactera.</p>

				<div class="ui medium icon input input-contact">
					<input type="text" placeholder="Votre nom" required="required" name="so_contact_name">
					<i class="user icon"></i>
				</div>

				<div class="ui medium icon input input-contact">
					<input type="text" placeholder="Votre adresse mail" required="required" name="so_contact_email">
					<i class="mail icon"></i>
				</div>

				<div class="ui medium icon input input-contact">
					<input type="text" placeholder="numéro de téléphone " required="required" name="so_contact_phone">
					<i class="phone icon"></i>
				</div>

				<div class="clear"></div>


				<button type="submit" class="ui blue button">Envoyer</button>
			</form>

		</section>

		<section id="section2" class=" txt-center">

		<div class="txt-center bg-section2">
			<h2 class="title-s">Les Bureaux</h2>
		</div>

		<p class="txt-center">Des bureaux à louer de tout type, taille et partout en France.</p>



			<div id="container-office" class="">

			<div class="col-4">

			<div class="ui card">
				  <div class="image">
					  <div class="ui black ribbon label"><i class="building Outline icon"></i>Paris</div>
				    <img class="flat-square" src="assets/front/img/2-min.jpg">
				  </div>
				  <div class="content">
				    <a class="header txt-center">Bureau</a>
				    <div class="meta">
				    </div>
				  </div>
				  				</div>

			</div>

					<div class="col-4">

			<div class="ui card">
				  <div class="image">
					    <div class="ui black ribbon label"><i class="building Outline icon"></i>Lyon</div>
				    <img class="flat-square" src="assets/front/img/3-min.jpg">
				  </div>
				  <div class="content">
				    <a class="header txt-center">Salle de réunion</a>
				    <div class="meta">
				    </div>
				  </div>
				  				</div>

			</div>

				<div class=" col-4">

			<div class="ui card">
				  <div class="image">
					    <div class="ui black ribbon label"><i class="building Outline icon"></i> Lille</div>
				    <img class="flat-square" src="assets/front/img/4-min.jpg">
				  </div>
				  <div class="content">
				    <a class="header txt-center">Open Space</a>
				    <div class="meta">
				    </div>
				  </div>


			</div>

			</div>

		</section>

<?php require_once("view/layout/footer.front.inc.php");?>

