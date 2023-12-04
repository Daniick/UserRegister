<?php

require_once './connecxion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);
}

// if (isset($_FILES['foto'])) {

//     $img = $_FILES['foto']['tmp_name'];

//     $imgContent = addslashes(file_get_contents($img));
// }

$query = "INSERT INTO usuarios(`email`, `contrasena`) VALUE (?,?)";

try {

    $stm = $pdo->prepare($query);
    $stm->execute([
        $email,
        $hash
    ]);

    header('location: ../MainPages/insideLog.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
