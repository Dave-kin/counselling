<?php 
 include_once('../config/runn.php');
 $authen->isLoggedIn();
include_once('partial/log-header.php'); 

?>

<div class="container">
    <div class="card">
        <img src="assets/images/kstu-1.jpg" class="imglink" alt="card-img-top">
        <h5>Register with Your Credentials</h5>
        <div class="card-body">

            <?php include('../codes/message.php'); ?>

            <form class="form-group" method="POST" action="#">

                <label>Username:</label>
                <input type="text" name="user_name" class="form-control" placeholder="Enter Usrename" required>
                
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" minlength="10" required>
                <br>
                <input type="submit" name="signin_btn" value="Sign In" class="btn btn-primary btn-block">
                <div class="forpass">
                    <a href="forgot-password.php">Forgot Password</a>
                </div>
            </form>
        </div>
    </div>
</div>
    
<?php include_once('partial/log-footer.php'); ?>