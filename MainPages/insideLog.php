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
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Navbar con Iconos</title>
    <link rel="stylesheet" href="../styles/inmain.css">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="../assets/devchallenges.svg" alt="Logo de la página">
            </div>
            <div class="navbar-icons">
                <a href="#" class="logout-icon">
                    <img src="<?= $datoUsuario['photo'] ?>" alt="profile" width="20px" height="20px">
                </a>
                <p style="color: #333333;"><?php echo $datoUsuario['name']; ?></p>
                <div class="menu-toggle" id="menuToggle">
                    <img src="../assets/arrowiosdownwardoutline_110713.svg" alt="">
                </div>
                <div class="dropdown-menu" id="dropdownMenu">
                    <ul>
                        <li><a href="./EditPersonalInfo.php"><img src="../assets/user.svg" alt="" width="20px" height="20px"> My Profile</a></li>
                        <li><a href="./EditPersonalInfo.php"><img src="../assets/users.svg" alt="" width="20px" height="20px"> Group Chat</a></li>
                        <li><a href="../conexion/logout.php"><img src="../assets/exit.svg" alt="" width="20px" height="20px"> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="personal">
        <div>
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
            <!-- <div class="login-box"> -->

            <table class="miTabla">
                <tr class="perfil">
                    <td class="title">
                        <h1 style="color:black ">Profile</h1>
                        <p style="color:#828282 ">Some info may be visible to other people</p>
                    </td>
                    <td class="edit-button">
                        <a href="./EditPersonalInfo.php"><button>Edit</button></a>
                    </td>
                </tr>

                <tr>
                    <td class="title">PHOTO</td>
                    <td>
                        <?php if ($datoUsuario['photo'] != '') : ?>
                            <img src="<?= $datoUsuario['photo'] ?>" alt="profile" width="40px" height="40px">
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td class="title">NAME</td>
                    <td style="color:#333333"><?php echo $datoUsuario['name']; ?></td>
                </tr>
                <tr>
                    <td class="title">BIO</td>
                    <td style="color:#333333"><?php echo $datoUsuario['bio']; ?></td>
                </tr>
                <tr>
                    <td class="title">PHONE</td>
                    <td style="color:#333333"><?php echo $datoUsuario['phone']; ?></td>
                </tr>
                <tr>
                    <td class="title">EMAIL</td>
                    <td style="color:#333333"><?php echo $datoUsuario['email']; ?></td>
                </tr>
                <tr>
                    <td class="title">PASSWORD:</td>
                    <td style="color:#333333">*********</td>
                </tr>

            </table>
            <!-- </div> -->

            <div class="out_main">
                <p class="pl">created by David Ortega</p>
                <p class="pl">devChallenges.io</p>
            </div>
        </div>
    </section>

    <script src="./menu/menu.js"></script>
</body>





</html>