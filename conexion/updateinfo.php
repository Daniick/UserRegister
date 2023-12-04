<?php
session_start();
require '../conexion/connecxion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nuevo_email = $_POST['email'] ?? '';
    $nueva_contrasena = $_POST['contrasena'] ?? '';
    $nuevo_name = $_POST['name'] ?? '';
    $nuevo_bio = $_POST['bio'] ?? '';
    $nuevo_phone = $_POST['phone'] ?? '';
    $usuario_id = $_SESSION['datoUsuario']['id'];

    $base_url = '../upload/';
    $tmp = $_FILES['photo']['tmp_name'];
    $imgName = $_FILES['photo']['name'];
    $ext = pathinfo($imgName, PATHINFO_EXTENSION);
    $url = $base_url . "profile_$usuario_id." . $ext;

    move_uploaded_file($tmp, $url);

    if (!empty($nuevo_email) && !empty($nuevo_name) && !empty($nuevo_bio) && !empty($nuevo_phone)) {
        // $usuario_id = $_SESSION['datoUsuario']['id'];


        if (is_numeric($nuevo_phone)) {

            $hash = !empty($nueva_contrasena) ? password_hash($nueva_contrasena, PASSWORD_DEFAULT) : $_SESSION['datoUsuario']['contrasena'];


            $query = "UPDATE usuarios SET email = ?, contrasena = ?, photo= ? ,name = ?, bio = ?, phone = ? WHERE id = ?";
            $stm = $pdo->prepare($query);
            $result = $stm->execute([$nuevo_email, $hash, $url, $nuevo_name, $nuevo_bio, $nuevo_phone, $usuario_id]);

            if ($result) {

                $query = "SELECT * FROM usuarios WHERE id = ?";
                $stm = $pdo->prepare($query);
                $stm->execute([$usuario_id]);
                $datosUsuario = $stm->fetch(PDO::FETCH_ASSOC);


                $_SESSION['datoUsuario'] = $datosUsuario;


                header('Location: ../MainPages/insideLog.php');
                exit();
            } else {
                echo "Error al actualizar los datos.";
            }
        } else {
            echo "Por favor, introduzca un número de teléfono válido.";
        }
    } else {
        echo "Por favor, complete todos los campos obligatorios.";
    }
} else {
    echo "Acceso no permitido.";
}
