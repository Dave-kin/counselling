<?php 
include_once('../config/runn.php');
include_once('partial/log-header.php'); 

?>

    <div class="container">
        <div class="card">
            <img src="assets/images/kstu-1.jpg" class="imglink" alt="card-img-top">
            <h5>Register with Your Credentials</h5>
            <div class="card-body">

                <?php include('../codes/message.php'); ?>

                <form class="form-group" method="POST" action="#">
                        
                    <label>Full Name:</label>
                    <input type="text" name="full_name" class="form-control" placeholder="Enter Fullname" >

                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Usrename">
                    
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required minlength="10">

                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required minlength="10">
                    <br>
                    <input type="submit" name="register_btn" value="Sign Up" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    

    
<?php include_once('partial/log-footer.php'); ?>