<?php include_once('view/layout/header.inc.php'); ?>

<div class="row">
<div class="col-xs-12">
    <div class="card">
        <div class="card-header">

            <div class="card-title">
                <div class="title">Pages</div>
            </div>

        </div>
        <div class="card-body">
            <div class="right">
                <a href="?module=admin&action=add-page" class="btn btn-info"><i class="fa fa-plus"></i> Add a new page</a>
            </div>
            <table class="datatable table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Title</th>
                        <th>City</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </tfoot>
                <tbody>

<?php foreach ($pages as $key => $value) { ?>
    <tr>
        <td>#<?php echo $value['so_page_id']; ?></td>
        <td><?php echo $value['so_page_title']; ?></td>
        <td><?php echo $value['so_city_name']; ?></td>
        <td>
            <form action="?module=admin&action=delete-page" method="POST">
                    <input type="hidden" name="so_page_id" value="<?php echo $value['so_page_id']; ?>">
                    <input type="submit" value="X" class="btn-xs btn-danger">
            </form>
        </td>
        <td class="center"><a href="?module=admin&action=edit-page&page=<?php echo $value['so_page_id']; ?>"><button type="button" class="btn-xs btn-default">See more</button></a></td>
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