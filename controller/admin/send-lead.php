<?php
    if(isset($_SESSION['user'])){
        if(isset($_GET["lead"])){//verif if form is submitted

            include_once('model/admin/select_lead.php');
            $current_lead = select_lead($_GET['lead']);

            $recipients = array();

            include_once('model/admin/select_companies.php');
            $companies = select_companies();

            $number_companies = count($companies);

            for($i = 0; $i < $number_companies; $i++){
                if(isset($_POST['so_company_'.$i])){
                    $recipients[] = $_POST['so_company_'.$i];
                }
            }
            if(!empty($recipients)){

                //the recipients of the mail
                foreach($recipients as $key => $recipient)
                {
                    $to .= $recipient;
                    if(end($recipients)!== $recipient){
                        $to .= ', ';
                    }
                }

                //the subject
                $subject =  'Envoi d\'un lead';


                //the message and the lead's data
                $lead_id = $current_lead["so_lead_id"];
                $message = '<html>
<body>
    <table>
        <tr row="2">
            <th>Office to share</th>
            <td>Nouveau lead</td>
        </tr>
        <tr>
            <th>Registration date</th>
            <td>'.$current_lead['so_lead_register_date'].'</td>
        </tr>
        <tr>
            <th>Firstname</th>
            <td>'.$current_lead['so_lead_firstname'].'</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>'.$current_lead['so_lead_lastname'].'</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>'.$current_lead['so_lead_email'].'</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>'.$current_lead['so_lead_phone'].'</td>
        </tr>
        <tr>
            <th>Capacity</th>
            <td>'.$current_lead['so_lead_capacity'].'</td>
        </tr>
        <tr>
            <th>Duration</th>
            <td>'.$current_lead['so_lead_duration'].'</td>
        </tr>
        <tr>
            <th>Research</th>
            <td>'.$current_lead['so_page_title'].'</td>
        </tr>
        <tr>
            <th>City</th>
            <td>'.$current_lead['so_city_name'].'</td>
        </tr>
        <tr>
            <th>Region</th>
            <td>'.$current_lead['so_region_name'].'</td>
        </tr>
        <tr row="2">
            <th>Message</th>
            <td>'.$_POST['so_mail_content'].'</td>
        </tr>
    </table>
</body>
</html>';

                //the headers
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .='Content-Type: text/html; charset="UTF-8"'."\n";
                $headers .='From: contact@office-to-share.com'."\n";
                $headers .='Content-Transfer-Encoding: 8bit';

                //send the mail
                mail($to, $subject, $message, $headers);

                require_once('model/admin/update_lead_status.php');
                update_lead_status($_GET['lead'], 2);

                $_SESSION['flash']['success'] = 'Le lead a été envoyé avec succès';
                header('Location: ?module=admin&action=all-leads');
                exit();
            }
            else{
                $_SESSION['flash']['danger'] = 'Veuillez ajouter au moins un destinataire.';
                header("Location:?module=admin&action=lead&lead=". $_GET["lead"]);
                exit();
            }
        }
        else{
            header("Location:?module=admin&action=all-leads");
            exit();
        }
    }
    else{
        $_SESSION['flash']['danger'] = 'Vous devez vous connecter pour accéder à cette partie du site';
        header("Location:?module=admin&action=login");
        exit();
    }


