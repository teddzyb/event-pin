<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/index.css">
    <script src="assets/index.js"></script>
    <title>Event Pin – Home</title>

    <!-- enter code above included in head -->
    <?php include 'nav.php'; ?>

    <!-- enter code below included in body -->
    <div class="mainheader"></div>
    <div id="categories">
        <div class="category">
            <h4>ALL</h4>
        </div>
        <div class="category">
            <h4>NEW</h4>
        </div>
        <div class="category">
            <h4>TODAY</h4>
        </div>
        <div class="category">
            <h4>THIS WEEKEND</h4>
        </div>
        <div class="category">
            <h4>FREE</h4>
        </div>
    </div>

    <div class="eventList">
        <div class="eventCard">
            <div class="eventImg">
                <img src="assets/images/reesbyhackathon.png">
            </div>
            <div onclick="toggleBookmark(this)" class="bookmark">
            <span style="display: flex;" class="iconify" data-inline="false" data-icon="bi:bookmark-plus"></span>
            <span style="display: none; color: #ff8403;" class="iconify" data-inline="false" data-icon="bi:bookmark-check-fill"></span>            </div>
            <div class="eventInfo">
                <div class="eventDetails">
                    <h3>Reesby Hackathon</h3>
                    <p>Thu, May 13, 2021, 4:00 PM CST</p>
                </div>
                <div class="eventTags">
                    <div class="tag">
                        <h5>Virtual</h5>
                    </div>
                    <div class="tag">
                        <h5>Workshop</h5>
                    </div>
                    <div class="tag">
                        <h5>Hackathon</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="eventCard">
            <div class="eventImg">
                <img src="assets/images/motherknowsbest.png">
            </div>
            <div onclick="toggleBookmark(this)" class="bookmark">
            <span style="display: flex;" class="iconify" data-inline="false" data-icon="bi:bookmark-plus"></span>
            <span style="display: none; color: #ff8403;" class="iconify" data-inline="false" data-icon="bi:bookmark-check-fill"></span>            </div>
            <div class="eventInfo">
                <div class="eventDetails">
                    <h3>Mother Knows Best - Herbal Cocktail Class</h3>
                    <p>Sun, May 9, 2021, 6:00 AM CST</p>
                </div>
                <div class="eventTags">
                    <div class="tag">
                        <h5>Cocktail Class</h5>
                    </div>
                    <div class="tag">
                        <h5>Herbal Class</h5>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="eventCard">
            <div class="eventImg">
                <img src="assets/images/sportsgrill.png">
            </div>
            <div onclick="toggleBookmark(this)" class="bookmark">
                <span style="display: flex;" class="iconify" data-inline="false" data-icon="bi:bookmark-plus"></span>
                <span style="display: none; color: #ff8403;" class="iconify" data-inline="false" data-icon="bi:bookmark-check-fill"></span>
            </div>
            <div class="eventInfo">
                <div class="eventDetails">
                    <h3>Phil’s Sports Grill - Game Day Sunday</h3>
                    <p>Fri, July 2, 2021, 11:00 AM CST</p>
                </div>
                <div class="eventTags">
                    <div class="tag">
                        <h5>Sports</h5>
                    </div>
                    <div class="tag">
                        <h5>Indoors</h5>
                    </div>
                    <div class="tag">
                        <h5>International</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


</body>    
</html>