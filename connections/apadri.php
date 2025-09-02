<?php 
    $conn = new mysqli('localhost', 'root', '', 'apadrin');

    if ($conn->connect_error) {
        echo "<script>alert('Erro na conexão: $conn->connect_error')</script>";
    }