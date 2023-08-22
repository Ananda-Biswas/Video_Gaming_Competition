<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

include "db_connect.php";

?>









<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">




</head>

<body>







    <div id="middle_div" class="container-fluid">
        <?php
        include "navbar.php";
        ?>







        <div class="section mt-5">
            <div class="container for_table">
                <div class="row">
                    <div class="col">
                        <div class="text_box">
                            <h1>
                                Competition
                            </h1>
                        </div>

                        <?php
                        $sql = "SELECT c.Name, c.type, c.Prize_money, c.sponsor, c.Registration_fee, o.Name as Name2   FROM (competition c INNER JOIN organizer o ON c.oemail=o.email);";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $name = $row["Name"];
                            $type = $row["type"];
                            $prize = $row["Prize_money"];
                            $sponsor = $row["sponsor"];
                            $fee = $row["Registration_fee"];
                            $organizer_name = $row["Name2"];

                            echo " <table> 
                            <tr>       <th>Competition Name</th>   <th>Type</th>  <th>Prize</th>  <th>Sponsor</th>  <th>Fee</th> <th>Organizer Name</th>     </tr>
                            <tr>       <td>$name</td>     <td>$type</td>    <td>$prize</td>      <td>$sponsor</td>      <td>$fee</td>      <td>$organizer_name</td>       </tr>
                            </table> ";

                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


















    <div class="section mt-5">
        <div class="container for_table">
            <div class="row">
                <div class="col">
                    <div class="text_box">
                        <h1>
                            Match
                        </h1>
                    </div>

                    <?php
                    $sql = "SELECT * FROM matches";
                    


                    $result = $conn->query($sql);
                    
                    while ($row = $result->fetch_assoc()){
                    
                    $match_code = $row["Code"];
                    
                    $sql2 = "SELECT * FROM  (played_by p INNER JOIN team t ON p.Team_no = t.Team_no) WHERE p.Match_Code = $match_code; ";
                    $result2 = mysqli_query($conn, $sql2);

                    $row1 = $result2->fetch_assoc();
                    $row2 = $result2->fetch_assoc();
                    
                    $team1 = $row1["Name"];
                    $team2 = $row2["Name"];
                    $time = $row["Time"];
                    $venue = $row["Venue"];
                    $date= $row["Date"];
                    $position1 = $row1["Position"];
                    $position2 = $row2["Position"];
                    $university1 = $row1["university"];
                    $university2 = $row2["university"]; 
                    if ($position1 == "Win"){
                        $style1 = "style='background-color:rgb(132, 245, 164)'";
                    }else{
                        $style1 = "style='background-color:rgb(245, 122, 122)'";
                    }

                    if ($position2 == "Win"){
                        $style2 = "style='background-color:rgb(132, 245, 164)'";
                    }else{
                        $style2 = "style='background-color:rgb(245, 122, 122)'";
                    }


                }




                    echo " <table> 
                            <tr>       <th>Team 1 Name</th>   <th>Team 2 Name</th>  <th>Venue</th>  <th>Date</th>  <th>Time</th>      </tr>
                            <tr>       <td $style1>$team1 ($university1)</td>     <td $style2>$team2 ($university2)</td>    <td>$venue</td>      <td>$date</td>      <td>$time</td>           </tr>
                            </table> ";


                    ?>

                </div>
            </div>
        </div>
    </div>
    </div>























    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>