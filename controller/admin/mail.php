<html>
<body>
    <table>
        <tr row="2">
            <th>Office to share</th>
            <td>Nouveau lead</td>
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
            <th>Research</th>
            <td>#<?php echo $current_lead['so_lead_page_title']; ?></td>
        </tr>
        <tr>
            <th>City</th>
            <td>#<?php echo $current_lead['so_city_name']; ?></td>
        </tr>
        <tr>
            <th>Region</th>
            <td>#<?php echo $current_lead['so_region_name']; ?></td>
        </tr>
        <tr row="2">
            <th>Message</th>
            <td><?php echo $_POST['so_mail_content']; ?></td>
        </tr>
    </table>
</body>
</html>
