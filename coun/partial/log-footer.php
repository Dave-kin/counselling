<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    $("#register-btn").click(function(e){
    if($("#register-form")[0].checkValidity()){
        e.preventDefault();
        $("#register-btn").val('Please wait.....');
        if($("#password").val() != $("#cpassword").val()){
        $("#passError").text('*Password does not matched!');
        $("#register-btn").val('Sign Up');
        }
        else{
        $("#passError").text('');
        $.ajax({
            url: 'php/action.php',
            method: 'post',
            data: $("#register-form").serialize()+'&action=register',
            success:function(response){
                $("#register-btn").val('Sign Up');
                if(response == 'register'){
                window.location = 'login.php';
                }
                else{
                $("#regAlert").html(response);
                }
            }
        });
      }
    }
    });
});
</script>
</body>
</html>