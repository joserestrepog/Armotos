<?php
   
    $conn = mysqli_connect("db4free.net", "joserestrepog","joserestrepog","armotos");
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
     }
?>