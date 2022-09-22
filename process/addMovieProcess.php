<?php
    if(isset($_POST['addMovie'])){
        include('../db.php');
        session_start();
        $nameMovie = $_POST['addMovieName'];
        $addGenre = $_POST['addGenre'];
        $addRelease = $_POST['addRelease'];
        $addSeason = $_POST['addSeason'];
        $addSynopsis = $_POST['addSynopsis'];

        $query = mysqli_query($con,
        "INSERT INTO 'movies'('name','genre','release','season','synopsis')
        VALUES ('$nameMovie', '$addGenre', '$addRelease', '$addSeason', '$addSynopsis')")
        or die(mysqli_error($con));

        if ($conn->query($sql) === TRUE) {
            echo
            '<script>
                alert("Add Movie Success");
                window.location = "../page/listMoviesPage.php"
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     }
        

?>