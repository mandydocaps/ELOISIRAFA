<?php
// Arquivo: julia/index.php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerenciamento de tarefas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Gerenciamento de tarefas</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php?page=cadastro_usuario">Cadastro de Usuario</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=cadastro_tarefa">Cadastro de Tarefas</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=gerenciar">Gerenciar Tarefas</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
<?php
  // Alterna entre as páginas
  if (isset($_GET['page'])) {
    $page = $_GET['page'];

    // ================= CADASTRO DE USUARIO =================
    if ($page == "cadastro_usuario") {
      ?>
      <h2>Cadastro de Usuario</h2>
      <form class="mt-3">
        <div class="mb-3">
          <label class="form-label">Nome:</label>
          <input type="text" class="form-control" placeholder="Digite o nome">
        </div>
        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" placeholder="Digite o email">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      <?php
    }

    // ================= CADASTRO DE TAREFA =================
    elseif ($page == "cadastro_tarefa") {
      ?>
      <h2>Cadastro de Tarefas</h2>
      <form class="mt-3">
        <div class="mb-3">
          <label class="form-label">Descrição:</label>
          <input type="text" class="form-control" placeholder="Digite a descrição">
        </div>
        <div class="mb-3">
          <label class="form-label">Setor:</label>
          <input type="text" class="form-control" placeholder="Digite o setor">
        </div>
        <div class="mb-3">
          <label class="form-label">Usuário:</label>
          <select class="form-select">
            <option>Selecione um usuário</option>
            <option>Dereck</option>
            <option>Rodrigo</option>
            <option>Lucas</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Prioridade:</label>
          <select class="form-select">
            <option>Selecione a prioridade</option>
            <option>Baixa</option>
            <option>Regular</option>
            <option>Alta</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
      <?php
    }

    // ================= GERENCIAR TAREFAS (KANBAN) =================
    elseif ($page == "gerenciar") {
      ?>
      <h2 class="text-center mb-4">Quadro de Tarefas</h2>
      <div class="row">
        <!-- Coluna A Fazer -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-header text-center fw-bold">A Fazer</div>
            <div class="card-body">
              <p><b>Descrição:</b> testeSesi</p>
              <p><b>Setor:</b> Colegio sesi</p>
              <p><b>Prioridade:</b> Regular</p>
              <p><b>Vinculado a:</b> Dereck</p>
              <button class="btn btn-primary btn-sm">Editar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
              <div class="mt-2">
                <input type="radio" name="status1"> A Fazer<br>
                <input type="radio" name="status1"> Fazendo<br>
                <input type="radio" name="status1"> Pronto<br>
              </div>
              <button class="btn btn-success mt-2">Alterar Status</button>
            </div>
          </div>
        </div>
        <!-- Coluna Fazendo -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-header text-center fw-bold">Fazendo</div>
            <div class="card-body">
              <p><b>Descrição:</b> teste2</p>
              <p><b>Setor:</b> setor B</p>
              <p><b>Prioridade:</b> Alta</p>
              <p><b>Vinculado a:</b> Rodrigo</p>
              <button class="btn btn-primary btn-sm">Editar</button>
              <button class="btn btn-danger btn-sm">Excluir</button>
              <div class="mt-2">
                <input type="radio" name="status2"> A Fazer<br>
                <input type="radio" name="status2"> Fazendo<br>
                <input type="radio" name="status2"> Pronto<br>
              </div>
              <button class="btn btn-success mt-2">Alterar Status</button>
            </div>
          </div>
        </div>
        <!-- Coluna Pronto -->
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-header text-center fw-bold">Pronto</div>
            <div class="card-body">
              <p><b>Descrição:</b> teste4</p>
              <p><b>Setor:</b> setor AB</p>
              <p><b>Prioridade:</b> Alta</p>
              <p><b>Vinculado a:</b> Lucas</p>
              <a href="#" class="btn btn-link p-0">✏️ Editar Usuário</a> |
              <a href="#" class="btn btn-link text-danger p-0">🗑️ Excluir Usuário</a>
              <div class="mt-2">
                <input type="radio" name="status3"> A Fazer<br>
                <input type="radio" name="status3"> Fazendo<br>
                <input type="radio" name="status3"> Pronto<br>
              </div>
              <button class="btn btn-success mt-2">Alterar Status</button>
            </div>
          </div>
        </div>
      </div>
      <?php
    }

  } else {
    echo "<h2 class='text-center'>Bem-vindo ao Gerenciamento de Tarefas</h2><p class='text-center'>Use o menu acima para navegar.</p>";
  }
?>
</div>

</body>
</html>