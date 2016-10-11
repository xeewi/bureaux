<?php include('view/layout/header.inc.php'); ?>
<div class="page-title">
	<span class="title">Partners</span>
	<div class="description">List of partners</div>

	<a href="?module=admin&action=add-company">
		<button type="button" class="btn btn-info right"> <i class="fa fa-plus"></i> Add a partner</button>
	</a>
</div>


<div class="col-xs-12">

<div class="card">
    <div class="card-body">
	    <table class="table">
	        <thead>
	            <tr>

	                <th>Name</th>
	                <th>Email</th>
	                <th>Phone number</th>
	                <th>Delete</th>
	                <th>Edit</th>
	            </tr>
	        </thead>
	        <tbody>
	        <?php foreach ($companies as $key => $value) { ?>
	            <tr>
	                <td><?php echo $value['so_company_name']; ?></td>
	                <td><?php echo $value['so_company_email']; ?></td>
	                <td><?php echo $value['so_company_phone']; ?></td>
	                <td>
		                <form action="?module=admin&action=delete-company" method="POST">
		                	<input type="hidden" name="so_company_id" value="<?php echo $value['so_company_id']; ?>">
		                	<input type="submit" value="X" class="btn-xs btn-danger" class="delete">
		                </form>
	                </td>
	                <td><a class="btn-sm btn-success" href="?module=admin&action=edit-company&company=<?php echo $value['so_company_id']; ?>">Edit</a></td>
	            </tr>
	        <?php } ?>
	        </tbody>
	    </table>  
	</div>
</div>
<?php include('view/layout/footer.inc.php'); ?>	