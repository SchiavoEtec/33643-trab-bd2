<?php
require ("../../connections/apadri.php");

$result = $conn->query("SELECT * FROM animal");


?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pet Manager - Sistema de Cadastros</title>
    <link rel="stylesheet" href="../../css/manage.css">
    <script type="module" src="../../js/sign.js"></script>
  </head>
  <body><br>
    <aside class="sidebar">
      <h2 class="logo"><span style="color: #98cacd">Pet</span>Manager</h2>
      <nav>
        <ul id="link-side">
          <li id="home">Visão Geral</li>
          <li id="animals">Animais</li>
          <li id="users">Usuários</li>
          <li id="apadri">Apadrinhamentos</li>
        </ul>
      </nav>
    </aside>
    <button onclick="window.location.href='./create.html'" class="btn-create-obj">Criar</button>
    <div class="container"><center>
      <h1>Padrinhos</h1>
      <table border=1>
        <tr>
          <th>ID</th><th>Nome</th><th>Idade</th><th>Registro</th><th>Raça</th><th>Peso</th><th>Estado</th><th>Cor</th><th>RG</th><th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
          <td><?= $row['animalID'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['age'] ?></td>
          <td><?= $row['register'] ?></td>
          <td><?= $row['race'] ?></td>
          <td><?= $row['peso'] ?></td>
          <td><?= $row['statusP'] ?></td>
          <td><?= $row['color'] ?></td>
          <td><?= $row['rg'] ?></td>
          <td>
            <a href="editar.php?id=<?= $row['animalID'] ?>">Editar</a> | 
            <a href="excluir.php?id=<?= $row['animalID'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
          </td>
        </tr>
        <?php }?>
      </table>
    </div>
  </body>
</html>
