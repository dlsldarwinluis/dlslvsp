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
            <a href="/videostreamingportal/users/is/myaccount.php" class="user-link">
                <div id="managemyaccount" class="user-div-opt">
                    <div class="user-div">
                        <img src="/videostreamingportal/icons/settings.png" class="user-icon">
                    </div>
                    <div class="user-div">
                        <span class="user-text">Manage my Account</span>
                    </div>
                </div>
            </a>
            <a href="/videostreamingportal/users/is/logout.php" class="user-link">
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
    <?php
        $admid = $_SESSION["session_userid"];
        $query = mysqli_query($con, "SELECT * FROM users WHERE id='$admid'");
        $count = mysqli_num_rows($query);

        if($query != 0){
            while($row = mysqli_fetch_assoc($query)){
            ?>
     <div id="addvideoForm-cont">
        <div class="form-container">
            <div class="form-textdesc">
                <span class="form-text">EDIT MY DETAILS</span>
            </div>
            <form action="" method="post" id="addvideoForm">
                <div class="videoform-div">
                    <input type="text" id="adminfullname" name="adminfullname" class="videoform-input" value="<?php echo $row["fullname"] ?>" placeholder="Fullname" required>
                </div>
                <div class="videoform-div">
                    <input type="email" id="adminemail" name="adminemail" class="videoform-input" value="<?php echo $row["email"] ?>" placeholder="Email" required>
                </div>
                <div class="videoform-div">
                    <input type="text" id="adminpassword" name="adminpassword" class="videoform-input" value="<?php echo $row["password"] ?>" placeholder="Password" required>
                </div>
                <div class="videoform-div">
                    <select name="adminspecification" id="adminspecification" class="videoform-select" required>
                        <option value="<?php echo $row["specification"] ?>"><?php echo $row["specification"] ?></option>
                        <option value="gs">gs</option>
                        <option value="shs">Senior High School</option>
                        <option value="is">Integrated School</option>
                        <option value="gs">Grade School</option>
                        <option value="ps">Pre-school</option>
                        <option value="faculty">Faculty</option>
                    </select>
                </div>
                <div class="videoform-div">
                    <input type="submit" id="vidsubmit" name="vidsubmit" class="videoform-button" value="Update">
                </div>
            </form>
        </div>
    </div>
            <?php
            }
        }
    ?>
    <?php
        if(isset($_POST['vidsubmit'])){
            $adminfullname = $_POST["adminfullname"];
            $adminemail = $_POST["adminemail"];
            $adminpasscode = $_POST["adminpassword"];
            $adminspecification = $_POST["adminspecification"];
            $adminoffice = $_POST["adminoffice"];

            mysqli_query($con, "UPDATE users
            SET fullname = '$adminfullname', email = '$adminemail', password = '$adminpasscode', specification = '$adminspecification'
            WHERE id = '$admid'");
            ?>
            <script>
                alert("Successfully Updated!");
                location.reload();
                window.location = "/videostreamingportal/login.php";
            </script>
            <?php

            $date = date('Y-m-d');
            $actor = $_SESSION['session_adminname'];
            $action = $actor . "UPDATED HIS ACCOUNT";
            mysqli_query($con, "INSERT INTO history (actor, action, dateofaction) VALUES ('$actor', '$action', '$date')");
        }
    ?>
    <script src="/videostreamingportal/scripts/js/user.js"></script>
</body>
</html>
<?php
    }
?>