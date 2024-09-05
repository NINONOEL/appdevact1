<?php
include 'config.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

header('Location: index.php');
exit;
