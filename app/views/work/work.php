<?php
include 'app/views/templates/header.php';
// *************************************
?>

<?php
// get ID
$workid = rtrim($_GET['url'], '/');
$workid = filter_var($workid, FILTER_SANITIZE_URL);
$workid = explode('/', $workid);
?>
    <?php
    if(isset($workid[1])){
        // Detailed Article START
        // call function
        $detailedArticle = mWork::show_detailed_article($workid[1]);
        ?>
            <!--Page change Start-->
    <div class="container">
	   <!--left_container start-->
       <div class="left_container">
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
           <div class="title">
               <h1 style="color: black"><?=$detailedArticle[0]['title'];?></h1><br>
                <p><?=$detailedArticle[0]['Created'];?></p><br>
            </div>

            <!--Video Upload Start-->
            <div class="wrapper">
                <div class="videowrapper">
                <?=$detailedArticle[0]['VideoLink'];?>
                </div>
            </div>
            <!--Video Upload End-->
            <div class="text_body">
            <?=$detailedArticle[0]['content'];?>


        <hr>
            </div><br>
            <div class="comment">
                <h4>Leave a comment</h4>
                <div id="show_comment">
                    <div class="show_cm_pro">
                        <img src="<?= rPath ?>public/assets/img/pic37.jpg"class="show_comment_profile">
                        <p class="comment_p_frame">output comment.............. and even our director of photography, Jess Hall, has done such an honorable job for every decade by
                        using the lighting equipment and the camera len
                    </p>
                    </div>
                    <div class="show_cm_pro">
                        <img src="<?= rPath ?>public/assets/img/pic34.jpg"class="show_comment_profile">
                        <p class="comment_p_frame">output comment.............. and even our director of photography, Jess Hall, has done such an honorable job for every decade by
                        using the lighting 
                    </p>
                    </div>
                <div class="show_cm_pro">
                    <img src="<?= rPath ?>public/assets/img/pic37.jpg"class="show_comment_profile">
                    <p class="comment_p_frame">output comment.............. and even our director of photography, Jess Hall, has done such an honorable job for every decade by
                    using the lighting equipment and the camera lenses
                </p>
                </div>
                <div class="show_cm_pro">
                    <img src="<?= rPath ?>public/assets/img/pic34.jpg"class="show_comment_profile">
                    <p class="comment_p_frame">output comment.............. and even our director of photography, Jess Hall, has done such an honorable job for every decade by
                    using the lighting equipment and the camera lenses [of that era]. And the show loo
                </p>
                </div>
                

                </div>
                <hr size="2px" color="red">
                <div class="comment_box">
                    <h6>Comment</h6>
                    <input type="text" id="text_box">
                </div>
                <div class="name_box">
                    <h6>Name(Required)</h6>
                    <input type="text" class="box">
                </div>
                <div class="email_box">
                    <h6>Email(required)</h6>
                    <input type="text" class="box">
                </div>
                <input type="submit" value="Submit Comment">
            </div>
            
       </div>
	   <!--left_container end-->
	   
	   <!--right_container start-->
       <div class="right_container">
           <div class="search">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>   
           </div>

           <div class="right_body_image">
               <div class="image_frame">
                   <!-- <img class = "image" src="<?= rPath ?>public/assets/img/pic46.jpg"> -->
                   <p><a href="pagechange.html"style="text-decoration:none">
                    'Avengers: Age of Ultron'</a></p>
               </div>

               <div class="image_frame">
                <!-- <img class = "image" src="<?= rPath ?>public/assets/img/pic46.jpg"> -->
                <p><a href="pagechange.html"style="text-decoration:none">
                 'Avengers: Age of Ultron'</a></p>
                </div>

                <div class="image_frame">
                <!-- <img class = "image" src="<?= rPath ?>public/assets/img/pic46.jpg"> -->
                <p><a href="pagechange.html"style="text-decoration:none">
                 'Avengers: Age of Ultron'</a></p>
               </div>

               <div class="image_frame">
                <!-- <img class = "image" src="<?= rPath ?>public/assets/img/pic46.jpg"> -->
                <p><a href="pagechange.html"style="text-decoration:none">
                 'Avengers: Age of Ultron'</a></p>
                </div>

                <div class="image_frame">
                <!-- <img class = "image" src="<?= rPath ?>public/assets/img/pic46.jpg"> -->
                <p><a href="pagechange.html"style="text-decoration:none">
                 'Avengers: Age of Ultron'</a></p>
                </div>
           </div>
           </div>
       </div>
	   	   <!--right_container end-->
        <?php
        // Detailed Article END
    } else {
        // AllArticle START
        // call function
        $allArticle = mWork::show_all_article();
        ?>
        <div class="container">
<div style="margin-top: 11rem">
        <h1>ARTICLES</h1>
        <hr><br>
        <?php
            for($i=0; $i<sizeof($allArticle); $i++){
                ?>
                    <div class="view_box" style="display: flow-root;">
                    <div class="w3-third">
                        <img src="<?= rPath ?>public/assets/img/thumbnails/<?=$allArticle[$i]['articleID']?>.jpeg" class="image1" alt="pic" width="80%" height="130%"> 
                    </div>
                    <div class="w3-thirdquarter">
                        
                        <p class="p_header">
                        <?=$allArticle[$i]['title']?>
                        </p>
                        <p class="by-name"><a href="#">By <?=$allArticle[$i]['userID']?> </a>/ <?=$allArticle[$i]['Created']?></p>
                        <h5>
                        <?= mb_strimwidth($allArticle[$i]['content'], 0, 300, "...") // Limit echo 300 chars ?>
                        </h5>
                        <p class="read-button"><a href="work/<?=$allArticle[$i]['articleID']?>"><button class="w3-button w3-light-grey w3-block" style="width: 250px; float: right;"><i class="fa fa-arrow-circle-right"></i> Read more</button></a></p>
                    </div>
                </div>
                <?php
            }
        ?>
        </div>
        </div>
        <?php
        // AllArticle END
    }
    ?>


<?php
// *************************************
include 'app/views/templates/footer.php';
?>