<?php include_once('view/layout/header.inc.php'); ?>

<div class="row">
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	    <a href="?module=admin&action=all-leads">
	        <div class="card red summary-inline">
	            <div class="card-body">
	                <i class="icon fa fa-bars fa-4x"></i>
	                <div class="content">
	                    <div class="title"><?php echo $lead['all']; ?></div>
	                    <div class="sub-title">Leads</div>
	                </div>
	                <div class="clear-both"></div>
	            </div>
	        </div>
	    </a>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	    <a href="?module=admin&action=all-leads&stat=1">
	        <div class="card yellow summary-inline">
	            <div class="card-body">
	                <i class="icon fa fa-inbox fa-4x"></i>
	                <div class="content">
	                    <div class="title"><?php echo $lead['new'] ?></div>
	                    <div class="sub-title">New leads</div>
	                </div>
	                <div class="clear-both"></div>
	            </div>
	        </div>
	    </a>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	    <a href="?module=admin&action=all-leads&stat=2">
	        <div class="card green summary-inline">
	            <div class="card-body">
	                <i class="icon fa fa-spinner fa-4x"></i>
	                <div class="content">
	                    <div class="title"><?php echo $lead['pending'] ?></div>
	                    <div class="sub-title">Pending leads</div>
	                </div>
	                <div class="clear-both"></div>
	            </div>
	        </div>
	    </a>
	</div>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	    <a href="?module=admin&action=all-leads&stat=3">
	        <div class="card blue summary-inline">
	            <div class="card-body">
	                <i class="icon fa fa-archive fa-4x"></i>
	                <div class="content">
	                    <div class="title"><?php echo $lead['closed'] ?></div>
	                    <div class="sub-title">Closed leads</div>
	                </div>
	                <div class="clear-both"></div>
	            </div>
	        </div>
	    </a>
	</div>
</div>

<?php include_once('view/layout/footer.inc.php'); ?>