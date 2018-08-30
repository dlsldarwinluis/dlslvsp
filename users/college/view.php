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
            <a href="/videostreamingportal/users/college/myaccount.php" class="user-link">
                <div id="managemyaccount" class="user-div-opt">
                    <div class="user-div">
                        <img src="/videostreamingportal/icons/settings.png" class="user-icon">
                    </div>
                    <div class="user-div">
                        <span class="user-text">Manage my Account</span>
                    </div>
                </div>
            </a>
            <a href="/videostreamingportal/users/college/logout.php" class="user-link">
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
    <div id="viewContainer">
        <?php
            $id = $_POST['id'];
            $sql = mysqli_query($con, "SELECT * FROM videos WHERE id = '$id'");
                while($rows = mysqli_fetch_assoc($sql)){
                    $ids = $rows["id"];
                    $views = $rows["views"];
                };
            $view = $views + 1;
            mysqli_query($con, "UPDATE videos SET `views` = '$view' WHERE id='$ids'");

            $query = mysqli_query($con, " SELECT * FROM videos WHERE id='$id'");
            
            while($row = mysqli_fetch_assoc($query)){
                ?>
        <video class="video-showfull" controls controlsList="nodownload" autoplay>
            <source src="<?php
                if($row["source"] == "SUPER ADMIN"){
                    echo "/videostreamingportal/admin/super/" . $row["path"];
                }
                else{
                    echo "/videostreamingportal/admin/standard/" . $row["path"];
                }
            ?>" type="<?php echo $row["filetype"] ?>">
        </video>
        <div id="title">
            <span class="title-textdesc"><?php echo $row['title'] ?></span><br/>
            <span class="title-textview">Views: <?php echo $row['views'] ?></span>
        </div>
                <?php
            }
        ?>
    </div>
    <script src="/videostreamingportal/scripts/js/user.js"></script>
</body>
</html>
<?php
    }
?>