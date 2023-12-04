<?php
session_start();


if (isset($_SESSION['datoUsuario'])) {
    $datoUsuario = $_SESSION['datoUsuario'];
} else {

    header('location: ./login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/editinfo.css">
</head>

<body>

    <body>
        <header>
            <nav class="navbar">
                <div class="navbar-logo">
                    <a href="./register.php"><img src="../assets/devchallenges.svg" alt="Logo de la página"></a>
                </div>
                <div class="navbar-icons">
                    <a href="#" class="logout-icon">
                        <img src="logout_icon.png" alt="foto+opciones">
                    </a>
                </div>
            </nav>
        </header>
        <a class="back" href="./insideLog.php">
            < Back </a>
                <section class="personal">

                    <form action="../conexion/updateinfo.php" method="POST" enctype="multipart/form-data">

                        <div class="login-box">
                            <div class="inputs">
                                <div>
                                    <h2>Change info</h2>
                                    <p>Changes will be reflected to every services</p>
                                </div>
                                <div class="image-upload">
                                    <label for="file-input">
                                        <?php if ($datoUsuario['photo'] != '') : ?>
                                            <img src="<?= $datoUsuario['photo'] ?>" alt="profile" width="40px" height="40px">
                                        <?php endif; ?>
                                        <input id="file-input" type="file" name="photo">
                                    </label>



                                </div>

                                <div>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Enter your name..." required>

                                </div>
                                <div class="bio">
                                    <label for="bio">Bio</label>
                                    <input type="text" name="bio" placeholder="Enter your bio..." required>

                                </div>
                                <div>
                                    <label for="phone">Phone</label>
                                    <input type="number" name="phone" placeholder="Enter your phone..." required>

                                </div>
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Enter your email..." required>

                                </div>
                                <div>
                                    <label for="password">Password</label>
                                    <input type="password" name="contrasena" placeholder="Enter your password..." required>

                                </div>

                                <a href=""><button type="submit">Save</button></a>
                            </div>
                        </div>


                        <div class="out_main">
                            <p class="pl">created by David Ortega</p>
                            <p class="pl">devChallenges.io</p>
                        </div>

                    </form>
                </section>
    </body>

</html>