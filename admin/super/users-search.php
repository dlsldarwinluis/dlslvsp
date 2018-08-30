<?php
    session_start();
    if(!isset($_SESSION["session_adminname"]) && !isset($_SESSION["session_adminid"]) && !isset($_SESSION["session_adminoffice"])){
        header("location: /videostreamingportal/admin/");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");

        $search = $_POST["searchkey"];
        $date = date('Y-m-d');
        $actor = $_SESSION['session_adminname'];
        $action = "SEARCHED " . $search;
        mysqli_query($con, "INSERT INTO history (actor, action, dateofaction) VALUES ('$actor', '$action', '$date')");
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
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/videos-list.css">
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
    <div id="searchbuttonContainer">
        <div id="searchbuttonContent">
            <form action="users-search.php" method="post" class="searchForm">
                <div class="searchform-div">
                    <input type="text" id="searchkey" name="searchkey" class="searchform-input" placeholder="Search">
                </div>
                <div class="searchform-div">
                    <button type="submit" id="searchbutton" name="searchbutton" class="searchform-button"><img src="/videostreamingportal/icons/search.png" class="searchform-icon"></button>
                </div>
            </form>
        </div>
    </div>
    <div id="tableContainer">
        <div id="tableContent">
            <table class="table-videos">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = mysqli_query($con, "SELECT * FROM users WHERE fullname LIKE '%".$search."%' AND deleted='0' || email LIKE '%".$search."%' AND deleted='0' || specification LIKE '%".$search."%' AND deleted='0' ORDER BY id ASC");
                        $check = mysqli_num_rows($query);

                        if($check != 0){
                            while($row = mysqli_fetch_assoc($query)){
                                ?>
                                <tr>
                                    <td><?php echo $row["fullname"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["specification"] ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <button class="vid-button" id="delete" name="delete"><input type="hidden" name="id" id="id" value="<?php echo $row["id"] ?>"><input type="hidden" name="name" id="name" value="<?php echo $row["fullname"] ?>"><img src="/videostreamingportal/icons/binwhite.png" class="vid-buttonicon"></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="4">No search result!</td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        if(isset($_POST["delete"])){
            $fullname = $_POST["name"];
            $id = $_POST["id"];

            mysqli_query($con, "UPDATE users
            SET deleted = '1'
            WHERE id = '$id'");
            ?>
                <script>
                    alert("User moved to recycle bin!");
                    window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                </script>
            <?php

            $date = date('Y-m-d');
            $actor = $_SESSION['session_adminname'];
            $action = "MOVED " . $fullname . " TO RECYCLE BIN";
            mysqli_query($con, "INSERT INTO history (actor, action, dateofaction) VALUES ('$actor', '$action', '$date')");
        }
    ?>
    <script src="/videostreamingportal/scripts/js/super.js"></script>
</body>
</html>
<?php
    }
?>