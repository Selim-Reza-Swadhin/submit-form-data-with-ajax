<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../website/js/vendor/jquery-2.2.4.min.js"></script>
    <title>Submit form data with AJAX - Selim Reza Swadhin</title>
    <!--==================CSS==================-->
    <link rel="stylesheet" href="../website/css/font-awesome.min.css">
    <link rel="stylesheet" href="../website/css/bootstrap.css">
    <link rel="stylesheet" href="../website/css/main.css">
    <!--==================CSS==================-->
    <style> .alert-successs{background-color: #1eaf59;color: white;display: none}
            .required{color: #FF0000;}
            .error-message{font-size: 12px;color: red;display: none;}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <center>
                        <img width="50 " src="" alt="no image">
                    </center>
                    <h5 class="card-title text-center">Submit form data with AJAX</h5>
                    <div class="alert alert-successs" id="successMessage">Form data is saved !</div>
                    <form action="ajax-script.php" id="ajaxForm" method="post">
                        <div class="form-label-group">
                            <label for="inputEmail">Name<span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"  placeholder="Name" autocomplete="off">
                            <div id="nameError" class="error-message">nameError</div>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">Email<span class="required">*</span></label>
                            <input type="text" name="email" id="email" class="form-control"  placeholder="Email" autocomplete="off">
                            <div id="emailError" class="error-message">emailError</div>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">Contact<span class="required">*</span></label>
                            <input type="text" name="contact" id="contact" class="form-control"  placeholder="01724063642" maxlength="11" >
                            <div id="contactError" class="error-message">contactError</div>
                        </div> <br/>
                        <button type="submit" name="submitBtn" id="submitBtn" class="btn btn-md btn-primary btn-block text-uppercase" >Submit Form</button>
                        <center><img src="green-dots.gif" id="loader" style="display: none"/></center>
                    </form>

                    <div class="row footer-bottom d-flex justify-content-between align-items-center">
                        <p class="col-lg-12 footer-text text-center">
                            Copyright &copy; <?= date('Y'); ?> All rights reserved | Designed & Developed <br> <i class="fa fa-heart-o" style="color: red" aria-hidden="true"></i> by <a href="https://selimrezaswadhin.com" target="_blank">Selim Reza Swadhin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $("form#ajaxForm").on("submit",function (e) {
      e.preventDefault();
      let name = $("#name").val();
      let email = $("#email").val();
      let contact = $("#contact").val();
      if (name == ""){
          $("#nameError").show();
          $("#nameError").html("Please enter name");
          $("#nameError").fadeOut(4000);
          $("#name").focus();
      }else if (email == ""){
          $("#emailError").show();
          $("#emailError").html("Please enter email");
          $("#emailError").fadeOut(4000);
          $("#email").focus();
      }else if (!validateEmail(email)){
          $("#emailError").show();
          $("#emailError").html("Please enter valid email");
          $("#emailError").fadeOut(4000);
          $("#email").focus();
      }else if (contact == ""){
          $("#contactError").show();
          $("#contactError").html("Please enter contact");
          $("#contactError").fadeOut(4000);
          $("#contact").focus();
      }else if (!validatePhoneNumber(contact)){
          $("#contactError").show();
          $("#contactError").html("Please enter valid contact");
          $("#contactError").fadeOut(4000);
          $("#contact").focus();
      }else{
          $("#submitBtn").hide('fast');
          $("#loader").show('fast');
          $.ajax({
              url:"ajax-script.php",
              data:{key:"saveData",name:name,email:email,contact:contact},
              method:"POST",
              success:function (response) {
                //alert(response);
                  let data = response.split('^');
                  if (data[1] == "saved") {
                      $("#submitBtn").show('fast');
                      $("#loader").hide('fast');
                      $("#successMessage").show('fast');
                      $("#successMessage").fadeOut(5000);
                      $("form#ajaxForm").each(function () {
                          this.reset();
                      });
                  }
              }
          });
      }
  });

  /*========================================================================================
                                      VALIDATION CODE
    ========================================================================================*/

  function validateEmail(inputText) {
      let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(inputText.match(mailformat)) {
          return true;
      } else{
          return false;
      }
  }

  function validatePhoneNumber(inputtxt) {
      let phonenoPattern = /^\+?([0-9]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      if( inputtxt.match(phonenoPattern) ) {
          return true;
      }
      else {
          return false;
      }
  }

</script>
</body>
</html>
