<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="assets/nav.css">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="java.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-up User</title>
</head>
<body>
<!--------------top nav only----------->
<div id="top">
        <div id="topleft">
            <img src="assets/logo.png">
            <h2>EVENT PIN</h2>
        </div>
        <div id="topright">
            <h3>HOME</h3>
            <h3>EVENTS</h3>
            <h3>TICKETS</h3>
            <div id="profile">
                <img src="assets/profile.jpg">
                <span class="iconify" data-inline="false" data-icon="akar-icons:chevron-down" style="font-size: 16px;" color="white"></span>
            </div>
        </div>
</div>
<!--------------background------------->
    <style>
        body {
            background-image:url(assets/RED1.jpg);
            background-size: cover;
        }
    </style>

<!-------------the form-------------->

    <div id="big-container">
        <div id="small-container">
            <h1 class="align">Sign Up</h1>
            <a href="http://localhost/eventpin/planner.php" class="category btn"><h5><u>Event Planner</u></h5></a>
            <h5 id="line">|</h5>
            <a href="http://localhost/eventpin/signin.php" class="category btn active"><h5><u>User</u></h5></a>
        </div>
        <div id="sec-container" class="align">
            <ul>
            <form action="" method="post" id="arrange">
                <li><span class="iconify" data-icon="bx:bxs-user" data-inline="false"></span><input type="text" name="name" placeholder="Enter your name" class="space"></li>
                <hr></hr>
                <li><span class="iconify" data-icon="clarity:email-solid" data-inline="false"></span><input type="text" name="email" placeholder="Your E-mail" class="space"></li>
                <hr></hr>
                <li><span class="iconify" data-icon="ri:lock-password-fill" data-inline="false"></span><input type="password" name="pass" placeholder="Password" class="space"></li>
                <hr></hr>
                <li><span class="iconify" data-icon="ri:lock-password-line" data-inline="false"></span><input type="password" name="passrepeat" placeholder="Re-enter your password" class="space"></li>
                <hr></hr>
                <li id="check-box"><input type="checkbox" id="terms" name="terms" value="checked">
                <label for="terms">I agree to all statements in <u class="category">Terms of service</u></label>
                <li><button type="submit" name="submit">Register</button> <a href="http://localhost/eventpin/login.php" id="login"><u>I'm already a member</u></a></li> 
            </form>
            </ul>
        </div>
    </div>

</body>
</html>
       