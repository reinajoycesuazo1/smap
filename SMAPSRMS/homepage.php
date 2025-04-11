<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <header>
        <div class="header-container">
            <div class="logo-left">
                <img src="img/leftlogo.png" alt="Parish Logo">
            </div>
            <h1>Saint Michael the Archangel Parish Sacramental Records Management System</h1>
            <div class="logo-right">
                <img src="img/rightlogo.png" alt="Right Logo">
            </div>
        </div>
    </header>
 
    <div class="nav-container">
        <div class="search-bar">
            <input type="text" placeholder="Search here...">
            <button type="submit">
                <img src="img/search.png" alt="Search">
            </button>
        </div>
        <nav>
    <ul>
        <li>
            <form action="homepage.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/home.png" alt="Home Icon" style="width: 25px; height: 30px; display: block; margin: 0 auto;">
                    Home
                </button>
            </form>
        </li>
        <li>
            <form action="index.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/registration.png" alt="Registration Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                    Registration
                </button>
            </form>
        </li>
        <li>
            <form action="baptismalRec.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/baptism.png" alt="Baptism Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                    Baptism
                </button>
            </form>
        </li>
        <li>
            <form action="communion.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/communion.png" alt="Communion Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                    Communion
                </button>
            </form>
        </li>
        <li>
            <form action="confirmation.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/confirmation.png" alt="Confirmation Icon" style="width: 35px; height: 30px; display: block; margin: 0 auto;">
                    Confirmation
                </button>
            </form>
        </li>
        <li>
            <form action="marriage.php" method="get">
                <button type="submit" style="background: none; border: none; text-align: center;">
                    <img src="img/marriage.png" alt="Marriage Icon" style="width: 35px; height: 30px; display: block; margin: 0 auto;">
                    Marriage
                </button>
            </form>
        </li>
    </ul>
</nav>

        <div class="profile-container">
            <img src="img/profile.png" alt="Profile Icon" class="profile-icon">
            <span class="user-name">USER'S NAME</span>
        </div>
    </div>

    <main>
        <div class="background-image"></div>
    </main>
    
    <footer>
        <p>Copyright &copy; SMAP 2025. smap.com. All Rights Reserved | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
