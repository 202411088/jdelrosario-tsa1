<!DOCTYPE html>
<html>
<head>
  <title>All Tasks | Tasks for Today</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?= $this->include('navbar') ?>
<div class="container">
  <h1 class="mb-3">📋 Full Task List</h1>
  <table class="table table-striped">
    <thead><tr><th>Task</th><th>Status</th><th>Date</th></tr></thead>
    <tbody>
    <?php foreach ($tasks as $t): ?>
      <tr>
        <td><?= esc($t['title']) ?></td>
        <td><span class="badge bg-<?= $t['status']==='completed'?'success':($t['status']==='in-progress'?'warning':'secondary') ?>"><?= esc($t['status']) ?></span></td>
        <td><?= esc($t['task_date']) ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>