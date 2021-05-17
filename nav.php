    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property='og:title' content='Event Pin' />
    <meta property='og:description' content='Your #1 event discovery and management website!' />
    <meta property='og:image' content='assets/images/eventpin.png' />
    <link rel='icon' href='assets/favicon.ico'>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/nav.css">
    <script src="assets/global.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
</head>
<body>
    
    <div id="top">
        <div id="topleft" onclick="redirect('index.php')">
            <img src="assets/images/logo.png">
            <h2>EVENT PIN</h2>
        </div>
        <div id="topright">
            <h3><a href="index.php">HOME</a></h3>
            <h3>EVENTS</h3>
            <h3>TICKETS</h3>
            <div id="profile">
                <img src="assets/images/profile.jpeg">
                <span class="iconify" data-inline="false" data-icon="akar-icons:chevron-down" style="font-size: 16px;" color="white"></span>
            </div>
        </div>
    </div>

    <div id="left">
    <div class="tooltip">
        <span class="tooltiptext">Corporate Events</span>
        <span id="corporate" class="iconify" data-inline="false" data-icon="bx:bxs-building-house"></span>
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Social Events</span>
        <span id="social" class="iconify" data-inline="false" data-icon="mdi:party-popper"></span>
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Virtual Events</span>
        <span id="virtual" class="iconify" data-inline="false" data-icon="fluent:device-meeting-room-remote-28-filled"></span> 
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Fundraising Events</span>
        <span id="fundraising" class="iconify" data-inline="false" data-icon="ri:funds-fill"></span>
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Festivals</span>
        <span id="festivals" class="iconify" data-inline="false" data-icon="heroicons-solid:music-note"></span>
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Community Events</span>
        <span id="community" class="iconify" data-inline="false" data-icon="fluent:people-community-20-filled"></span>
        </div>
        <div class="tooltip">
        <span class="tooltiptext">Pop-up Events</span>
        <span id="popup" class="iconify" data-inline="false" data-icon="bx:bxs-time-five"></span>
        </div>
    </div>

</body>

