<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <title>Login - Pilot Pairing</title>
</head>
<body>
@include('inc.message-body')
  <section class="intro">
    <row>
      <div class="col-md-5 left">

        <a href="#"><img src="img/logo.png" alt=""></a>
        
        <div class="footer-copy">
          <p>© PilotPairing 2018 | All right reserved</p>
        </div>
        <div class="overlay"></div>
      </div>
      <div class="col-md-7 col-sm-12 right">
      
        <!-- Login -->
      <form method="POST" class="login-form" action="{{ route('login')}}">
          <div class="header">
            <a href="#"><img src="img/logo-dark.png" class="logo-mobile" alt=""></a>
          </div>
          <h1 class="faster">Login</h1>
          <p class="fast">Welcome back, please login to your account</p>

          <div class="form-group">
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email Address">
            @if(session('errors'))
          <span>{{ session('errors')->get('email')[0]}}</span>
            @endif
            <img src="img/lock.svg" class="ico">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <img src="img/password.svg" class="ico">
          </div>

          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="fpass">
            <label class="form-check-label" for="fpass">Remember me</label>
            <a href="#" class="fpass">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-solid">LOGIN</button>
          {{ csrf_field()}}
       <button type="button" class="btn btn-outline solid cra">CREATE ACCOUNT</button> 

          <div class="footer-copy">
            <p>© PilotPairing 2018 | All right reserved</p>
          </div>
        </form>
        <!-- /Login -->

        <!-- Create Account -->
        <form method="post" class="create-account" action="postsignup">
          <div class="header">
            <a href="#"><img src="img/logo-dark.png" class="logo-mobile" alt=""></a>
          </div>

          <h1 class="faster">Create an account</h1>
          <p class="fast">Don't have an account? Join the network by entering<br>your e-mail address.</p>

          <div class="form-group">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address">
            <img src="img/lock.svg" class="ico">
            <span class="form-error" id="error_email_message"></span>
          </div>
          <!-- <button type="submit" class="btn btn-solid">CONTINUE</button> -->
          <a href="{{url('signup')}}"id="continue1" class="btn btn-solid">continue</a>


          <p><a href="" class="log">Already have an account? <strong>Sign Up</strong></a></p>

          <div class="footer-copy">
            <p>© PilotPairing 2018 | All right reserved</p>
          </div>
        </form>
        <!-- /Create Account -->

        <!-- Forgot Password -->
        <form method="post" class="forgot-password">
          <div class="header">
            <a href="#"><img src="img/logo-dark.png" class="logo-mobile" alt=""></a>
          </div>

          <h1 class="faster">Reset Your Password</h1>
          <p class="fast">Enter your email address, we will send you<br>a password reset link.</p>

          <div class="form-group">
            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email Address">
            <img src="img/lock.svg" class="ico">
          </div>
          <button type="submit" class="btn btn-solid">CONTINUE</button>

          <p><a href="#" class="btl"><img src="img/arrow-back.svg" alt=""> Back to Login</a></p>
          <div class="footer-copy">
            <p>© PilotPairing 2018 | All right reserved</p>
          </div>
        </form>
        <!-- /Forgot Password -->

      </div>
    </row>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>


$('#email').on('keyup', function (e){
          var email = $(this).val();
         
          $.ajax({
            method:'GET',
            url: `/confirm-email/${email}`,
            success: function (response){
              if (response.status){

                console.log('email exist');
              }else{
                console.log('email does not exist');
              }
            }
          });
   });
    $(function(){
      $('#error_email_message').hide();

      var email_error = false;
      
      $('#email').focusout(function(){
        var pattern = new RegExp(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);

          if(pattern.test($('#email').val())){

            $('#error_email_message').hide();
          }else{
            $('#error_email_message').html('invalid email format');
            $('#error_email_message').show();
            email_error = true;
          }

      })

    
  

    })
     
    </script>
</body>
</html>
