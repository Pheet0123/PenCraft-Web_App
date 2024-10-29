<?php 

    // Create Connection
    $conn = mysqli_connect("localhost", "root", "12345678", "pencarft");

    // Check connection
    if (!$conn) {
        die("เข้าไม่ได้" . mysqli_connect_error());
        
    } 

?>