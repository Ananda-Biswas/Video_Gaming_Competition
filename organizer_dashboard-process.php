<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['competition'])) {

        $name = $_POST['name'];
        $game = $_POST['game'];
        $prize = $_POST['prize'];
        $sponsor = $_POST['sponsor'];
        $fee = $_POST['fee'];
        $oemail = $_POST['oemail'];
        $result = $conn->query("INSERT INTO competition (Name, type, Prize_money, Sponsor, Registration_fee, oemail) VALUES ('$name', '$game', '$prize', '$sponsor', '$fee', '$oemail')");
        if ($result) {
            echo
                '<div class="alert alert-success" role="alert">
Insert Successfull
</div>';
        } else {
            echo
                '<div class="alert alert-danger" role="alert">
Try Again
</div>';
        }



    }

    if (isset($_POST['match'])) {
        $code = $_POST['code'];
        $competition_name = $_POST['name'];
        $date = $_POST['day'];
        $date = date("Y-m-d", strtotime($date));
        $time = $_POST['time'];
        $venue = $_POST['venue'];

        $team1 = $_POST['team1'];
        $team1 = (int) $team1;

        $team2 = $_POST['team2'];
        $team2 = (int) $team2;

        $rank1 = $_POST['rank1'];
        $rank2 = $_POST['rank2'];






        $sql = "INSERT INTO matches (Code, Competition_name, Date, Time, Venue)
        VALUES ('$code', '$competition_name', '$date', '$time', '$venue')";
        $result1 = mysqli_query($conn, $sql);




        $sql2 = "INSERT INTO played_by (Match_code, Team_no, Position)
        VALUES ('$code', '$team1' , '$rank1')    ";


        $sql3 = "INSERT INTO played_by (Match_code, Team_no, Position)
        VALUES ('$code', '$team2' , '$rank2')    ";


        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);



        if ($result1 == true && $result2 == true && $result3 == true) {
            echo
                '<div class="alert alert-success" role="alert">
Insert Successfull
</div>';
        } else {
            echo
                '<div class="alert alert-danger" role="alert">
Try Again
</div>';
        }


    }





    if (isset($_POST["team"])) {
        $loop_error = false;
        $name = $_POST["name"];
        $team_no = $_POST["team_number"];
        $university = $_POST["university"];
        $sponsor = $_POST["sponsor"];
        $array = explode(',', $sponsor);

        $sql = "INSERT INTO team (Name, Team_no, university) VALUES ('$name', '$team_no', '$university')";
        $result1 = mysqli_query($conn, $sql);

        foreach ($array as $sponsor2 ){
            $sql2 = "INSERT INTO sponsored(Team_no, Sponsored) VALUES ('$team_no', '$sponsor2')";
            $result2 = mysqli_query($conn,$sql2);
            if ($result2 == false){
                $loop_error = true;
            }
        }



        if ($result1 == true && $loop_error == false) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }







    }











}
?>