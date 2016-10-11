<?php include('view/layout/header.front.inc.php'); ?>

<div class="clear"></div>

	<div id="produit">

		<H1 class="title-product">Louez un bureau à <span><?php echo $page['so_page_title']; ?></span></H1>

	</div>




	<div id="container-product" class="block-center">
		<h2 class="txt-center btn title-s bg-section2">
			<?php echo $page['so_region_name'].' - '.$page['so_city_name']; ?>
		</h2>

		<div class="ui breadcrumb arriane col-6">
		  <a href="index.php" title="Accueil" class="section">Accueil</a>
		  <div class="divider"> / </div>
		  <a href="?module=home&action=categories&region=<?php  echo $page['so_region_name']; ?>&ville=<?php  echo $page['so_city_name']; ?>"><?php  echo $page['so_region_name']; ?></a>
		  <div class="divider"> / </div>
		  <div class="active section"><?php echo $page['so_page_title']; ?></div>
		</div>

		<p class="txt-center">
			<?php echo $page['so_page_content'] ?>	
		</p>


		<form id="form-product" class="txt-center" method="POST" action="<?php echo "?module=home&region=". $_GET['region'] . "&ville=" . $_GET['ville'] . "&action=produit&id=" . $_GET['id']; ?>">

			<div class="ui medium icon input input-contact">
				<div>
				</div>
			  <input type="text" name="so_lead_firstname" value="<?php if(isset($_POST['so_lead_firstname'])){echo $_POST['so_lead_firstname'];} ?>" placeholder="Votre prénom" required="required">
			  <i class="user icon"></i>
			</div>

			<div class="ui medium icon input input-contact">
			  <input type="text" name="so_lead_lastname" value="<?php if(isset($_POST['so_lead_lastname'])){echo $_POST['so_lead_lastname'];} ?>" placeholder="Votre nom" required="required">
			  <i class="user icon"></i>
			</div>

			<div class="ui medium icon input input-contact">
			  <input type="text" name="so_lead_email" value="<?php if(isset($_POST['so_lead_email'])){echo $_POST['so_lead_email'];} ?>" placeholder="Votre adresse mail" required="required">
			  <i class="mail icon"></i>
			</div>

			<div class="ui medium icon input input-contact">
			  <input name="so_lead_phone" value="<?php if(isset($_POST['so_lead_phone'])){echo $_POST['so_lead_phone'];} ?>" type="text" placeholder="numéro de téléphone " required="required">
			  <i class="phone icon"></i>
			</div>

			<div class="ui medium icon input input-contact">
			  <input type="text" name="so_lead_capacity" value="<?php if(isset($_POST['so_lead_capacity'])){echo $_POST['so_lead_capacity'];} ?>" placeholder="Capacité (nombre de personnes)" required="required">
			  <i class="users outline icon"></i>
			</div>


			<select class="ui dropdown input-search select" name="so_lead_duration" required="required">
			  <option value="">Durée</option>
			  <option <?php if(isset($_POST['so_lead_duration']) && $_POST['so_lead_duration'] == 1){ echo 'selected'; } ?> value="1">1 mois</option>
			  <option <?php if(isset($_POST['so_lead_duration']) && $_POST['so_lead_duration'] == 2){ echo 'selected'; } ?> value="2">2 mois</option>
			  <option <?php if(isset($_POST['so_lead_duration']) && $_POST['so_lead_duration'] == 3){ echo 'selected'; } ?> value="3">3 mois</option>
			  <option <?php if(isset($_POST['so_lead_duration']) && $_POST['so_lead_duration'] == 4){ echo 'selected'; } ?> value="4">Plus</option>
			  <i class="search icon"></i>
			</select>


			 <div class="btn">

			  <button type="submit" class="ui blue button">Envoyer</button>
				 <br/>
				 <br/>
			  </div>



		</form>

		</div>


		<div id class="txt-center bg-section2">
			<h2 class="title-s">Voir aussi</h2>
		</div>

		<p></p>

		<div id="container-office" class="">
		<?php 
		$x = 0;
		foreach ($result as $key => $value) { 
			if ($x <= 3) {
			?>
			<div class="col-4">
			<div class="ui card">
				  <div class="image">
					  <div class="ui black ribbon label"><i class="building Outline icon"></i><?php echo $value['so_city_name']; ?></div>
				    <img class="flat-square" src="assets/front/img/2-min.jpg">
				  </div>
				  <div class="content">
				    <a class="header txt-center" href="?module=home&region=<?php echo $value['so_region_name']; ?>&ville=<?php echo $value['so_city_name']; ?>&action=produit&id=<?php echo $value['so_page_id']; ?>">
				    	<?php echo $value['so_page_title']; ?>
				    </a>
				    <div class="meta">
				    	<?php echo $value['so_page_meta_descr']; ?>
				    </div>
				  </div>
			</div>
			</div>
		<?php
			$x++; 
			} else {
				break;
			}
		} 

		?>
		</div>

<div class="clear"></div>


<?php include('view/layout/footer.front.inc.php'); ?>