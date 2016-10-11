<?php include_once('view/layout/header.front.inc.php'); ?>
<section id="section2" class=" txt-center">

	<div class="txt-center bg-section2">
		<h2 class="title-s"><?php echo $_GET['region'].' - '.$_GET['ville']; ?></h2>
	</div>

	<div class="ui breadcrumb arriane col-6">
		<a href="?module=home" title="Accueil" class="section">Accueil</a>
		<div class="divider"> / </div>
		<div class="active section">Recherche pour : <?php if(isset($_GET['recherche'])){ echo $_GET['recherche']; } else {echo $_GET['ville'];} ?></div>
	</div>

	<p class="txt-center"></p>

	<div id="container-office" class="">
	<?php foreach ($result as $key => $value) { ?>
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
	<?php } ?>
	</div>
</section>
<?php include_once('view/layout/footer.front.inc.php'); ?>