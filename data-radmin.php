<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login');
    exit();
}
if ($_SESSION['status_pengguna'] !== 'admin') {
    header('Location: 404');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<?php include './templates/header.php'; ?>

<body id="page-top">
    <!-- Scrollable modal -->
<div class="modal-dialog modal-dialog-scrollable">
  ...
</div>

<?php include './templates/js.php'; ?>

</html>