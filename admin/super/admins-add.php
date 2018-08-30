<?php
    session_start();
    if(!isset($_SESSION["session_adminname"]) && !isset($_SESSION["session_adminid"]) && !isset($_SESSION["session_adminoffice"])){
        header("location: /videostreamingportal/admin/");
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
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/videos-add.css">
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
    <div id="addvideoForm-cont">
        <div class="form-container">
            <div class="form-textdesc">
                <span class="form-text">ADD NEW ADMIN</span>
            </div>
            <form action="" method="post" id="addvideoForm">
                <div class="videoform-div">
                    <input type="text" id="adminfullname" name="adminfullname" class="videoform-input" placeholder="Fullname" required>
                </div>
                <div class="videoform-div">
                    <input type="email" id="adminemail" name="adminemail" class="videoform-input" placeholder="Email" required>
                </div>
                <div class="videoform-div">
                    <select name="adminprivelage" id="adminprivelage" class="videoform-select" required>
                        <option value="">System Privelage</option>
                        <option value="SUPER ADMIN">Admin</option>
                    </select>
                </div>
                <div class="videoform-div">
                    <input type="text" id="adminpassword" name="adminpassword" class="videoform-input" value="imc123" placeholder="Default Password" required>
                </div>
                <div class="videoform-div">
                    <select name="adminclassification" id="adminclassification" class="videoform-select" required>
                        <option value="">Classification</option>
                        <option value="STAFF">Staff</option>
                        <option value="OFFICE HEAD">Office Head</option>
                    </select>
                </div>
                <div class="videoform-div">
                    <select name="adminoffice" id="adminoffice" class="videoform-select" required>
                        <option value="">Office</option>
                        <option value="IMC">IMC</option>
                        <option value="ICTC">ICTC</option>
                    </select>
                </div>
                <div class="videoform-div">
                    <input type="submit" id="vidsubmit" name="vidsubmit" class="videoform-button" value="Add">
                </div>
            </form>
        </div>
    </div>
    <?php
        if(isset($_POST['vidsubmit'])){
            $adminfullname = $_POST["adminfullname"];
            $adminemail = $_POST["adminemail"];
            $adminpasscode = $_POST["adminpassword"];
            $adminprivelage = $_POST["adminprivelage"];
            $adminclassification = $_POST["adminclassification"];
            $adminoffice = $_POST["adminoffice"];
            $admindeleted = "0";

            $query = mysqli_query($con, "SELECT * FROM admins WHERE fullname='$adminfullname'");
            $check = mysqli_num_rows($query);

            if($check == 0){
                mysqli_query($con, "INSERT INTO admins (fullname, email, passcode, privelage, classification, office, deleted) VALUES ('$adminfullname', '$adminemail', '$adminpasscode', '$adminprivelage', '$adminclassification', '$adminoffice', '$admindeleted')");

                ?>
                <script>
                    alert("New admin successfully added!");
                    location.reload();
                    window.location = "/videostreamingportal/admin/super/admins-list.php";
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("Admin account already existing!");
                    location.reload();
                    window.location = "/videostreamingportal/admin/super/admins-list.php";
                </script>
                <?php
            }
        }
    ?>
    <script src="/videostreamingportal/scripts/js/super.js"></script>
</body>
</html>
<?php
    }
?>