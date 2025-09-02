<?php
    require ('../../connections/apadri.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['phone'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $state = $_POST['state'];
        $cep = $_POST['cep'];
        $rg = $_POST['rg'];
      
        if ($conn->query("INSERT INTO userPad VALUES (default, '$nome', '$age', '$email', '$telefone', '$country', '$state', '$cep', '$rg', '$cpf')")) {
            header("Location: ../html/users/index.php");
        }
    }