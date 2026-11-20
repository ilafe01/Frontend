<?php
require_once __DIR__ . '/config/db.php';

function addUser(array $felt): bool
{
    global $kund;

    if (!isset($kund) || !($kund instanceof PDO)) {
        return false;
    }

    if (empty($felt['name']) || empty($felt['email']) || empty($felt['password'])) {
        return false;
    }

    $sql = "INSERT INTO kund (name, adress, email, password)
            VALUES (:name, :adress, :email, :password)";
    $stmt = $kund->prepare($sql);
    $stmt->bindValue(':name', $felt['name'], PDO::PARAM_STR);
    $stmt->bindValue(':adress', $felt['adress'] ?? '', PDO::PARAM_STR);
    $stmt->bindValue(':email', $felt['email'], PDO::PARAM_STR);
    $stmt->bindValue(':password', password_hash($felt['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);

    try {
        return $stmt->execute();
    } catch (PDOException $e) {
        return false;
    }
}