<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/79b7275cec.js" crossorigin="anonymous"></script>
    <title>Sign in & Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                <img class="bg-img" src="../SIGN IN & SIGN UP FORM/img/com.png" alt="...">
                    <h2 class="title">Sign in</h2>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder ="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder ="Password">
                    </div>
                    <input type="button" value="Login" class="btn solid">
                    <p class="social-text">Or Sign in with social paltform</p>
                    <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>


                </form>
                <form action="" class="sign-up-form">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder ="Username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder ="Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder ="Password">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder ="Confirmn Password">
                    </div>
                    <input type="button" value="Sign up" class="btn solid">

                    <p class="social-text">Or Sign up with social paltforms</p>

                    <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                    </div>


                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">   
                    <h3>Create new account?<h3>
                        <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                    </div>

                <img src="../SIGN IN & SIGN UP FORM/img/signin.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Login Form<h3>
                        <button class="btn transparent" id="sign-in-btn">Sign in</button>
                    </div>
                
                    <img src="../SIGN IN & SIGN UP FORM/img/cra.svg" class="image" alt="">
            </div>
        </div>
</div>

<script src="app.js"></script>

</body>
</html>