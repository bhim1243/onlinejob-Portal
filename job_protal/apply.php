<?php
include "connecton.php";
?>
<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/apply.css" class="style">
<title>online job portal</title>
</head>

<body>
    <center>
        <div class="container">
            <div class="apply_box">
                <h1>
                    Job apply

                </h1>
                <form action="database.php" method="POST" enctype="multipart/form-data"  >
                    <div class="form_container">
                        <div class="form_control">
                            <label for="first_name"> First Name </label>
                            <input id="first_name" name="first_name" placeholder="Enter First Name..." />
                        </div>
                        <div class="form_control">
                            <label for="last_name"> Last Name </label>
                            <input id="last_name" name="last_name" placeholder="Enter Last Name..." />
                        </div>
                        <div class="form_control">
                            <label for="email"> Email </label>
                            <input type="email" id="email" name="email" placeholder="Enter Email..." />
                        </div>
                        <div class="form_control">
                            <label for="job_role"> Job Role </label>
                            <select id="job_role" name="job_role">
                                <option value="">Select Job Role</option>
                                <option value="frontend">Frontend Developer</option>
                                <option value="backend">Backend Developer</option>
                                <option value="full_stack">Full Stack Developer</option>
                                <option value="ui_ux">UI UX Designer</option>
                            </select>
                        </div>
                        <div class="textarea_control">
                            <label for="address"> Address </label>
                            <textarea id="address" name="address" row="4" cols="50" placeholder="Enter Address"></textarea>
                        </div>
                        <div class="form_control">
                            <label for="city"> City </label>
                            <input id="city" name="city" placeholder="Enter City Name..." />
                        </div>
                        <div class="form_control">
                            <label for="pincode"> Pincode </label>
                            <input type="number" id="pincode" name="pincode" placeholder="Enter Pincode Name..." />
                        </div>
                        <div class="form_control">
                            <label for="date"> Date </label>
                            <input value="2023-01-18" type="date" id="date" name="date" />
                        </div>
                        <div class="form_control"  >
                            <label for="upload"> Upload Your CV </label>
                            <input type="file" id="cv" name="cv" />
                        </div>
                    </div>
                    <div class="button_container">
                        <button type="submit">save</button>
                    </div>
                </form>
            </div>
        </div>
    </center>

</body>

</html>