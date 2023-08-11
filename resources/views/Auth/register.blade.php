<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/cssregister.css ')}}">
    <head>
  
</head>

</head>
<body>
    <div class="overlay">
<form method="POST" action="{{ route('register') }}">
    @csrf

   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Register</h2>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="Username" name="username" value="{{ old('username') }}"  required>
     
      <br>

      <!--   display name -->
      <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="Display Name" name="display_name" value="{{ old('display_name') }}"  required>
     
      <br>

      <!--   email -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   email Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="Email" name="email" value="{{ old('email') }}" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     

      <br>

          <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Confirm Password" id="pwd"  name="password_confirmation" required>
     

      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in"> Register </button>
   </div>
  
<!--   other buttons 
                                            <div class="other">
                                                <button class="btn submits frgt-pass">Already Have An Account</button>

                                                <button class="btn submits sign-up" href="{{ route('login')}}" formnovalidate>Log In Now
                                                <button type="submit" class="btn submits sign-up" name="register" value="register">Log In Now
                                                    <a class="btn submits sign-up" href="{{ route('login')}}">Log In Now
                                                <i class="fa fa-user-plus" ></i>
                                                </button>
                -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>
</body>


</html>