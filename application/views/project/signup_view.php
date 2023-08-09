<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS---> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <body>
    <?php echo validation_errors(); ?>
        <div class="container ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <?php echo form_open("project/Singup"); ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name"  class="form-control" placeholder="Enter Name">
                                    <small><?php echo form_error('name');?></small>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email"  class="form-control" placeholder="Enter Email">
                                    <small><?php echo form_error('email');?></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password"  class="form-control" placeholder="Enter password">
                                    <small><?php echo form_error('password');?></small>
                                </div>
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Confirm Password</label>
                                    <input type="con_pass" name="con_pass"  class="form-control" placeholder="Enter Confirm password">
                                    <small><?php echo form_error('con_pass');?></small>
                                </div>
                            </div> 
                            <div class="col-md-7">
                       
                                <button type="submit" class="btn btn-success pull-right">Submit</button>
                            </div>
                            <a href="<?php site_url("/") ?>"> Cancel</a>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>