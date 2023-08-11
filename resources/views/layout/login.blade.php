@include('admin.layout.head')
<head>
    <style>
        /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
@import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
/* End Fonts */
/* Start Global rules */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
/* End Global rules */

/* Start body rules */
body {
    background-image: linear-gradient(-225deg, #e3eefd 0%, #ede6ff 100%);
    background-image: linear-gradient(to top, #aea8ed 0%, #d6fedc 100%);
    background-attachment: fixed;
    background-repeat: no-repeat;

    font-family: 'Vibur', cursive;
/*   the main font */
    font-family: 'Abel', sans-serif;
opacity: .95;
/* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
}



/* |||||||||||||||||||||||||||||||||||||||||||||*/
/* //////////////////////////////////////////// */




/* End body rules */

/* Start form  attributes */
form {
    width: 500px;
    min-height: 600px;
    height: auto;
    border-radius: 5px;
    margin: 3% auto;
    box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
    padding: 3%;
    background-image: linear-gradient(-225deg, #40879a 100%);
}
/* form Container */
form .con {
    display: -webkit-flex;
    display: flex;
  
    -webkit-justify-content: space-around;
    justify-content: space-around;
  
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  
      margin: 0 auto;
}

/* the header form form */
header {
    margin: 2% auto 10% auto;
    text-align: center;
}
/* Login title form form */
header h2 {
    font-size: 250%;
    font-family: 'Playfair Display', serif;
    color: #3e403f;
}
/*  A welcome message or an explanation of the login form */
header p {letter-spacing: 0.05em;}


.input-item {
    background: #fff;
    color: #333;
    padding: 14.5px 0px 15px 9px;
    border-radius: 5px 0px 0px 5px;
}



/* Show/hide password Font Icon */
#eye {
    background: #fff;
    color: #333;
  
    margin: 5.9px 0 0 0;
    margin-left: -20px;
    padding: 15px 9px 19px 0px;
    border-radius: 0px 5px 5px 0px;
  
    float: right;
    position: relative;
    right: 1%;
    top: -.2%;
    z-index: 5;
    
    cursor: pointer;
}
/* inputs form  */
input[class="form-input"]{
    width: 250px;
    height: 50px;
  
    margin-top: 2%;
    padding: 15px;
    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    
}
input[id="txt-input"] {width: 250px;}
/* focus  */
input:focus {
    transform: translateX(-2px);
    border-radius: 5px;
}

button {
    display: inline-block;
    color: #252537;
  
    width: 260px;
    height: 50px;
  
    padding: 0 20px;
    background: #B8F2E6;
    border-radius: 5px;
    
    outline: none;
    border: none;
  
    cursor: pointer;
    text-align: center;
    transition: all 0.2s linear;
    
    margin: 7% auto;
    letter-spacing: 0.05em;
}

.submits {
    width: 48%;
    display: inline-block;
    float: left;
    margin-left: 2%;
}

.frgt-pass {background: transparent;}

.sign-up {background: #B8F2E6;}

button:hover {
    transform: translatey(3px);
    box-shadow: none;
}

button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100% {
        transform: translateY(5px);
    }
}

/*  cảnh báo lỗi */
.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}

ul {
  list-style: none;
}


    </style>
</head>
<div class="overlay">
<form method="POST">
@csrf
    <div class="con">
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

    <br>
        <p>Please enter your account to login</p>
   </header>

   <br>
   
   <div class="field-set">
        <span class="input-item">
            <i class="fa fa-user-circle"></i>
        </span>
        <!--   user name Input-->
        <input class="form-input" id="txt-input" type="text" placeholder="Username or Email" name="username" required>
     
    <br>

        <span class="input-item">
            <i class="fa fa-key"></i>
        </span>
        <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
    
    <br>

        <button class="log-in" > Log In </button>
    </div>

    </div>
  
</form>
</div>