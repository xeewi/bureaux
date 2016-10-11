<?php
    if(isset($_SESSION['user'])){
    	require_once('model/admin/count_all_leads.php');
    	require_once('model/admin/count_new_leads.php');
    	require_once('model/admin/count_pending_leads.php');
    	require_once('model/admin/count_closed_leads.php');

    	$lead['all'] = count_all_leads();
    	$lead['new'] = count_new_leads();
    	$lead['pending'] = count_pending_leads();
    	$lead['closed'] = count_closed_leads();

        include_once('view/admin/index.php');
    }
    else{
        $_SESSION['flash']['danger'] = "Vous devez vous connecter pour accéder à cette partie du site.";
        header('Location: ?module=admin&action=login');
        exit();
    }