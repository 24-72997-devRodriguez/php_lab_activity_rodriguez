<?php
include 'dbcon.php';
$id = intval($_GET['id'] ?? 0);

if ($id > 0) {
    $conn->query("DELETE FROM users WHERE id = $id");
}

header("Location: index.php?msg=deleted");
exit;