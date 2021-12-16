<?php
include 'app/views/templates/header.php';
// *************************************
?>

<?php
// Call Model
include 'app/models/home/Home.php';

// call function
$topArticle = Home::show_article_home_top_1();
$recentArticle = Home::show_article_recent();
$popularArticle = Home::show_article_popular();
?>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="header-font">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">Start something that matters</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
            <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
            <p>
                <a>
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </a>
            </p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <!--<i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <!-- <i class="fa fa-linkedin w3-hover-opacity"></i> -->
        </div>
    </div>
    </header>

    <!--Quotes-->
    <div class="quotes">
        <h3>Motivational Quotes</h3>
        <div class="quote-box">
        <P>“Opportunities don't happen, you create them.” </P></div>
    </div>

    <!-- Promo Section - "We know design" -->
    
    <div class="w3-container w3-light-grey" style="padding:50px 16px; margin-top: 80px;">
        <div class="w3-row-padding">
            <div class="w3-col m6">
            <h3><?= $topArticle[0]['title'] ?></h3>
                <p>
                <?= mb_strimwidth($topArticle[0]['content'], 0, 300, "...") // Limit echo 300 chars ?>
                
                </p>
                <p><a href="#"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read more</button></a></p>
            </div>
            <div class="w3-col m6">
                <!-- <img class="w3-image w3-round-large" src="<?= rPath ?>public/assets/img/pic5.jpg" alt="Buildings" width="600" height="394"> -->
                <?= $topArticle[0]['VideoLink'] ?>
            </div>
        </div>
    </div>


    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1300px;margin-top:60px">
        <h3 class="w3-center" style="font-size: 30px;font-family: raleway;font-weight: bold;">Most Recent</h3>
        <!-- First Photo Grid-->
        <div class="w3-row-padding w3-padding-16 w3-center" id="work">
        <?php
        for($i=0; $i<sizeof($recentArticle); $i++){
            ?>
            <div class="w3-quarter">
                <img src="<?= rPath ?>public/assets/img/pic45.jpg" alt="Sandwich" style="width:100%">
                <h3><?= $recentArticle[$i]['title'] ?></h3>
                <p><?= mb_strimwidth($recentArticle[$i]['content'], 0, 100, "...") // Limit echo 100 chars ?></p>
                <p><a href="pagechange.html"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read more</button></a></p>
            </div>
        <?php
        }
        ?>

        <!-- Pagination -->
        <div class="w3-center w3-padding-32">
            <div class="w3-bar">
                <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
                <a href="#" class="w3-bar-item w3-black w3-button">1</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
                <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="w3-container" style="padding:128px 16px;margin-top: -120px;" id="team">
        <h3 class="w3-center" style="font-size: 30px;font-family: raleway;font-weight: bold;">Most popular</h3>
        <div class="w3-row-padding w3-grayscale" style="margin-top:40px">
            <?php
            for($i=0; $i<sizeof($popularArticle); $i++){
            ?>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="<?= rPath ?>public/assets/img/pic5.jpg" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h3><?= $popularArticle[$i]['title'] ?></h3>
                        <p class="w3-opacity">by: <?= $popularArticle[$i]['userID'] ?></p>
                        <p style="margin-top: 10px;"><?= mb_strimwidth($popularArticle[$i]['content'], 0, 100, "...") // Limit echo 100 chars ?></p>
                        <p style="margin-top: 8px;margin-bottom: 8px;"><a href="pagechange.html"><button class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read more</button></a></p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
            
        </div>
    </div>


    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>


    <!-- Contact Section -->
    <!--<div class="contactsection">-->
    <div class="w3-container w3-light-grey" style="padding:10px 16px; " id="contact">
       
        <h3 class="w3-center" style="font-family: raleway;font-weight: bold;">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div style="margin-top:48px" class="add">
            <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> TOKYO, JP</p>
            <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: 090-XXXX-XXXX</p>
            <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
            <br>
            <form action="/action_page.php" target="_blank" class="space">
                <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
                <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
                <p>
                    <button class="w3-button w3-black" type="submit">
              <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
                </p>
            </form>
            <!-- Image of location/map
            <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px"> -->
        </div>
        
    </div>
    

    

    <?php
// *************************************
include 'app/views/templates/footer.php';
?>