<!DOCTYPE html>
<html>
<head>
  <title>Profile | Tasks for Today</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?= $this->include('navbar') ?>
<div class="container">
  <h1 class="mb-3">👤 User Profile</h1>
  <?php if ($user): ?>
    <ul class="list-group">
      <li class="list-group-item"><strong>Full Name:</strong> <?= esc($user['full_name']) ?></li>
      <li class="list-group-item"><strong>Username:</strong> <?= esc($user['username']) ?></li>
      <li class="list-group-item"><strong>Email:</strong> <?= esc($user['email']) ?></li>
      <li class="list-group-item"><strong>Member Since:</strong> <?= date('F j, Y', strtotime($user['created_at'])) ?></li>
    </ul>
  <?php endif; ?>
</div>
</body>
</html>