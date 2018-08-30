<?php
    session_start();
    if(!isset($_SESSION["session_username"]) && !isset($_SESSION["session_userid"]) && !isset($_SESSION["session_userspecification"])){
        header("location: /videostreamingportal/login.php");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DLSL Video Streaming Portal</title>
    <link rel="shortcut icon" href="/icon-dlsl.png" type="image/png">
	<link rel="shortcut icon" type="image/png" href="/videostreamingportal/images/icon-dlsl.png">
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/style-user.css">
</head>
<body>
    <div id="topContainer">
        <div id="topContent">
            <div id="categoryContainer" class="user-div">
                <button id="catbutton" class="user-button"><img src="/videostreamingportal/icons/categorymenu.png" class="user-icon"></button>
            </div>
            <div id="searchContainer" class="user-div">
                <form action="search.php" method="post" class="user-div" id="user-form">
                    <input type="text" name="searchkey" id="searchkey" class="user-input">
                    <button type="submit" id="searchsubmit" name="searchsubmit" class="user-button"><img src="/videostreamingportal/icons/search-white.png" class="user-icon"></button>
                </form>
            </div>
            <div id="userContainer" class="user-div">
                <button id="userbutton" class="user-button"><img src="/videostreamingportal/icons/user.png" class="user-icon"></button>
            </div>
        </div>
    </div>
    <div id="categorytwoContainer">
        <div id="categoryContent">
            <div id="musicCat">
                <form action="search.php" method="post" class="user-div" id="user-form">
                    <input type="hidden" name="searchkey" id="searchkey" class="user-input" value="Music">
                    <button type="submit" id="searchsubmit" name="searchsubmit" class="user-button"><img src="/videostreamingportal/icons/music.png" class="user-icon"></button>
                </form>
            </div>
            <div id="filmCat">
                <form action="search.php" method="post" class="user-div" id="user-form">
                    <input type="hidden" name="searchkey" id="searchkey" class="user-input" value="Film">
                    <button type="submit" id="searchsubmit" name="searchsubmit" class="user-button"><img src="/videostreamingportal/icons/film-cat.png" class="user-icon"></button>
                </form>
            </div>
            <div id="documentaryCat">
                <form action="search.php" method="post" class="user-div" id="user-form">
                    <input type="hidden" name="searchkey" id="searchkey" class="user-input" value="Documentary">
                    <button type="submit" id="searchsubmit" name="searchsubmit" class="user-button"><img src="/videostreamingportal/icons/documentary.png" class="user-icon"></button>
                </form>
            </div>
            <div id="tutorialCat">
                <form action="search.php" method="post" class="user-div" id="user-form">
                    <input type="hidden" name="searchkey" id="searchkey" class="user-input" value="Tutorial">
                    <button type="submit" id="searchsubmit" name="searchsubmit" class="user-button"><img src="/videostreamingportal/icons/tutorial.png" class="user-icon"></button>
                </form>
            </div>
        </div>
    </div>
    <div id="userSettingsContainer">
        <div id="userSettingsContent">
            <a href="/videostreamingportal/users/faculty/myaccount.php" class="user-link">
                <div id="managemyaccount" class="user-div-opt">
                    <div class="user-div">
                        <img src="/videostreamingportal/icons/settings.png" class="user-icon">
                    </div>
                    <div class="user-div">
                        <span class="user-text">Manage my Account</span>
                    </div>
                </div>
            </a>
            <a href="/videostreamingportal/users/faculty/logout.php" class="user-link">
                <div id="logoff" class="user-div-opt">
                    <div class="user-div">
                        <img src="/videostreamingportal/icons/logoff.png" class="user-icon">
                    </div>
                    <div class="user-div">
                        <span class="user-text">Logout my Account</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <table class="user-tabledata" id="music">
        <thead>
            <tr>
                <th colspan="5">Music</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $music = mysqli_query($con, "SELECT * FROM videos WHERE category='Music' AND deleted='0' AND disabled='0' AND disapproved='0' ORDER BY id DESC");
                $countmusic = mysqli_num_rows($music);

                if($countmusic != 0){
                ?>
            <tr>
                <?php

                    while($datamusic = mysqli_fetch_assoc($music)){
                        ?>
                <td>
                    <video class="video-show" controlsList="nodownload nofullscreen noremoteplayback" muted autoplay>
                        <source src="<?php
                            if($datamusic["source"] == "SUPER ADMIN"){
                                echo "/videostreamingportal/admin/super/" . $datamusic["path"];
                            }
                            else{
                                echo "/videostreamingportal/admin/standard/" . $datamusic["path"];
                            }
                        ?>" type="<?php echo $datamusic["filetype"] ?>">
                    </video><br/>
                    <form action="view.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $datamusic['id'] ?>">
                        <button type="submit" class="vid-buttonsub"><span class="user-texts"><?php echo $datamusic["title"] ?></span></button>
                    </form>
                </td>
                        <?php
                    }
                ?>
            </tr>
                <?php
                }
                else{
                    ?>
            <tr>
                <td colspan="5">No result for this category!</td>
            </tr>        
                    <?php
                }
            ?>
        </tbody>
    </table>
    <table class="user-tabledata" id="film">
        <thead>
            <tr>
                <th colspan="5">Film</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $film = mysqli_query($con, "SELECT * FROM videos WHERE category='Film' AND deleted='0' AND disabled='0' AND disapproved='0' ORDER BY id DESC");
                $countfilm = mysqli_num_rows($film);

                if($countfilm != 0){
                ?>
            <tr>
                <?php

                    while($datafilm = mysqli_fetch_assoc($film)){
                        ?>
                <td>
                    <video class="video-show" controlsList="nodownload nofullscreen noremoteplayback" muted autoplay>
                        <source src="<?php
                            if($datafilm["source"] == "SUPER ADMIN"){
                                echo "/videostreamingportal/admin/super/" . $datafilm["path"];
                            }
                            else{
                                echo "/videostreamingportal/admin/standard/" . $datafilm["path"];
                            }
                        ?>" type="<?php echo $datafilm["filetype"] ?>">
                    </video><br/>
                    <form action="view.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $datafilm['id'] ?>">
                        <button type="submit" class="vid-buttonsub"><span class="user-texts"><?php echo $datafilm["title"] ?></span></button>
                    </form>
                </td>
                        <?php
                    }
                ?>
            </tr>
                <?php
                }
                else{
                    ?>
            <tr>
                <td colspan="5">No result for this category!</td>
            </tr>        
                    <?php
                }
            ?>
        </tbody>
    </table>
    <table class="user-tabledata" id="documentary">
        <thead>
            <tr>
                <th colspan="5">Documentary</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $docu = mysqli_query($con, "SELECT * FROM videos WHERE category='Documentary' AND deleted='0' AND disabled='0' AND disapproved='0' ORDER BY id DESC");
                $countdocu = mysqli_num_rows($docu);

                if($countdocu != 0){
                ?>
            <tr>
                <?php

                    while($datadocu = mysqli_fetch_assoc($docu)){
                        ?>
                <td>
                    <video class="video-show" controlsList="nodownload nofullscreen noremoteplayback" muted autoplay>
                        <source src="<?php
                            if($datadocu["source"] == "SUPER ADMIN"){
                                echo "/videostreamingportal/admin/super/" . $datadocu["path"];
                            }
                            else{
                                echo "/videostreamingportal/admin/standard/" . $datadocu["path"];
                            }
                        ?>" type="<?php echo $datadocu["filetype"] ?>">
                    </video><br/>
                    <form action="view.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $datadocu['id'] ?>">
                        <button type="submit" class="vid-buttonsub"><span class="user-texts"><?php echo $datadocu["title"] ?></span></button>
                    </form>
                </td>
                        <?php
                    }
                ?>
            </tr>
                <?php
                }
                else{
                    ?>
            <tr>
                <td colspan="5">No result for this category!</td>
            </tr>        
                    <?php
                }
            ?>
        </tbody>
    </table>
    <table class="user-tabledata" id="tutorial">
        <thead>
            <tr>
                <th colspan="5">Tutorial</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $tutor = mysqli_query($con, "SELECT * FROM videos WHERE category='Tutorials' AND deleted='0' AND disabled='0' AND disapproved='0' ORDER BY id DESC");
                $counttutor = mysqli_num_rows($tutor);

                if($counttutor != 0){
                ?>
            <tr>
                <?php

                    while($datatutor = mysqli_fetch_assoc($tutor)){
                        ?>
                <td>
                    <video class="video-show" controlsList="nodownload nofullscreen noremoteplayback" muted autoplay>
                        <source src="<?php
                            if($datatutor["source"] == "SUPER ADMIN"){
                                echo "/videostreamingportal/admin/super/" . $datatutor["path"];
                            }
                            else{
                                echo "/videostreamingportal/admin/standard/" . $datatutor["path"];
                            }
                        ?>" type="<?php echo $datatutor["filetype"] ?>">
                    </video><br/>
                    <form action="view.php" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $datatutor['id'] ?>">
                        <button type="submit" class="vid-buttonsub"><span class="user-texts"><?php echo $datatutor["title"] ?></span></button>
                    </form>
                </td>
                        <?php
                    }
                ?>
            </tr>
                <?php
                }
                else{
                    ?>
            <tr>
                <td colspan="5">No result for this category!</td>
            </tr>        
                    <?php
                }
            ?>
        </tbody>
    </table>
    <script src="/videostreamingportal/scripts/js/user.js"></script>
</body>
</html>
<?php
    }
?>