<?php
session_start();
include "connecton.php";
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $catid = $_POST['category'];
  if (empty($password)) {
    // echo 'Please enter a password';
    $msg = 'please enter a password';
  } else {
    $uppercase    = preg_match('@[A-Z]@', $password);
    $lowercase    = preg_match('@[a-z]@', $password);
    $number       = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('@[^\w]@', $password);

    $errors = array();


    if (!$uppercase) {
      $errors[] = 'Password must contain at least one uppercase letter';
    }

    if (!$lowercase) {
      $errors[] = 'Password must contain at least one lowercase letter';
    }

    if (!$number) {
      $errors[] = 'Password must contain at least one number';
    }

    if (!$specialchars) {
      $errors[] = 'Password must contain at least one special character';
    }

    if (strlen($password) < 8) {
      $errors[] = 'Password must be at least 8 characters long';
    }

    // it is a regular expression but it doesnot give accuracy if .abc@gmail.com enter it say yes which is wrong    
    // if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}(?:\.[a-zA-Z]{2,})?$/', $email)) {
    //   $errors[] = 'Invalid email address';
    // } 



    // it is slighly improve then regex but it is also not perfect
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Invalid email address';
    }

    if (empty($username)) {
      $msg = 'please enter a username';
    }

    if (!empty($errors)) {
      $msg = implode("<br>", $errors);
    } else {
      $select_admin = "INSERT INTO `admin_login`(`id`, `username`, `email.`, `password`, `catid`) VALUES ('','$username','$email.','$password','$catid')";
      $result = mysqli_query($con, $select_admin);
      if ($result) {
        // header('location:login.php');
        header('location: login.php?catid=' . $catid);
      } else {
        // echo "not inserted";
        $msg = 'error occur';
      }
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
      height: 720px;
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
      color: black;
      letter-spacing: 1.5px;
      outline: none;
      border: none;
    }

    select#category {
      width: 100%;
      height: 50px;

      color: black;
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
      padding: 5px 8px 8px 5px;
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

  <form action="" method="POST" name="form">
    <h3>Sign up Here</h3>

    <span class="text-danger"><?= @$msg ?></span>
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="username" id="username">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email" id="email" required>
    <label for="category">Job Category</label>

    <div class="col-sm-10">
      <select name="category" id="category_id" style="height: 50px; width: 100%;">

        <option value="" disabled selected>Choose...</option>
        <?php
        $select_jobs = "SELECT * FROM `all_job`";
        $result = mysqli_query($con, $select_jobs);
        foreach ($result as $row2) {
        ?>
          <option value="<?= $row2['job_id'] ?>"><?= $row2['category'] ?></option>
        <?php
        } ?>
      </select>
    </div>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password" id="password" required>
    <button type="submit" name="submit" id="submit">Sign Up</button>
  </form>
</body>

</html>