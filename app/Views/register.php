<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Simple POS Login</title>
</head>

<body>
<div class="container">
    <center><div class="row">
            <div class="mt-3 p-5 bg-success text-white rounded">
                    <h1>News TidBits Register</h1> 
                    <h6>register - login</h6>
            </div>
            </div>
            <br> <br> 
         
    <?php $validation = \Config\Services::validation(); ?>
    <form action="<?php echo base_url(); ?>/FormController/store" method="post">
      <div class="form-group">
        <!-- Error -->
        <?php if($validation->getError('name')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
      </div>
       
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
        <!-- Error -->
        <?php if($validation->getError('username')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('username'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
        <!-- Error -->
        <?php if($validation->getError('password')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="cpassword" class="form-control">
        <!-- Error -->
        <?php if($validation->getError('cpassword')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('cpassword'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Firstname</label>
        <input type="text" name="firstname" class="form-control">
        <!-- Error -->
        <?php if($validation->getError('firstname')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('firstname'); ?>
            </div>
        <?php }?>
      </div>

      <div class="form-group">
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-control">
        <!-- Error -->
        <?php if($validation->getError('lastname')) {?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('lastname'); ?>
            </div>
        <?php }?>
      </div>

<br>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </div>
    </form>
    </center>                                                                                                                           
  </div></body>
</html>