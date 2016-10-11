<?php include_once('view/layout/header.inc.php'); ?>

<div class="card">
	<div class="card-header">
		<div class="card-title">
			<span class="title">Add a page</span>
			<div class="description">Add a new page</div>
		</div>
	</div>
	
	<div class="card-body">
		<form action="?module=admin&action=add-page" method="POST">
			<div class="sub-title">Title</div>
			<input type="text" class="form-control" placeholder="Title" name="so_page_title" required>
			<div class="sub-title">Image url</div>
			<input type="text" class="form-control" placeholder="http://something.com/image.png" name="so_page_img_url" required>
			<div class="sub-title">City</div>
			<select class="select-large"  name="so_page_city_id" required>
			<?php foreach ($all_cities as $key => $value) { ?>
				<option value="<?php echo $value['so_city_id']; ?>"><?php echo $value['so_city_name']; ?></option>
			<?php } ?>
			</select>
			<div class="sub-title">Description</div>
			<textarea required class="form-control" rows="3" name="so_page_meta_descr" placeholder="Description"></textarea>
			<div class="sub-title">Content</div>
			<textarea required class="form-control" rows="3" name="so_page_content" placeholder="Content"></textarea>
			<button type="submit" class="btn btn-default">Add</button>
		</form>
	</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>