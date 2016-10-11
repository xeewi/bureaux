<!DOCTYPE html>
<html>

<head>
    <title>OfficeToShare - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/checkbox3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/back/lib/css/select2.min.css">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="assets/back/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/back/css/themes/flat-blue.css">
</head>

<body class="flat-blue">
    <div class="app-container">
        <div class="row content-container">
            <nav class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-expand-toggle">
                            <i class="fa fa-bars icon"></i>
                        </button>
                        <ol class="breadcrumb navbar-breadcrumb">
                            <li class="active">Dashboard</li>
                        </ol>
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-th icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                       
                        <li class="dropdown profile">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['user']['so_user_pseudo']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInDown">
                                <li>
                                    <div class="profile-info">
                                        <h4 class="username"><?php echo $_SESSION['user']['so_user_pseudo']; ?></h4>
                                        <p><?php echo $_SESSION['user']['so_user_email']; ?></p>
                                        <div class="btn-group margin-bottom-2x" role="group">
                                            <button type="button" class="btn btn-default"><a href="?module=admin&action=login&signout=ok"><i class="fa fa-sign-out"></i> Logout</a></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="side-menu sidebar-inverse">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="side-menu-container">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="?module=admin&action=index">
                                <div class="icon"><img class="minicon" src="assets/front/img/logo-1.png"></div>
                                <div class="title">OfficeToShare</div>
                            </a>
                            <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                                <i class="fa fa-times icon"></i>
                            </button>
                        </div>
                        <ul class="nav navbar-nav">                           
                            <li <?php if(!isset($_GET['action']) || $_GET['action'] == "index"){echo 'class="active"';} ?> >
                                <a href="?module=admin&action=index">
                                    <span class="icon fa fa-tachometer"></span><span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="panel panel-default dropdown <?php if(isset($_GET['action']) && $_GET['action'] == "all-leads"){echo 'active';} ?>" >
                                <a data-toggle="collapse" href="#dropdown-leads">
                                    <span class="icon fa fa-inbox"></span><span class="title">Leads</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-leads" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?module=admin&action=all-leads">All leads</a></li>
                                            <li><a href="?module=admin&action=all-leads&stat=1">New leads</a></li>
                                            <li><a href="?module=admin&action=all-leads&stat=2">Pending leads</a></li>
                                            <li><a href="?module=admin&action=all-leads&stat=3">Closed leads</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                           
                            <li class="panel panel-default dropdown <?php if(isset($_GET['action']) && $_GET['action'] == "companies"){echo 'active';} ?>">
                                <a data-toggle="collapse" href="#dropdown-partners">
                                    <span class="icon fa fa-users"></span><span class="title">Partners</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-partners" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?module=admin&action=companies">All partners</a></li>
                                            <li><a href="?module=admin&action=add-company">Add a partner</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="panel panel-default dropdown <?php if(isset($_GET['action']) && $_GET['action'] == "pages"){echo 'active';} ?>">
                                <a data-toggle="collapse" href="#dropdown-contacts">
                                    <span class="icon fa fa-file-text-o"></span><span class="title">Pages</span>
                                </a>
                                <!-- Dropdown level 1 -->
                                <div id="dropdown-contacts" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="?module=admin&action=pages">All pages</a></li>
                                            <li><a href="?module=admin&action=add-page">Add a new page</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li <?php if(isset($_GET['action']) && $_GET['action'] == "contacts"){echo 'class="active"';} ?>>
                                <a href="?module=admin&action=contacts">
                                    <span class="icon fa fa-paper-plane"></span><span class="title">Contacts</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">
                    <!-- CONTENT -->

            <!-- START FLASH MESSAGES -->
            <?php
            if(isset($_SESSION['flash']))
            {
                foreach($_SESSION['flash'] as $type => $message)
                {
                    ?>
                        <div>
                            <div class="alert fresh-color alert-<?php echo $type; ?> alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php echo $message; ?>
                            </div>
                        </div>
                    <?php
                    unset($_SESSION['flash']);
                }
            }
            ?>
            <!-- END FLASH MESSAGES -->