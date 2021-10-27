<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/Login&Signup.css">
</head>
<body>

<div class="Login_Signup">
    <div class="Login_container">
        <div class="title">
            <p>Login </p>
        </div>
        <form action="LoginSignup/login" method="POST" >
            <div class="form_login">
                <div class="logo_form"><i class="fas fa-envelope"></i></i></div>
                <input type="username" name="email" id="" placeholder="Email" class="username">
            </div>
            <div class="form_login">
                <div class="logo_form"><i class="fas fa-lock"></i></div>                
                <input type="username" name="pass" id="" placeholder="PassWord" class="password">
            </div>
            <input type="submit" value="Login" class="form_submit">
        </form>
    </div>

    <div class="Signup_container">

        <div class="form_container">
            <div class="title">
                <p>Sign Up</p>
            </div>

            <form action="">
                <div class="form_sigup"> 
                    <div class="logo_form"><i class='fas fa-user-alt'></i></div> 
                    <input type="username" name="" id="" placeholder="Name" class="password">
                </div>

                <div class="form_sigup">
                    <div class="logo_form"><i class='fas fa-user-alt'></i></div> 
                    <input type="username" name="" id="" placeholder="First Name" class="password">
                </div>

                <div class="form_sigup">
                    <div class="logo_form"><i class="fas fa-envelope"></i></div> 
                    <input type="username" name="" id="" placeholder="Email" class="password">
                </div>

                <div class="form_sigup">
                    <div class="logo_form"><i class="fas fa-phone-alt"></i></i></div> 
                    <input type="username" name="" id="" placeholder="Number" class="password">
                </div>
                
                <div class="form_sigup">
                    <div class="logo_form"><i class="fas fa-lock"></i></div> 
                    <input type="username" name="" id="" placeholder="PassWord" class="password">
                </div>

                <input type="submit" value="Sign Up" class="form_submit">

            </form>

        </div>
    </div>
</div>
</body>
</html>