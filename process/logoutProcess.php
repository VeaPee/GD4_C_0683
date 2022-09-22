<?php
    session_start();

    echo
    '<script>
        alert("Logout Success"); window.location = "../page/dashboardPage.php"
    </script>';
    
    session_destroy();

    header("Location: ../index.php");
?>