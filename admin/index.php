<?php
    if(isset($_POST['submit'])){
        include("include/connect.php");

        $user = $_POST['email'];
        $pass = $_POST['password'];

        if(!empty($user) && !empty($pass)){
            $checkaccount = mysqli_query($con, "SELECT * FROM admins WHERE email='$user' AND passcode='$pass'");
            $validate = mysqli_num_rows($checkaccount);

            if($validate != 0){
                while($row = mysqli_fetch_assoc($checkaccount)){
                    $accountId = $row['id'];
                    $accountFullName = $row['fullname'];
                    $accountUserName = $row['email'];
                    $accountPassword = $row['passcode'];
                    $accountPrivelage = $row['privelage'];
                    $accountAssurance = $row['deleted'];
                    $accountOffice = $row['office'];
                }
                if($user == $accountUserName && $pass == $accountPassword && $accountPrivelage == "SUPER ADMIN" && $accountAssurance == "0"){
                    session_start();
                    $_SESSION['session_adminname'] = $accountFullName;
                    $_SESSION['session_adminid'] = $accountId;
                    $_SESSION['session_adminoffice'] = $accountOffice;

                    header("location: super/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountPrivelage == "STANDARD" && $accountAssurance == "0"){
                    session_start();
                    $_SESSION['session_adminname'] = $accountFullName;
                    $_SESSION['session_adminid'] = $accountId;
                    $_SESSION['session_adminoffice'] = $accountOffice;

                    header("location: standard/");
                }
                else{
                    ?>
                    <script>
                        alert("Invalid account! Please try again!");
                        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                    </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    alert("Invalid password or username!");
                    window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("Please input the needed details below!");
                window.location.replace(window.location.pathname + window.location.search + window.location.hash);
            </script>
            <?php
        }
    }
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
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/index-two.css">
</head>
<body>
    <div id="loginformContainer">
        <div id="textdescContainer">
            <span id="textdesc">system admins</span>
        </div>
        <form action="" method="post" id="loginform">
            <div class="div-form">
                <div class="text">Email</div>
                <input type="email" name="email" id="email" class="input-login">
            </div>
            <div class="div-form">
                <div class="text">Password</div>
                <input type="password" name="password" id="password" class="input-login">
            </div>
            <div class="div-form">
                <input type="checkbox" name="showpass" id="showpass">Show Password
            </div>
            <div class="div-form">
                <input type="submit" value="LOGIN" name="submit" id="submit">
            </div>
        </form>
        <div id="signupContainer">
            <a href="/videostreamingportal/signup.php" id="signuplink"><span id="signup">Dont have an account yet? Sign up!</span></a>
        </div>
    </div>
    <script src="/videostreamingportal/scripts/js/index-two.js"></script>
</body>
</html>