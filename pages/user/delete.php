<?php
$id = $_GET['id'];
$targetUser = readUser($id);
if ($targetUser == null || $targetUser->level == 'admin') {
  header("Location: ./?page=user/list");
}
if (deleteUser($id)) {
  echo '<div class="alert alert-success" role="alert">
    User Deleted Successfully! <a href="./?page=user/list">go back</a> .
  </div>';
}
?>