<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>Sign Up - Pilot Pairing</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="img/logo-dark.png" alt=""></a>
      <span class="navbar-text">
        <button type="button" class="btn btn-primary">SUPPORT</button>
      </span>
    </div>
  </nav>

  <!-- MultiStep Form -->
  <div class="">
    <div class="col-md-10 offset-1">
      <form id="msform" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Basic Profile</li>
          <li>Interest</li>
          <li>Profile Picture</li>
          <li>Payment</li>
        </ul>
    
         
               {{ csrf_field() }}
        <!-- Basic Profile -->
        <fieldset>
          <h2 class="fs-title">Basic Profile</h2>
          <h3 class="fs-subtitle">Fill in your personal information</h3>

    

          <div class="form-row">
            <div class="col form-group ">
            <input type="text"  class="form-control" placeholder="First_name" id="firstname" name="first_name" value="" >
            <img src="img/user-icon.svg" class="ico">
            <span class="form-error" id="error_first_name_message"></span>
            </div>
            <div class="col form-group    ">
              <input type="text" class="form-control" placeholder="Last_name" name="last_name" value=""  id="lastname"  >
              <img src="img/user-icon.svg" class="ico">
              <span class="form-error" id="error_last_name_message"></span>

            </div>
          </div>

          <div class="form-row">
            <div class="col form-group ">
              <input type="email" class="form-control" id="email" placeholder="Email address" name="email" >
              <img src="img/lock.svg" class="ico">
              <span class="form-error" id="error_email_message"></span>
            </div>
            <div class="col form-group  ">
              <input type="text" class="form-control" placeholder="Phone_number" name="phone_number" id="phonenumber">
              <img src="img/phone.svg" class="ico">
              <span class="form-error" id="error_phonenumber_message"></span>

            </div>
          </div>

          <div class="form-row">
            <div class="col form-group   ">
              <input type="text" class="form-control" placeholder="Password" name="password" id="password">
              <img src="img/password.svg" class="ico">
              <span class="form-error" id="error_password_message"></span>
            </div>
            <div class="col form-group ">
              <input type="text" class="form-control" placeholder="Confirm Password" name="password" id="confirm_password">
              <img src="img/password.svg" class="ico">
              <span class="form-error" id="error_confirmpassword_message"></span>
            </div>
          </div>

          <div class="form-row">
            <div class="col form-group ">
              <select id="input" class="form-control" required="required" name="country">
                <option>Nigeria</option>
                <option>USA</option>
              </select>
              <img src="img/location.svg" class="ico">
            </div>
            <div class="col form-group ">
              <select id="input" class="form-control" required="required" name="state">
                <option>Ikeja</option>
                <option>Miami</option>
              </select>
              <img src="img/location.svg" class="ico">
            </div>
          </div>
          
          <input type="button" name="next" class="next action-button" value="Next" id="next1"/>
         
        </fieldset>
        <!-- /Basic Profile -->

        <!-- Interest -->
        <fieldset>
          <h2 class="fs-title">Interest</h2>
          <h3 class="fs-subtitle">Your presence on the social network</h3>
          {{ csrf_field() }}
          <label>Interest</label>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="interest[]" value="Fly for fun"> fly for fun
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="interest[]" value="Fly for assimulation">fly for assimulation
                </label>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="interest[]" value="Fly for business"> fly  for business
                </label>
              </div>

          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
          <input type="button" name="next" class="next action-button" value="Next" id="next2"/>
           
        </fieldset>
        <!-- /Interest -->

        <!-- Profile Picture -->
        <fieldset>
          <h2 class="fs-title">Profile Picture</h2>
          <h3 class="fs-subtitle">Your presence on the social network</h3>

          <div class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label col-sm-2">Upload Pic:</label>
              <div class="col-xs-3">
                <input type="file" name="image" id="image" />
              </div>
            </div>
          </div>
          
          
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
          <input type="button" name="next" class="next action-button" value="Next" id="next3"/>
         
        </fieldset>
        <!-- Profile Picture -->

        <!-- Payment -->
        <fieldset>
          <h2 class="fs-title">Payment</h2>
          <h3 class="fs-subtitle">Fill in your credentials</h3>


          
          <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
          <input type="submit" name="submit" class="submit action-button" value="Submit" id="submit"/>
        
        </fieldset>
        <!-- /Payment -->

      </form>
    </div>
  </div>
  <!-- /.MultiStep Form -->
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="js/tipsy.js"></script>
  <script src="js/WOW.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>

//jQuery time
var current_fs, next_fs, previous_fs;
var left, opacity, scale;
var animating;

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  
  next_fs = $(this).parent().next();
  
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  next_fs.show(); 
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      scale = 1 - (1 - now) * 0.2;
      left = (now * 50)+"%";
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      console.log(current_fs.serialize());
      current_fs.hide();
      animating = false;
    }, 
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});


$(".submit").on('click' ,function (e){
  e.preventDefault();
  // let data = $('#msform').serialize();
  // data.append
  let form = $("#msform").get(0)
  console.log(form)
  let data = new FormData (form);
  // console.log(data)
  let image = $('#image');
  // console.log(image, image[0].files[0])
  data.append('_token()', '{{csrf_token()}}');
  // data.append('image ', image[0].files[0]);

  $.ajax({
    method: 'POST',
    url: '/signup', 
    data: data,
    processData:false,
    contentType:false,
    success: function (response){
        console.log(response)
        window.location.assign('/login');
    },
    error: function(response){
      console.log(response);
    } 
  });
});  

      $('#email').on('keyup', function (e){
          var email = $(this).val();
         
          $.ajax({
            method:'GET',
            url: `/confirm-email/${email}`,
            success: function (response){
              if (response.status){

                toastr[danger]('email exist');
              }else{
                console.log('email does not exist');
              }
            }
          });

        $(function(){
        $('#error_first_name_message').hide();
        $('#error_last_name_message').hide();
        $('#error_email_message').hide();
        $('#error_password_message').hide();
        $('#error_confirmpassword_message').hide();
        $('#error_phonenumber_message').hide();
        

          var error_first_name = false; 
          var error_last_name = false;
          var error_email = false ;
          var error_password = false;
          var error_confirmpasswrod =false;
          var error_phonenumber =false;
       

       
            $('#password').focusout(function(){
              var password_length = $('#password').val().length;
              
              if(password_length < 8 || password_length > 32){
                $('#error_password_message').html("password should at least 8 character long");
                $('#error_password_message').show();
                error_password = true;
              }else
              {
                $('#error_password').hide();
              }
            });

            $('#confirm_password').focusout(function(){
                var password = $('#password').val();
                var confirmpass = $('#confirmpassword').val();
                if(password != confirmpass){
                  $('#error_confirmpassword_message').html("password does not match");
                  $('#error_confirmpassword_message').show();
                  error_confirmpassword = true;
                }else{
                  $('#error_first_name_message').hide();
                }
            });
            $('#email').focusout(function(){
              var pattern = new RegExp(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);
              if(pattern.test($('#email').val())){
                 $('#error_email_message').hide();
                 }
                 else{
                  $('#error_email_message').html('invalid email format');
                      $('#error_email_message').show();
                      error_email = true;

                 }
            });
            $('#phonenumber').focusout(function(){
              var phone = $('#phonenumber').val().length;

              if(phone < 11 || phone > 13){
                $('#error_phonenumber_message').html('invalid phone number');
                $('#error_phonenumber_message').show();
                error_phonenumber = true;
              }else{
                  $('#error_phonenumber_message').hide();
              }
            })

          
        }); 
          
      });



              
     

</script>
</body>
</html>