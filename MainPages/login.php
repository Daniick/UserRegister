<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/main.css">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo"><img class="left_img" src="../assets/devchallenges.svg" alt="Gmail Logo"></div>

            <h2 class="logo_uno">Login </h2>

            <form action="../conexion/loginApp.php" method="post">
                <input type="email" name="email" placeholder="Correo electrónico" required>
                <input type="password" name="contrasena" placeholder="Contraseña" required>
                <button type="submit">
                    Start coding now
                </button>
            </form>
            <p class="pl"> or continue with these social profiles</p>
            <div class="as">
                <a href="#"><img src="../assets/Google.svg" alt=""></a>
                <a href="#"><img src="../assets/Facebook.svg" alt=""></a>
                <a href="#"><img src="../assets/Twitter.svg" alt=""></a>
                <a href="#"><img src="../assets/Gihub.svg" alt=""></a>
            </div>

            <p class="pl">Don't have an account yet? <a href="./register.php">Register</a></p>
        </div>
        <div class="out_main">
            <p class="pl">created by David Ortega</p>
            <p class="pl">devChallenges.io</p>
        </div>
    </div>
</body>

</html>