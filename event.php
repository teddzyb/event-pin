<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/event.css">
    <script src="assets/event.js"></script>
    <title>Event Pin – Event</title>

    <!-- enter code above included in head -->
    <?php include 'nav.php'; ?>

    <!-- enter code below included in body -->
    <div class="eventheader">
        <?php
            $headerpath = "assets/images/header.png";
            echo "<img src=" . $headerpath . ">";
        ?>
    </div>
    
    <div class="options">
        <div class="register">
            <h4>REGISTER NOW</h4>
        </div>
        <div class="more">
            <span class="iconify" data-inline="false" data-icon="carbon:overflow-menu-vertical" style="font-size: 22px;"></span>
        </div>
    </div>

    <div class="content">

        <div class="left-content">
            <div class="about-head">
                <h3>About this event</h3>
            </div>
            <div class="about-details">
                <div class="details-box">
                    <div class="row-1">
                        <div class="date">
                            <span class="iconify" data-inline="false" data-icon="bi:calendar-week-fill" style="font-size: 20px;"></span>
                            <?php
                                $eventdate = "Thu, 13 May 2021, 4:00 PM – Thu, 20 May 2021, 7:00 PM CST"; //
                                echo "<p>" . $eventdate . "</p>";
                            ?>
                        </div>
                        <div class="host">
                            <span class="iconify" data-inline="false" data-icon="clarity:group-solid" style="font-size: 26px;"></span>
                            <?php
                                $eventhost = "<u>Reesby IoT Recruitment</u>";
                                echo "<p>" . $eventhost . "</p>";
                            ?>
                        </div>
                    </div>
                    <div class="row-2">
                        <div class="location">
                            <span class="iconify" data-inline="false" data-icon="fluent:location-24-filled" style="font-size: 24px;"></span>
                            <?php
                                $eventlocation = "<u>Twitch</u>, <u>Discord</u>";
                                echo "<p>" . $eventlocation . "</p>";
                            ?>
                        </div>
                        <div class="tags">
                            <span class="iconify" data-inline="false" data-icon="bi:pin-angle-fill" style="font-size: 22px;"></span>
                            <?php
                                $eventtags = "<u>Virtual</u>, <u>Workshop</u>, <u>Hackathon</u>";
                                echo "<p>" . $eventtags . "</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">

            </div>
        </div>

        <div class="right-content">
            <div class="pinned" id="pinned">
                <?php
                    $pinned = "
                        <b>EVENT DATE/LOCATION</b><br>
                        <ul>
                            <li>Fully Online</li>
                            <li>Global Event</li>
                            <li>Starts 13th May and runs for 1 week.</li>
                        </ul>
                        <b>Who should register:</b><br>
                        <ul>
                            <li>Beginners, Students, Experts</li>
                            <li>Technologists, Cybersecurity Specialists, Enthusiastics, Programmers/Engineers, Marketing and Innovation Specialists</li>
                        </ul>
                        <b>PRIZES:</b>
                        <ul>
                            <li>Giveaways $400 value prize bundle</li>
                            <li>Runners Up: $1k value prize bundle</li>
                            <li>Major Prize: $1.5K value prize bundle</li>
                        </ul>
                    ";
                    echo $pinned;
                ?>
            </div>
        </div>
    </div>

</body>    
</html>