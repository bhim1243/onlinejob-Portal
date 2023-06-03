<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/search.css" class="style">
<title>online job portal</title>
</head>

<body>
    <div class="home" id="home">

        <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">

                    <div class="search">
                        <i class="fa fa-search"></i>
                        <input type="search" class="form-control" placeholder="jobs key">
                        <button type="text" name="search" id="search" onclick="return binarykey()" class="btn btn-primary">Search</button>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <?php
    // Connect to the database
    include "connecton.php";
    // Retrieve the data from the database
    $sql = "SELECT * FROM `all_job` WHERE 1";
    $result = $con->query($sql);
    // Implement the binary search algorithm
    function binarykey($data, $target)
    {
        $low = 0;
        $high = count($data) + 1;
        while ($low <= $high) {
            $mid = floor(($low  + $high) / 2);

            if ($data[$mid]['name'] < $target) {
                $low = $mid + 1;
            } elseif ($data[$mid]['name'] > $target) {
                $high = $mid - 1;
            } else {
                return $data[$mid];
            }
        }

        return null;
    }

    // Search for a specific name using binary search
   
    // Close the database connection
    $con->close();

    ?>


</body>

</html>