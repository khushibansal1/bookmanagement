<?php
$page = explode ( '/', $_SERVER['PHP_SELF']);
$page = end($page);
require_once '../dbcon.php';

session_start();

if(!isset($_SESSION['libraian_login'])) {
    header('location: login.php');
}

$libraian_login = $_SESSION['libraian_login'];
$data = mysqli_query($con, "SELECT * FROM `libraian` WHERE `email` = '$libraian_login' OR `username` = '$libraian_login'");

$libraian_info = mysqli_fetch_assoc($data);

?>
<?php
 

 if(isset($_POST['update-profile'])){
  $id = $_POST['id'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];


 $update = mysqli_query($con, "UPDATE `libraian` SET `email`='$email',`username`='$username',`password`='$password' WHERE `id` = '$id'");
 if($update) {
  $success = "Data Save Successfully";
}else{
  $error = "Data Not Save !";
}
}

 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../assets/images/avatar/user.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?= ucwords($libraian_info['firstname']).' '.ucwords($libraian_info['lastname']) ?></h4>
                      <p class="text-secondary mb-1">Admin</p>
                      <p class="text-muted font-size-sm"><?=$libraian_info['email']?></p>
                      <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#profile-update"><i class="fa fa-pencil"></i> Edit</a>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= ucwords($libraian_info['firstname']).' '.ucwords($libraian_info['lastname']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$libraian_info['email']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$libraian_info['username']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?= $libraian_info['password'] ?>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
              <?php
                    if(isset($success)) {
                        ?> 
                        <div class="alert alert-success" role="alert">
                            <?= $success ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                    if(isset($error)) {
                        ?> 
                        <div class="alert alert-danger" role="alert">
                            <?= $error ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php
                    }
                  ?>

            </div>
          </div>

        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="profile-update" tabindex="-1" role="dialog" aria-labelledby="modal-primary-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-primary">
                                            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                                            <h4 class="modal-title" id="modal-primary-label"><i class="fa fa-user"></i> Profile Update</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel">
                                                <div class="panel-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form method="POST" action="" class="form-horizontal">

                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label">Full Name</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" class="form-control" id="name" value="<?= ucwords($libraian_info['firstname']).' '.ucwords($libraian_info['lastname']) ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label">User Name</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="username" class="form-control" id="username" value="<?= $libraian_info['username'] ?>">
                                                                        <input type="hidden" name="id" class="form-control" value="<?= $libraian_info['id'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-sm-2 control-label">Email</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="email" name="email" class="form-control" id="email" value="<?= $libraian_info['email'] ?>">
                                                                    </div>
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label">Password</label>
                                                                    <div class="col-sm-12">
                                                                        <input type="text" name="password" class="form-control" id="password" value="<?= $libraian_info['password'] ?>">
                                                                    </div>
                                                                </div>
                                                              
                                                                <div class="form-group">
                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                        <button type="submit" name="update-profile" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    

<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>

<script type="text/javascript">

</script>
</body>
</html>