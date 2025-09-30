<?php
include '../data.php';
?>
<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Пользователи</h1>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addModal">Добавить пользователя</button>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody id="userTable">
        <?php foreach ($users as $user): ?>
            <tr data-id="<?= $user['id'] ?>">
                <td><?= $user['id'] ?></td>
                <td class="editable" data-field="name"><?= $user['name'] ?></td>
                <td class="editable" data-field="email"><?= $user['email'] ?></td>
                <td>
                    <button class="btn btn-sm btn-danger delete-btn">Удалить</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Модальное окно добавления -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Добавить пользователя</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="addForm">
          <div class="mb-3">
            <label>Имя</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-success">Добавить</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/scripts/script.js"></script>
</body>
</html>
