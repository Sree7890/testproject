<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter Export Example</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
     
    <div class="table-responsive">
    <table class="table table-hover tablesorter">
        <thead>
            <tr>
                <!---<th class="header">Name</th>
                <th class="header">Price</th>                           
                <th class="header">Sales Price</th>                      
                <th class="header">Sales Count</th>
                <th class="header">Sales Date</th>--->
                <th class="header">ID</th>
                <th class="header">First Name</th>                           
                <th class="header">Last Name</th>                      
                <th class="header">Phone</th>
                <th class="header">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($export_list) && !empty($export_list)) {
                foreach ($export_list as $key => $list) {
                    ?>
                    <tr>
                        <!---<td><?php echo $list->name; ?></td>   
                        <td><?php echo $list->price; ?></td> 
                        <td><?php echo $list->sale_price; ?></td>                       
                        <td><?php echo $list->sale_count; ?></td>
                        <td><?php echo $list->sale_date; ?></td>--->
                        <td><?php echo $list->id; ?></td>   
                        <td><?php echo $list->first_name; ?></td> 
                        <td><?php echo $list->last_name; ?></td>                       
                        <td><?php echo $list->phone; ?></td>
                        <td><?php echo $list->email; ?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">There is no row.</td>    
                </tr>
            <?php } ?>
 
        </tbody>
    </table>
    <a class="pull-right btn btn-primary btn-xs" href="export/createxls"><i class="fa fa-file-excel-o"></i> Export Data</a>
    </div> 
 
</body>
</html>