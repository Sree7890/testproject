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
              <!--<h2>
                    Edit page
                    <a href="" class="btn btn-danger float=right">Back</a>
              </h2>
            </div>
            <div class="card-body">
            <form action="<?php //echo base_url('employee/update/'.$detail['id']) ?>"  method="POST">--->
        
                
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="designation">First Name <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("first_name"); ?>" name="first_name" id="first_name" class="form-control"  placeholder="Enter First name" style="text-transform: uppercase;">
                        <?php echo form_error('first_name'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="designation">Last Name <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("last_name"); ?>" name="last_name" id="last_name" class="form-control"  placeholder="Enter Last name." style="text-transform: uppercase;">
                        <?php echo form_error('last_name'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="designation"> Course Name <span class="text-danger">*</span></label>
                        <select class="form-control" name="course_name" id="course_name">
                            <option value="">-- Select Course Name  --</option>
                            <?php foreach($course_names as $course_name){ ?>
                            <option value="<?php echo $course_name['id_type_id_pk'] ?>" <?php echo set_select("course_name",$course_name['id_type_id_pk']) ?>><?php echo $course_name['id_type_name'] ?></option>
                            <?php } ?>
                        </select>
                        <?php echo form_error('course_name'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="designation">Passing Year <span class="text-danger">*</span></label>
                        <input type="text" value="<?php echo set_value("passing_year"); ?>" name="passing_year" id="passing_year" class="form-control"  placeholder="Enter Passing year." style="text-transform: uppercase;">
                        <?php echo form_error('passing_year'); ?>
                    </div>
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