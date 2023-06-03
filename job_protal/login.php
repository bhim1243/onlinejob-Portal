<?php
session_start();
include "connecton.php";
error_reporting(E_ERROR|E_PARSE);
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
} else {
    if(isset($_POST['username'])) {
     $username = $_POST['username'];
        $password = $_POST['password'];
        $cat_id = $_POST['category'];
        echo $cat_id;

        $sql = "SELECT * FROM admin_login WHERE username = '$username' AND  password = '$password'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        //   echo $password;
        //   echo $row['password'];
        // check if the entered username is "admin"
        if ($username == $row['username'] && $password == $row['password'] && $category == $cat_id)
         {
            $_SESSION['loggedin'] = true;
        header('location: jobs.php?catid=' . $cat_id);

        } else {
            echo 'Enter username and password correct';
        }
        
    }
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: royalblue;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad,
                    #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                    #ff512f,
                    #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 620px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <?php
    if (isset($_GET['catid'])) {
        $catid = isset($_GET['catid']);
        echo "The catid value is: " . $catid;
    }$catid =$_GET['catid']
    ?>
    <form action="" method="POST">
        <h3>Login Here</h3>

        <label for="username">username</label>
        <input type="text" name="username" placeholder="username" id="username" required>
        <input type="hidden" name="category" placeholder="username" value="<?= $cat_id?>" >

        <label for="password">Password</label>
        <input type="text" name="password" placeholder="Password" id="password" required>

        <button type="text" id="submit" name="submit">Log In</button>
        <center><a href="Sign_up.php">Signup</a></center>
        <div class="social">
            <div class="go"><i class="fab fa-google"></i> Google</div>
            <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
        </div>
    </form>
</body>

</html>