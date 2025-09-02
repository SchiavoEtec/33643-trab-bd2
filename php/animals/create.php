<?php
    require ('../../connections/apadri.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['name'];
        $weight = $_POST['weight'];
        $age = $_POST['age'];
        $race = $_POST['race'];
        $color = $_POST['color'];
        $status = $_POST['statusP'];
        $register = $_POST['register'];
        $rg = $_POST['rg'];
      
        if ($conn->query("INSERT INTO animal VALUES (default, '$nome','$age', '$register', '$race', '$weight', '$status', '$color', '$rg')")) {
            header("Location: ../../html/animals/index.php");
        }
    }
?>