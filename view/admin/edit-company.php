<?php include_once('view/layout/header.inc.php'); ?>

<div class="card">
	<div class="card-header">
		<div class="card-title">
			<span class="title">Edit a partner</span>
			<div class="description">Edit a partner in your contact list.</div>
		</div>
	</div>
	
	<div class="card-body">
		<form action="?module=admin&action=edit-company&company=<?php echo $_GET['company']; ?>" method="POST">
			<div class="sub-title">Name</div>
			<input value="<?php echo $current_company['so_company_name']; ?>" type="text" class="form-control" placeholder="Name" name="so_company_name" required>
			<div class="sub-title">Email</div>
			<input value="<?php echo $current_company['so_company_email']; ?>" type="text" class="form-control" placeholder="myname@email.com" name="so_company_email" required>
			<div class="sub-title">Phone number</div>
			<input value="<?php echo $current_company['so_company_phone']; ?>" type="text" class="form-control" placeholder="0123456789" name="so_company_phone">
			<button type="submit" class="btn btn-default">Edit</button>
		</form>
	</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>