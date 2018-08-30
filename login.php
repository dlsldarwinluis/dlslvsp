<?php
    if(isset($_POST['submit'])){
        include("include/connect.php");

        $user = $_POST['email'];
        $pass = $_POST['password'];

        if(!empty($user) && !empty($pass)){
            $checkaccount = mysqli_query($con, "SELECT * FROM users WHERE email='$user' AND password='$pass'");
            $validate = mysqli_num_rows($checkaccount);

            if($validate != 0){
                while($row = mysqli_fetch_assoc($checkaccount)){
                    $accountId = $row['id'];
                    $accountFullName = $row['fullname'];
                    $accountUserName = $row['email'];
                    $accountPassword = $row['password'];
                    $accountSpecification = $row['specification'];
                    $accountAssurance = $row['deleted'];
                    $accountVerified = $row['verified'];
                }
                if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "college" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/college/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "faculty" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/faculty/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "gs" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/gs/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "is" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/is/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "ps" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/ps/");
                }
                else if($user == $accountUserName && $pass == $accountPassword && $accountSpecification == "shs" && $accountAssurance == "0" && $accountVerified == "1"){
                    session_start();
                    $_SESSION['session_username'] = $accountFullName;
                    $_SESSION['session_userid'] = $accountId;
                    $_SESSION['session_userspecification'] = $accountSpecification;

                    header("location: users/shs/");
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
    <link rel="stylesheet" href="/videostreamingportal/scripts/css/login.css">
</head>
<body>
    <div id="loginformContainer">
        <div id="textdescContainer">
            <span id="textdesc">student & lasallian partners</span>
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
    <script src="/videostreamingportal/scripts/js/login.js"></script>
</body>
</html>