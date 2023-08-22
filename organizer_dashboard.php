<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

include "db_connect.php";
include "organizer_dashboard-process.php";
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



    <!-- date picker links -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
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
                                Enter Competition
                            </h1>
                        </div>


                        <form action="organizer_dashboard.php" method="post">
                            <div class="section">
                                <div class="text_box">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">

                                    <label for="game" class="form-label">Game Type</label>
                                    <input type="text" class="form-control" id="game" name="game">

                                    <label for="prize" class="form-label">Prize Money</label>
                                    <input type="text" class="form-control" id="prize" name="prize">

                                    <label for="sponsor" class="form-label">Sponsor</label>
                                    <input type="text" class="form-control" id="sponsor" name="sponsor">


                                    <label for="fee" class="form-label">Registration Fee</label>
                                    <input type="text" class="form-control" id="fee" name="fee">

                                    <label for="oemail" class="form-label">Organizer Email</label>
                                    <input type="text" class="form-control" id="oemail" name="oemail">





                                    <button type="submit" name="competition"
                                        class="btn btn-primary w-100 mt-3 insert_button">Submit</button>
                                </div>
                            </div>
                        </form>





                    </div>

                </div>
            </div>





































            <div class="section mt-5">

                <div class="container for_table">

                    <div class="row">

                        <div class="col">

                            <div class="text_box">
                                <h1>
                                    Enter Team
                                </h1>
                            </div>


                            <form action="organizer_dashboard.php" method="post">
                                <div class="section">
                                    <div class="text_box">
                                        <label for="team_number" class="form-label">Enter Team Number</label>
                                        <input type="text" class="form-control" id="team_number" name="team_number">

                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">

                                        <label for="university" class="form-label">University</label>
                                        <input type="text" class="form-control" id="university" name="university">

                                        <label for="sponsor" class="form-label">Sponsors(Seperate multiple
                                            sponsors by comma)</label>
                                        <input type="text" class="form-control" id="sponsor" name="sponsor">


                                        <button type="submit" name="team"
                                            class="btn btn-primary w-100 mt-3 insert_button">Submit</button>
                                    </div>
                                </div>
                            </form>





                        </div>

                    </div>
                </div>





























                <div class="section mt-5">

                    <div class="container for_table">

                        <div class="row">

                            <div class="col">

                                <div class="text_box">
                                    <h1>
                                        Enter Match
                                    </h1>
                                </div>


                                <form action="organizer_dashboard.php" method="post">
                                    <div class="section">
                                        <div class="text_box">
                                            <label for="code" class="form-label">Code</label>
                                            <input type="text" class="form-control" id="code" name="code">


                                            <label for="time" class="form-label">Time</label>
                                            <input type="text" class="form-control" id="time" name="time">

                                            <label for="venue" class="form-label">Venue</label>
                                            <input type="text" class="form-control" id="venue" name="venue">


                                            <label for="name" class="form-label">Competition Name</label>
                                            <input type="text" class="form-control" id="name" name="name">


                                            <label for="team1" class="form-label">Team Number of Team 1</label>
                                            <input type="text" class="form-control" id="team1" name="team1">

                                            <label for="team2" class="form-label">Team Number of Team 2</label>
                                            <input type="text" class="form-control" id="team2" name="team2">


                                            <label for="rank1" class="form-label">Position of Team 1</label>
                                            <input type="text" class="form-control" id="rank1" name="rank1">

                                            <label for="rank2" class="form-label">Position of Team 2</label>
                                            <input type="text" class="form-control" id="rank2" name="rank2">




                                            <label for="day">Date</label>
                                            <input id="day" name="day" width="276" />
                                            <script>
                                                $("#day").datepicker({
                                                    uiLibrary: "bootstrap5"
                                                });
                                            </script>



                                            <button type="submit" name="match"
                                                class="btn btn-primary w-100 mt-3 insert_button">Submit</button>
                                        </div>
                                    </div>
                                </form>





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