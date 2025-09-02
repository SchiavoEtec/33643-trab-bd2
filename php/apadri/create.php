<?php
    require ('../../connections/apadri.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userId = $_POST['user-id'];
        $anId = $_POST['animal-id'];
        $data = $_POST['data'];
        $value = $_POST['value'];
      
        if ($conn->query("INSERT INTO animal VALUES (default, '$userId','$anId', '$data', '$value')")) {
            header("Location: ../../html/animals/index.html");
        }
    }
?>