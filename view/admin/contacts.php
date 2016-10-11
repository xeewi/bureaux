<?php include_once('view/layout/header.inc.php'); ?>

<div class="card">
	<div class="card-header">
		<div class="card-title">
			<span class="title">Contacts</span>
			<div class="description">List of contacts from homepage.</div>
		</div>
	</div>
	
	<div class="card-body">
		 <table class="table">
	        <thead>
	            <tr>
	                <th>#ID</th>
	                <th>Name</th>
	                <th>Email</th>
	                <th>Phone number</th>
	            </tr>
	        </thead>
	        <tbody>
	        <?php foreach ($contacts as $key => $value) { ?>
	            <tr>
	                <td>#<?php echo $value['so_contact_id']; ?></td>
	                <td><?php echo $value['so_contact_name']; ?></td>
	                <td><a href="mailto:<?php echo $value['so_contact_email']; ?>"><?php echo $value['so_contact_email']; ?></a></td>
	                <td><?php echo $value['so_contact_phone']; ?></td>
	            </tr>
	        <?php } ?>
	        </tbody>
	    </table>  
	</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>