<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>log in</title>
	<link rel="stylesheet" href="{{asset('css/csslogin.css ')}}">
    <head>
  
</head>


</head>
<body>
<div class="overlay">
<form method="POST" action="{{ route('login') }}">

@csrf
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Log In</h2>
    
@if($errors->any())
<br>
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


      <!--     A welcome message or an explanation of the login form -->
      <br>
      <p>Please enter your account to login</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="UserName or Email" name="username" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
     

     
     
      <br>



<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in" > Log In </button>
   </div>
  
                        <!--   other buttons 

                        <div class="other">
                            <button class="btn submits frgt-pass">Create An Account ?</button>
                        
                            <button class="btn submits sign-up">Sign Up 
                       
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </button>

                            
                        </div>
                                 End Other the Division -->
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>


</body>

</html>