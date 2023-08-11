<style>
    @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
    
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        
    }

    body {
        background-image: linear-gradient(-225deg, #e3eefd 0%, #ede6ff 100%);
        background-image: linear-gradient(to top, #aea8ed 0%, #d6fedc 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;
        font-family: 'Vibur', cursive;
        font-family: 'Abel', sans-serif;
        opacity: .95;
    }

    form {
        width: 450px;
        min-height: 500px;
        height: auto;
        border-radius: 5px;
        margin: 2% auto;
        box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
        padding: 2%;
        background-image: linear-gradient(-225deg, #e3f6fd 100%);
    }

    form .con {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: space-around;
        justify-content: space-around;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0 auto;
    }

    header {
        margin: 2% auto 10% auto;
        text-align: center;
    }

    header h2 {
        font-size: 250%;
        font-family: 'Playfair Display', serif;
        color: #3e403f;
    }

    header p {letter-spacing: 0.05em;}

    .input-item {
        background: #fff;
        color: #333;
        padding: 14.5px 0px 15px 9px;
        border-radius: 5px 0px 0px 5px;
    }

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

    input:focus {
        transform: translateX(-2px);
        border-radius: 5px;
    }

    button {
        display: inline-block;
        color: #252537;
        background: #B8F2E6;
        width: 260px;
        height: 50px;
        padding: 0 20px;
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
        0% {transform: translateY(3px);}
        100% {transform: translateY(5px);}
    }

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

<div class="overlay">
    <form method="POST">
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

                <!--   fullname -->
                <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                </span>
                <!--   user name Input-->
                <input class="form-input" id="txt-input" type="text" placeholder="Fullname" name="full_name" value="{{ old('full_name') }}"  required>
                
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

                <!--      button LogIn -->
                <button class="log-in"> Register </button>
            </div>
        </div>
    </form>
    <!-- End Form -->
</div>