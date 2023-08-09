<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Codeigniter</title>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header">
              <h2>
                    Edit page
                    <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float=right">Back</a>
              </h2>
            </div>
            <div class="card-body">
            <form action="<?php echo base_url('employee/update/'.$detail['id']) ?>"  method="POST">
                <div class="form-group">
                
                  <label for="">ID</label>
                  <input type="text" name="id" value="<?php echo $detail['id']; ?>" class="form-control">
                  <small><?php echo form_error('id');?></small>
                </div>
                
                
                <div class="form-group">
                
                  <label for="">First Name</label>
                  <input type="text" name="first_name" value="<?php echo $detail['first_name']; ?>" class="form-control">
                  <small><?php echo form_error('first_name');?></small>
                </div>
                
                <div class="form-group">
                  <label for="">Last Name</label>
                  <input type="text" name="last_name" value="<?php echo $detail['last_name'] ?>" class="form-control">
                  <small><?php echo form_error('last_name');?></small>
                </div>
                
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="text" name="phone" value="<?php echo $detail['phone'] ?>" class="form-control">
                  <small><?php echo form_error('phone');?></small>
                </div>
                
                <div class="form-group">
                  <label for="">Email ID</label>
                  <input type="text" name="email" value="<?php echo $detail['email'] ?>" class="form-control">
                  <small><?php echo form_error('email');?></small>
                </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-info">Update</button>
                </div>
              
          </div>
        </div>
    </div>

      </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>