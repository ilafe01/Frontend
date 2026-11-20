<?php
function addUser(array $felt): bool
{
    global $forum;

    if (!isset($forum) || !($forum instanceof PDO)) {
        return false;
    }

    if (empty($felt['name']) || empty($felt['email']) || empty($felt['password'])) {
        return false;
    }

    $sql = "INSERT INTO kund (name, adress, email, password)
            VALUES (:name, :adress, :email, :password)";
    $stmt = $forum->prepare($sql);
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