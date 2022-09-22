<?php
    if(isset($_POST['update'])){
        include('../db.php');
        $id = $_GET['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $query = mysqli_query($con, 
        "UPDATE `movies` SET `name`='$name',`genre`='$genre',`release`='$release',`season`='$season',`synopsis`='$synopsis' 
        WHERE id = '$id'") or die(mysqli_error($con));
        
        if($query){
            echo 
            '<script>
                alert("Edit Movie Success");
                window.location = "../page/listMoviesPage.php";
            </script>';
        } 
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>