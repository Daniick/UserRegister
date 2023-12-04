<?php
require '../conexion/connecxion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE email = ?";

    try {
        $stm = $pdo->prepare($query);
        $stm->execute([$email]);

        $result = $stm->fetch(PDO::FETCH_ASSOC);

        if ($result) {

            var_dump($result);

            if (password_verify($contrasena, $result['contrasena'])) {
                session_start();
                $_SESSION['datoUsuario'] = $result;
                header('location: ../MainPages/insideLog.php');
                exit();
            } else {
                echo "La contraseña proporcionada no coincide.";
            }
        } else {
            echo "El correo electrónico proporcionado no está registrado.";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {

    exit();
}
