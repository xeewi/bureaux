<?php include_once('view/layout/header.inc.php'); ?>

<div class="card">
	<div class="card-header">
		<div class="card-title">
			<span class="title">Edit a page</span>
		</div>
	</div>
	
	<div class="card-body">
		<form action="?module=admin&action=edit-page&page=<?php echo $_GET['page']; ?>" method="POST">
			<div class="sub-title">Ttile</div>
			<input value="<?php echo $edit_page['so_page_title'] ?>" type="text" class="form-control" placeholder="Ttile" name="so_page_title" required>
			<div class="sub-title">Image url</div>
			<input value="<?php echo $edit_page['so_page_img_url'] ?>" type="text" class="form-control" placeholder="http://somting.com/image.png" name="so_page_img_url" required>
			<div class="sub-title">City</div>
			<select class="select-large"  name="so_page_city_id" required>
			<?php 

			foreach ($all_cities as $key => $value) { 
				if ($value['so_city_id'] == $edit_page['so_page_city_id']) {
					$select = "selected";
				} else {
					$select = "";
				} 
			?>
				<option <?php echo $select; ?> value="<?php echo $value['so_city_id']; ?>"><?php echo $value['so_city_name']; ?></option>
			<?php } ?>
			</select>
			<div class="sub-title">Description</div>
			<textarea required class="form-control" rows="3" name="so_page_meta_descr" placeholder="Description"><?php echo $edit_page['so_page_meta_descr']; ?></textarea>
			<div class="sub-title">Content</div>
			<textarea required class="form-control" rows="3" name="so_page_content" placeholder="Content"><?php echo $edit_page['so_page_content']; ?></textarea>
			<button type="submit" class="btn btn-default">Edit</button>
		</form>
	</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>