<!DOCTYPE html>
<html>
<head>
  <title>Sistem Informasi Inventory</title>


  <link rel="stylesheet" type="text/css" href="{{url('vendor/logintp/css/main.css')}}">

  <link rel="stylesheet" type="text/css" href="{{url('vendor/logintp/css/animate.min.css')}}">

   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">

     <!-- Bootstrap 3.3.7 -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
     <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>

  <div class="limiter ">
   <div class="container-login100 ">
     
      <div class="wrap-login100 wow bounceInUp" style="background-image: url('{{asset('vendor/logintp/images/home-banner-bg.png')}}');" >
         <div class="pc">

           <div class="login100-pic">
               <img src="{{url('vendor/logintp/images/header-img.png')}}" alt="image">
            </div>
            
         </div>
         <div class="silog  ">
               
             <img src="{{url('vendor/logintp/images/logosmk.png')}}" alt="image" class="ls">

              <form action="{{ url(config('adminlte.login_url', 'login')) }}" method="post">
               <span class="login100-form-title">
                  Sistem Informasi 
               </span>
                  @csrf
                 <div class="wrap-input100 has-feedback {{ $errors->has('email') ? 'has-error' : '' }}" >
                  <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                  </span>

                  @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
               </div>

               <div class="wrap-input100 has-feedback {{ $errors->has('password') ? 'has-error' : '' }}" >
                  <input class="input100" type="password" name="password" placeholder="Password">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                     <i class="fa fa-lock" aria-hidden="true"></i>
                  </span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
               </div>
               
               <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit">
                     Login
                  </button>
               </div>
              </form>
         </div>     

   </div>
   <!-- end wrap -->
</div>
<!-- end container -->
</div>
<!-- end limiter -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

<script type="text/javascript">
    (function ($) {

  // Initiate the wowjs animation library
  new WOW().init();
  $('.js-tilt').tilt({
      scale: 1.1
   })


})(jQuery);
</script>

</body>



</html>


