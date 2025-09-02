
<?php
require ("../../connections/apadri.php");

$result = $conn->query("SELECT * FROM userPad");
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
    <button onclick="window.location.href='create.html'" class="btn-create-obj">Criar</button>
    <div class="container"><center>
      <h1>Padrinhos</h1>
      <table border=1>
        <tr>
          <th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Idade</th><th>País</th><th>Estado/província</th><th>CEP</th><th>RG</th><th>CPF</th><th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
          <td><?= $row['userID'] ?></td>
          <td><?= $row['nome'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['phone'] ?></td><!--aqui-->
          <td><?= $row['age'] ?></td>
          <td><?= $row['country'] ?></td>
          <td><?= $row['state'] ?></td>
          <td><?= $row['cep'] ?></td>
          <td><?= $row['rg'] ?></td>
          <td><?= $row['cpf'] ?></td>
          <td>
            <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> | 
            <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>

  </body>
</html>
