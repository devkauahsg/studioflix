<?php
    $servername = "localhost";
    $database = "studioflix";
    $username = "root";
    $password = "";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    if (!$conn){
        die("Cadastro mal sucedido " . mysqli_connect_error());
    }
    
?>