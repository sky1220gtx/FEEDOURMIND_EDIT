

<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:50px 16px; margin-top: 80px;">
    <div class="w3-row-padding">
        <div class="w3-col m6">
        <?php
            include_once 'auth/config.php';
            // SELECT  START
            //SQL文を変数の中に入れる
            $sql = 'SELECT * FROM `fom_tblarticle`  
            ORDER BY `fom_tblarticle`.`Created`  DESC LIMIT 1;';
            //実行する
            $results = $dbh->query($sql);

    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        
        ?>
            <h3><?php echo $row['title']; ?></h3>
            <p>
            <?php echo substr($row['content'], 0, ); ?>
            </p>
            <p><button class="w3-button w3-light-grey w3-block"><a href="pagechange.html"><i
                            class="fa fa-arrow-circle-right"></i> Read more</a></button></p>
        </div>
        <div class="w3-col m6">
            <img class="w3-image w3-round-large" src="assets/img/pic5.jpg" alt="Buildings" width="600" height="394">
        </div>
        <?php
        }
        // connection close
        $dbh=null;
    ?>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1300px;margin-top:60px">
    <h3 class="w3-center" style="font-size: 30px;font-family: raleway;font-weight: bold;">Most Recent</h3>
    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="work">
    <?php
            include_once 'auth/config.php';
            // SELECT  START
            //SQL文を変数の中に入れる
            $sql = 'SELECT * FROM `fom_tblarticle`';
            //実行する
            $results = $dbh->query($sql);

    while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
        
        ?>
        <div class="w3-quarter">
            <img src="assets/img/pic45.jpg" alt="Sandwich" style="width:100%">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo substr($row['content'], 0, 100); ?></p>
            <p><button class="w3-button w3-light-grey w3-block"><a href="pagechange.html"><i
                            class="fa fa-arrow-circle-right"></i> Read more</a></button></p>
        </div>
        <?php
        }
        // connection close
        $dbh=null;
    ?>
    </div>
    


    
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
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="assets/img/pic5.jpg" alt="John" style="width:100%">
                <div class="w3-container">
                    <h3>John Doe</h3>
                    <p class="w3-opacity">CEO & Founder</p>
                    <p style="margin-top: 10px;">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales
                        pellentesque elementum.</p>
                    <p style="margin-top: 8px;margin-bottom: 8px;"><a href="pagechange.html"><button
                                class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read
                                more</button></a></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="assets/img/pic46.jpg" alt="Jane" style="width:100%">
                <div class="w3-container">
                    <h3>Anja Doe</h3>
                    <p class="w3-opacity">Art Director</p>
                    <p style="margin-top: 10px;">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales
                        pellentesque elementum.</p>
                    <p style="margin-top: 8px;margin-bottom: 8px;"><a href="pagechange.html"><button
                                class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read
                                more</button></a></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="assets/img/pic46.jpg" alt="Mike" style="width:100%">
                <div class="w3-container">
                    <h3>Mike Ross</h3>
                    <p class="w3-opacity">Web Designer</p>
                    <p style="margin-top: 10px;">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales
                        pellentesque elementum.</p>
                    <p style="margin-top: 8px;margin-bottom: 8px;"><a href="pagechange.html"><button
                                class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read
                                more</button></a></p>
                </div>
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-card">
                <img src="assets/img/pic5.jpg" alt="Dan" style="width:100%">
                <div class="w3-container">
                    <h3>Dan Star</h3>
                    <p class="w3-opacity">Designer</p>
                    <p style="margin-top: 10px;">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales
                        pellentesque elementum.</p>
                    <p style="margin-top: 8px;margin-bottom: 8px;"><a href="pagechange.html"><button
                                class="w3-button w3-light-grey w3-block"><i class="fa fa-arrow-circle-right"></i> Read
                                more</button></a></p>
                </div>
            </div>
        </div>
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
    </div>

</div>