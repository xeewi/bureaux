<?php include_once('view/layout/header.inc.php'); ?>

<div class="page-title">
    <span class="title">Lead</span>
    <div class="description">ID : <?php echo $current_lead['so_lead_id']; ?></div>
</div>

<div class="row">
    <div class="col-xs-12">

<?php if ($current_lead['so_lead_status_id'] == 1) { ?>
    <div class="alert fresh-color alert-warning" role="alert">
        <strong>New</strong> | You can send this lead to your partners
    </div>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <div class="title">Send lead</div>
            </div>
        </div>

        <div class="card-body">
        <form method="POST" action="?module=admin&action=send-lead&lead=<?php echo $_GET['lead']; ?>">
            <div class="sub-title">To</div>
            <div>
            <?php foreach ($companies as $key => $value) { ?>
                <div class="checkbox3 checkbox-success checkbox-inline checkbox-check checkbox-round  checkbox-light">
                    <input type="checkbox" id="<?php echo $value['so_company_name'].$key; ?>" value="<?php echo $value['so_company_email']; ?>" name="so_company_<?php echo $key; ?>">
                    <label for="<?php echo $value['so_company_name'].$key; ?>">
                      <?php echo $value['so_company_name']; ?>
                    </label>
                </div>
            <?php } ?>    
            </div>
            <div class="sub-title">Additional message</div>
            <textarea class="form-control" rows="3" name="so_mail_content"></textarea>
            <input type="submit" value="Send this lead" class="btn btn-info">
        </form>
        </div>

    </div>

    </div>

<?php } else if ($current_lead['so_lead_status_id'] == 2) { ?>
    <div class="alert fresh-color alert-success" role="alert">
        <strong>Pending</strong> | You have already sent this mail. if you had an answer, you can close it. <a href="?module=admin&action=lead&lead=<?php echo $_GET['lead']; ?>&close=ok" ><button type="button" class="btn btn-default"> <i class="fa fa-times"></i> Close this lead</button></a>
    </div>

    </div>
<?php } else if ($current_lead['so_lead_status_id'] == 3) { ?>
    <div class="alert fresh-color alert-info" role="alert">
        <strong>Closed</strong> | You already get an answer for this lead.
    </div>
    <div>
<?php } ?>
    <div class="col-xs-12">

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title"><?php echo $current_lead['so_lead_id'].' | '.$current_lead['so_lead_register_date']; ?></div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-indent">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <td><?php echo $current_lead['so_lead_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Registration date</th>
                                <td><?php echo $current_lead['so_lead_register_date']; ?></td>
                            </tr>
                            <tr>
                                <th>Firstname</th>
                                <td><?php echo $current_lead['so_lead_firstname']; ?></td>
                            </tr>
                            <tr>
                                <th>Lastname</th>
                                <td><?php echo $current_lead['so_lead_lastname']; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td><?php echo $current_lead['so_lead_email']; ?></td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td><?php echo $current_lead['so_lead_phone']; ?></td>
                            </tr>
                            <tr>
                                <th>Capacity</th>
                                <td><?php echo $current_lead['so_lead_capacity']; ?></td>
                            </tr>
                            <tr>
                                <th>Duration</th>
                                <td><?php echo $current_lead['so_lead_duration']; ?></td>
                            </tr>
                            <tr>
                                <th>Page</th>
                                <td>#<?php echo $current_lead['so_lead_page_id']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>