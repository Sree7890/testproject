<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
</head>
<body>
<table border="2px" cellspacing="4px" >
    <tr>
        <th>User Id</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    <?php
        foreach($userarray as $key=>$value)
            {   echo "<tr>
                
                <td>".$value->id."</td>
                <td>".$value->fname."</td>
                <td>".$value->lname."</td>
                </tr>";
            }
    ?>

</body>
</html>