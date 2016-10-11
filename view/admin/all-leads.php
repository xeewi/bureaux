<?php include_once('view/layout/header.inc.php'); ?>

<div class="row">
<div class="col-xs-12">
    <div class="card">
        <div class="card-header">

            <div class="card-title">
            <div class="title">Leads - <a class="btn-xs btn-default" href="?module=admin&action=delete-closed-leads">Delete all closed leads</a></a></div>
            </div>
        </div>
        <div class="card-body">
            <table class="datatable table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Registration date</th>
                        <th>Fistname</th>
                        <th>Lastname</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Registration date</th>
                        <th>Fistname</th>
                        <th>Lastname</th>
                        <th>Mail</th>
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </tfoot>
                <tbody>

<?php foreach ($leads as $key => $value) { 
	if ( $value['so_status_id'] == 1 ) { 
		$class="bg-orange";
	} if ( $value['so_status_id'] == 2 ) { 
		$class="bg-green";
	} if ( $value['so_status_id'] == 3 ) { 
		$class="bg-blue";
	} 
?>

    <tr>
        <td>#<?php echo $value['so_lead_id']; ?></td>
        <td><?php echo $value['so_lead_register_date']; ?></td>
        <td><?php echo $value['so_lead_firstname']; ?></td>
        <td><?php echo $value['so_lead_lastname']; ?></td>
        <td><?php echo $value['so_lead_email']; ?></td>
        <td class="<?php echo $class; ?> center"><?php echo $value['so_status_name']; ?></td>
        <td class="center"><a href="?module=admin&action=lead&lead=<?php echo $value['so_lead_id']; ?>"><button type="button" class="btn-xs btn-default">See more</button></a></td>
    </tr>
                   
<?php } ?>
 </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>