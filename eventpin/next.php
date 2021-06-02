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
    <title>Sign-up Planner Next</title>
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
            background-image:url(assets/RED3.jpg);
            background-size: cover;
        }
    </style>

<!-------------the form--------------> 

    <div id="big-container-third">
        <div id="small-container">
            <h1 class="align">Sign Up</h1>
            <a href="http://localhost/eventpin/planner.php" class="category btn active"><h5><u>Event Planner</u></h5></a>
            <h5 id="line">|</h5>
            <a href="http://localhost/eventpin/signin.php" class="category btn"><h5><u>User</u></h5></a>
        </div>
        <div id="sec-container" class="align">
            <ul>
            <form action="" method="post" id="arrange">
            <li><span class="iconify" data-icon="mdi:flower-tulip-outline" data-inline="false"></span><h3 class="question">What's your level of experience in hosting Events?</h3></li>
                <input type="text" name="input" placeholder="Type your answer here..." class="space">
                <hr></hr>

                <li><span class="iconify" data-icon="fluent:people-community-24-regular" data-inline="false"></span><h3 class="question">How many people helps plan your events?</h3></li>
                <input type="text" name="input" placeholder="Type your answer here..." class="space">
                <hr></hr>

                <li><span class="iconify" data-icon="clarity:calendar-line" data-inline="false"></span></span><h3 class="question">How often do you plan to host events?</h3></li>
                <input type="text" name="input" placeholder="Type your answer here..." class="space">
                <hr></hr>

                <li><span class="iconify" data-icon="fa-solid:theater-masks" data-inline="false"></span></span><h3 class="question">What type of events do you usually plan?</h3></li>
                <input type="text" name="input" placeholder="Type your answer here..." class="space">
                <hr></hr>
                <br>
                <li><button type="submit" name="submit">Finish</button>
            </form>
            </ul>
        </div>
    </div>

</body>
</html>