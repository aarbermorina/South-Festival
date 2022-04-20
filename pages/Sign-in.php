<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="signin-signup-style.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="">
        <div class="sign-in-container">
            <div class="sign-in">
                <h1>Sign in</h1>
                <input id="SIemail" class="texts" type="email" placeholder="E-mail">
                <label id="labelSIEmail"></label>
                <input id="SIpassword" class="texts" type="password" placeholder="Password">
                <label id="labelSIPassword"></label>
                <div class="remember-me">
                    <a href="" onclick="heh()">Forgot your password?</a>
                </div>
                <input type="button" value="Login" class="login" onclick="signIn()">
                <a href="signup.html#sign-up-container" id="sign-up">Don't have an account? Sign up!</a>
            </div>
        </div>
    </form>
</body>
</html>