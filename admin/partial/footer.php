<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script class="text/javascript">
        $(document).ready(function(){
            $("table").DataTable();

            //add new form/preform to save data into the database
            // $("#submitBtn").click(function(e){
            //   if($("#pre-form-add")[0].checkValidity()){
            //       e.preventDefault();

            //       $("#submitBtn").val('Please wait.......');
            //       $.ajax({
            //           url: 'config/process.php',
            //           method: 'post',
            //           data: $("#pre-form-add").serialize()+'&action=add_form',
            //           success:function(response){
            //               console.log(response);
            //               $("#submitBtn").val('Submit Form');
            //           }
            //       });
            //   }
            // });
        });
    </script>

  </body>
</html>