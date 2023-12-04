<?php
require '../conexion/connecxion.php';

try {
    if (!empty($_POST['email']) && !empty($_POST['contrasena'])) {

        $query = "INSERT INTO usuarios(`email`, `contrasena`) VALUES (?, ?)";

        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];


        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

        $stm = $pdo->prepare($query);
        $stm->execute([$email, $hash]);

        $sql = " SELECT * FROM usuarios WHERE email= ?";

        $qq = $pdo->prepare($sql);
        $qq->execute([$email]);
        $resultado = $qq->fetch(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['datoUsuario'] = $result;
        header('location: ./insideLog.php');
        exit();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo"><img class="l eft_img" src="../assets/devchallenges.svg" alt="Logo" class=""></div>

            <h2 class="logo_uno">Join thousands of learners from around the world </h2>
            <p class="logo_dos">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            <form action="./register.php" method="post">
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">
                    Start coding now
                </button>
            </form>
            <p class="pl"> or continue with these social profile</p>
            <div class="as">
                <a href="#"><img src="../assets/Google.svg" alt=""></a>
                <a href="#"><img src="../assets/Facebook.svg" alt=""></a>
                <a href="#"><img src="../assets/Twitter.svg" alt=""></a>
                <a href="#"><img src="../assets/Gihub.svg" alt=""></a>
            </div>

            <p class="pl">Adready a member? <a href="./login.php">Login</a></p>
        </div>
        <div class="out_main">
            <p class="pl">created by David Ortega</p>
            <p class="pl">devChallenges.io</p>
        </div>

    </div>

</body>

</html>