<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/bootstrap.min.css">
  </head>
  <body>

    
<!-- Form Mixin-->  
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <!-- <h1>Flat Login Form</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a href='http://andytran.me'>Andy Tran</a></span> -->
</div>
<!-- Form Module-->
<div class="module form-module">
  <!-- <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div> -->
  <div class="form" style="display:block">
    <h2>Login to your account</h2>
    
  <?php if($this->session->flashdata('success')){?>
      <div class="alert alert-success">
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php }?>
    <?php if($this->session->flashdata('error')){?>
      <div class="alert alert-danger">
        <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
      </div>
    <?php }?> 
    <form method="post" action="">
      <input type="text" name="username" placeholder="Username" required/>
      <input type="password" name="password" placeholder="Password" required/>
      <button type="submit">Login</button>
    </form>
  </div>
  
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>
    <script src="<?php echo base_url()?>resources/js/index.js"></script>
  </body>
</html>
