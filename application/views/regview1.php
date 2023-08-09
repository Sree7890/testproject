<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Registration Page</title>
  </head>
  <body>
    <div class="container">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card shadow">
                    <div class="card-header">
                        <h2>Registration Page</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name"  class="form-control" placeholder="Enter first Name">
                                    <small><?php echo form_error('first_name');?></small>
                                </div>
                            </div>              
              
                            <div class="col-md-4">
                                <div class="form-group">  
                                    <label for="">Last Name</label>
                                        <input type="text" name="last_name"  class="form-control"  placeholder="Enter Last Name">
                                <small><?php echo form_error('last_name');?></small>
                                </div>
                            </div>      
                            <div class="col-md-4">
                                <div class="form-group">  
                                    <label for="">Password</label>
                                    <input type="password" name="pass"  class="form-control"  placeholder="Enter password">
                                    <small><?php echo form_error('pass');?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">  
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="con_pass"  class="form-control"  placeholder="Confirm Password">
                                    <small><?php echo form_error('con_pass');?></small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone"  class="form-control" placeholder="Enter mobile no">
                                    <small><?php echo form_error('phone');?></small>
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email ID</label>
                                    <input type="email" name="email" class="form-control">
                                    <small><?php echo form_error('email');?></small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Register Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
              