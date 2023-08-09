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
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
            <div class="card-header">
            <h2>Sent Email Using SMTP</h2><br>

  <!--Success Flash message available here ..............--->
  
            <?php if($error = $this->session->flashdata('msg')){ ?>
            <p style="color: green;"><strong>Success!</strong> <?php echo  $error; ?><p>
            <?php } ?>

  <!---//End Flash message available here ..............--->


<form action="<?php echo base_url(); ?>email_send/send" method="post">
   <input type="email" name="email" class="form-control" placeholder="Enter Email" required><br>
   <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
   <button type="submit" class="btn btn-primary">Send Message</button>
</form>
    </div>
    </div>
    </div>
    </div>
    </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>