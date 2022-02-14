<?php 
    include_once('../config/runn.php');
    $auth->isLoggedIn();
    include_once('partial/log-header.php'); 
?>

    <div class="container">
        <div class="card">
            <img src="assets/images/kstu-1.jpg" class="imglink" alt="card-img-top">
            <h4>Enter Your Credentials To Login</h4>
            <div class="card-body">

                <?php include('../codes/message.php'); ?>

                <form class="form-group" action="#" method="POST">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Usrename" required>
                    <br>
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password" minlength="10" required>
                    <br>
                    <input type="submit" name="login_btn" value="Log In" class="btn btn-primary btn-block">
                    <br>
                    <div class="forpass">
                        <a href="forgot-password.php">Forgot Password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
<?php include_once('partial/log-footer.php'); ?>