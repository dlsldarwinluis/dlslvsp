<?php
    session_start();
    if(!isset($_SESSION["session_adminname"]) && !isset($_SESSION["session_adminid"]) && !isset($_SESSION["session_adminoffice"])){
        header("location: /videostreamingportal/admin/");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
        $id = $_POST["vidid"];
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
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/videos-edit.css">
</head>
<body>
    <div id="navbarsideContainer">
        <div id="navbarsideContent">
            <div id="logoContainer">
                <img src="/videostreamingportal/images/logo-admin.png" alt="Super Admin" id="logo_admin">
            </div>
            <div class="menu-container">
                <a href="/videostreamingportal/admin/super/" class="link-navbar">
                    <div id="dasboardContent">
                        <div class="div-menu">
                            <img src="/videostreamingportal/icons/dashboard.png" alt="Dashboard" class="icon-navbar-side">
                        </div>
                        <div class="div-menu">
                            <span class="navbar-desctext">Dashboard</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="menu-container">
                <div id="videosBtn">
                    <div id="dasboardContent">
                        <div class="inline-this">
                            <div class="div-menu">
                                <img src="/videostreamingportal/icons/videos.png" alt="Videos" class="icon-navbar-side">
                            </div>
                            <div class="div-menu">
                                <span class="navbar-desctext">Videos</span>
                            </div>
                        </div>
                        <div class="inline-this">
                            <img src="/videostreamingportal/icons/more.png" alt="Videos" class="icon-navbar-side" id="moreVid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-more" id="more-videos">
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/videos-list.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/list.png" alt="Inventory" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">Inventory</span>
                        </div>
                    </a>
                </div>
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/videos-add.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/addnew.png" alt="Add New Video" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">Add New Video</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu-container">
                <div id="usersBtn">
                    <div id="dasboardContent">
                        <div class="inline-this">
                            <div class="div-menu">
                                <img src="/videostreamingportal/icons/users.png" alt="User Accounts" class="icon-navbar-side">
                            </div>
                            <div class="div-menu">
                                <span class="navbar-desctext">User Accounts</span>
                            </div>
                        </div>
                        <div class="inline-this">
                            <img src="/videostreamingportal/icons/more.png" alt="Videos" class="icon-navbar-side" id="moreUser">
                        </div>
                    </div>  
                </div>
            </div>
            <div class="menu-more" id="more-users">
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/users-list.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/list.png" alt="Inventory" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">List of Active Users</span>
                        </div>
                    </a>
                </div>
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/users-add.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/add.png" alt="Add User" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">Add New User Account</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu-container">
                <div id="adminBtn">
                    <div id="dasboardContent">
                        <div class="inline-this">
                            <div class="div-menu">
                                <img src="/videostreamingportal/icons/admin.png" alt="Admin Accounts" class="icon-navbar-side">
                            </div>
                            <div class="div-menu">
                                <span class="navbar-desctext">Admin Accounts</span>
                            </div>
                        </div>
                        <div class="inline-this">
                            <img src="/videostreamingportal/icons/more.png" alt="Videos" class="icon-navbar-side" id="moreAdmin">
                        </div>
                    </div>  
                </div>
            </div>
            <div class="menu-more" id="more-admin">
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/admins-list.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/list.png" alt="Inventory" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">List of Active Admins</span>
                        </div>
                    </a>
                </div>
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/admins-add.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/add.png" alt="Add Admin" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">Add New Admin Account</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu-container">
                <div id="reportsBtn">
                    <div id="dasboardContent">
                        <div class="inline-this">
                            <div class="div-menu">
                                <img src="/videostreamingportal/icons/reports.png" alt="Generate Reports" class="icon-navbar-side">
                            </div>
                            <div class="div-menu">
                                <span class="navbar-desctext">Generate Reports</span>
                            </div>
                        </div>
                        <div class="inline-this">
                            <img src="/videostreamingportal/icons/more.png" alt="Videos" class="icon-navbar-side" id="moreReports">
                        </div>
                    </div>  
                </div>
            </div>
            <div class="menu-more" id="more-reports">
                <div class="more-divider">
                    <a href="/videostreamingportal/admin/super/reports-two.php" class="link-navbar-more">
                        <div class="div-menu-more">
                            <img src="/videostreamingportal/icons/film.png" alt="Add Admin" class="icon-navbar-more">
                        </div>
                        <div class="div-menu-more">
                            <span class="navbar-desctext-more">Available Videos</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="navbartopContainer">
        <div id="navbartopContent">
            <div id="usersAccount">
                <div class="useraccount-div">
                    <img src="/videostreamingportal/icons/user.png" alt="<?php echo $_SESSION["session_adminname"]; ?>" class="useraccount-icon" id="user-icon" onclick="showUserSettings()"><span class="useraccount-text"><?php echo $_SESSION["session_adminname"]; ?> | <?php echo $_SESSION["session_adminoffice"]; ?></span>
                </div>
                <div class="useraccount-div">
                    <img src="/videostreamingportal/icons/moredots.png" class="useraccount-icon" id="user-settings" onclick="showAddedSettings()">
                </div>
            </div>
        </div>
    </div>
    <div id="userSettingsContainer">
        <div id="userSettingsContent">
            <a href="/videostreamingportal/admin/super/myaccount-details.php" class="usersettings-link">
                <div class="div-usersettings">
                    <img src="/videostreamingportal/icons/userdetails.png" class="icon-usersettings"><span class="option-usersettings">Edit My Account Details</span>
                </div>
            </a>
            <a href="/videostreamingportal/admin/super/logout.php" class="usersettings-link">
                <div class="div-usersettings">
                    <img src="/videostreamingportal/icons/logout.png" class="icon-usersettings"><span class="option-usersettings">Logout</span>
                </div>
            </a>
        </div>
    </div>
    <div id="moreOptionsContainer">
        <div id="moreOptionsContent">
            <div class="moreoptions-content" id="showRecyleBin">
                <div class="moreoptions-div">
                    <img src="/videostreamingportal/icons/bin.png" class="icon-moreoptions">
                </div>
                <div class="moreoptions-div">
                    <span class="moreoptions-textdesc">Recyle Bin</span>
                </div>
            </div>
            <a href="/videostreamingportal/admin/super/history.php" class="moreoptions-link">
                <div class="moreoptions-content">
                    <div class="moreoptions-div">
                        <img src="/videostreamingportal/icons/history.png" class="icon-moreoptions">
                    </div>
                    <div class="moreoptions-div">
                        <span class="moreoptions-textdesc">Activity History</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div id="recyclebinContainer">
        <div id="recyclebinContent">
            <a href="/videostreamingportal/admin/super/recyclebin-deletedvideos.php" class="moreoptions-link">
                <div class="recyclebinoptions-container">
                    <div class="binoption-container">
                        <span class="bin-text">Deleted Videos</span>
                    </div>
                </div>
            </a>
            <a href="/videostreamingportal/admin/super/recyclebin-deleteduseraccounts.php" class="moreoptions-link">
                <div class="recyclebinoptions-container">
                    <div class="binoption-container">
                        <span class="bin-text">Deleted User Accounts</span>
                    </div>
                </div>
            </a>
            <a href="/videostreamingportal/admin/super/recyclebin-deletedadminaccounts.php" class="moreoptions-link">
                <div class="recyclebinoptions-container">
                    <div class="binoption-container">
                        <span class="bin-text">Deleted Admin Accounts</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php
        $sql = mysqli_query($con, "SELECT * FROM videos WHERE id='$id'");
        $count = mysqli_num_rows($sql);

        if($count != 0){
            while($row = mysqli_fetch_assoc($sql)){
                ?>
    <div id="addvideoForm-cont">
        <div class="form-container">
            <div class="form-textdesc">
                <span class="form-text">EDIT VIDEO DETAILS</span>
            </div>
            <form action="" method="post" id="addvideoForm">
                <input type="hidden" name="vidid" id="vidid" value="<?php echo $row["id"] ?>">
                <div class="videoform-div">
                    <input type="text" id="vidtitle" name="vidtitle" class="videoform-input" placeholder="Video Title" value="<?php echo $row["title"] ?>" required>
                </div>
                <div class="videoform-div">
                    <input type="text" id="viduploadedby" name="viduploadedby" class="videoform-input" value="<?php echo $row["uploadedby"] ?>" placeholder="Name of Uploader" required>
                </div>
                <div class="videoform-div">
                    <select name="vidcategory" id="vidcategory" class="videoform-select" required>
                        <option value="<?php echo $row["category"] ?>"><?php echo $row["category"] ?></option>
                        <option value="Music">Music</option>
                        <option value="Film">Film</option>
                        <option value="Documentary">Documentary</option>
                        <option value="Tutorials">Tutorial</option>
                    </select>
                </div>
                <div class="videoform-div">
                    <video class="video-show" controls>
                        <source src="<?php
                            if($row["source"] == "SUPER ADMIN"){
                                echo "/videostreamingportal/admin/super/" . $row["path"];
                            }
                            else{
                                echo "/videostreamingportal/admin/standard/" . $row["path"];
                            }
                        ?>" type="<?php echo $row["filetype"] ?>">
                    </video>
                </div>
                <div class="videoform-div">
                    <input type="submit" id="vidsubmit" name="vidsubmit" class="videoform-button" value="Edit">
                </div>
                <div class="videoform-div">
                    <input type="button" class="videoform-button" value="Back" onclick="location.href='/videostreamingportal/admin/super/videos-list.php'">
                </div>
            </form>
        </div>
    </div>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("Error encountered!");
                location.reload();
                window.location = "/videostreamingportal/admin/super/videos-list.php";
            </script>
            <?php
        }
    ?>
    <?php
        if(isset($_POST['vidsubmit'])){
            $vidid = $_POST['vidid'];
            $vidtitle = $_POST['vidtitle'];
            $viduploadedby = $_POST['viduploadedby'];
            $vidcategory = $_POST['vidcategory'];

            mysqli_query($con, "UPDATE videos
            SET title = '$vidtitle', uploadedby = '$viduploadedby', category = '$vidcategory'
            WHERE id = '$vidid'");
            ?>
            <script>
                alert("Successfully Updated!");
                location.reload();
                window.location = "/videostreamingportal/admin/super/videos-list.php";
            </script>
            <?php

            $date = date('Y-m-d');
            $actor = $_SESSION['session_adminname'];
            $action = "UPDATED " . $vidtitle;
            mysqli_query($con, "INSERT INTO history (actor, action, dateofaction) VALUES ('$actor', '$action', '$date')");
        }
    ?>
    <script src="/videostreamingportal/scripts/js/super.js"></script>
</body>
</html>
<?php
    }
?>