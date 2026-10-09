<!DOCTYPE html>
<html>
<head>
  <title>Welcome | Tasks for Today</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?= $this->include('navbar') ?>
<div class="container">
  <h1 class="mb-3">📅 Today's Tasks (<?= date('F j, Y') ?>)</h1>
  <?php if (empty($tasks)): ?>
    <p class="text-muted">No tasks scheduled for today.</p>
  <?php else: ?>
    <div class="list-group">
      <?php foreach ($tasks as $t): ?>
        <div class="list-group-item">
          <h5 class="mb-1"><?= esc($t['title']) ?></h5>
          <span class="badge bg-<?= $t['status']==='completed'?'success':($t['status']==='in-progress'?'warning':'secondary') ?>">
            <?= esc($t['status']) ?>
          </span>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>
</body>
</html>