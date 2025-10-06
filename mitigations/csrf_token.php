<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['csrf_token'];

// On form submit, validate token:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
        http_response_code(400);
        die('Invalid CSRF token');
    }
    // process request...
}
?>
<!-- Example form HTML -->
<form method="POST" action="change.php">
  <input type="hidden" name="csrf_token" value="<?php echo $token; ?>">
  <input type="password" name="password_new">
  <input type="password" name="password_conf">
  <input type="submit" value="Change">
</form>
