<?php
include "header.php"
?>

<body>
    <!-- navbar start -->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">JOB<span>PROTAL</span></a>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <ul class="menu">
                <li><a href="home.php" class="menu-btn">Home</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="jobs.php" class="menu-btn">jobs</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="About.php" class="menu-btn">About</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <li><a href="contact.php" class="munu-btn">contact</a></li>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <li> <a href="logout.php" class="meun-btn">Logout</a></li>

            </ul>

        </div>
    </nav>
    <!-- navbar end -->
    <!-- search bar start  -->


    <?php
    include "search.php"
    ?>
    <center>
        <h1 class="btn btn-premary">job for your</h1>

        <div>
            <table id="example" class="display" style="width:100%">
                <thead class="p-3 mb-2  text-black">


                    <?php
                    include "connecton.php";

                    $query = mysqli_query($con, "SELECT * FROM `all_job`");
                    while ($row = mysqli_fetch_array($query)) {

                    ?>

                        <tr>
                            <th>company_name:</th>
                            <td>

                                <?php echo $row['company_name']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>job_ title:</th>
                            <td>
                                <?php echo $row['title']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>selari:</th>
                            <td>
                                <?php echo $row['salary']; ?>
                            </td>

                        </tr>
                        <tr>
                            <th>description:</th>
                            <td>
                                <?php echo $row['description']; ?>
                            </td>
                        </tr>
                        <th>skill:</th>
                        <td>
                            <?php echo $row['skill']; ?>
                        </td>
                        </tr>
                        <th>experience:</th>
                        <td>
                            <?php echo $row['experience']; ?>
                        </td>
                        </tr>

                        <th>category:</th>
                        <td>
                            <?php echo $row['category']; ?>
                        </td>
                        </tr>


                        <tr>
                            <th>job_types:</th>
                            <td>
                                <?php echo $row['jobs_types']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>location:</th>
                            <td>
                                <?php echo $row['location']; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>this is </th>
                            <td>
                                <button width="9" height="3"><a href="apply.php"> Apply Now</a></button>
                            </td>
                        </tr>

                        </tr>
        </div>

    <?php
                    } ?>
    <?php
    // define job features

    ?>

    </tbody>
    </thead>
    </table>
    </div>
    </center>


    <!-- datatable end -->
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</body>