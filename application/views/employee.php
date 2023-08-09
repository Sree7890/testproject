<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS---> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header">
              <h2>
                    Insert data
                    <a href="<?php echo base_url('employee/add'); ?>" class="btn btn-primary float=right">ADD Employee</a>
              </h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Email ID</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($employee as $row) :?>
                  <tr>
                    <td><?php echo $row->id; ?></td>
                    <td><?php echo $row->first_name; ?></td>
                    <td><?php echo $row->last_name; ?></td>
                    <td><?php echo $row->phone; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td>
                      <a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-success btm-sm">Edit</a>
                    </td>
                    <td>
                      <a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btm-sm">Delete</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
            </div>
          </div>
        </div>
      </div>
    </div>



    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>