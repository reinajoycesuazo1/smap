<?php
session_start();
include 'db_config.php'; // Include database configuration

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">
    <script src="homepage.js" defer></script> <!-- Include the updated JavaScript -->
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
                    <button id="nav-dashboard" style="background: none; border: none; text-align: center;">
                        <img src="img/dashboard.png" alt="Dashboard Icon" style="width: 25px; height: 30px; display: block; margin: 0 auto;">
                        Dashboard
                    </button>
                </li>
                <li>
                    <button id="nav-registration" style="background: none; border: none; text-align: center;">
                        <img src="img/registration.png" alt="Registration Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                        Registration
                    </button>
                </li>
                <li>
                    <button id="nav-baptism" style="background: none; border: none; text-align: center;">
                        <img src="img/baptism.png" alt="Baptism Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                        Baptism
                    </button>
                </li>
                <li>
                    <button id="nav-communion" style="background: none; border: none; text-align: center;">
                        <img src="img/communion.png" alt="Communion Icon" style="width: 30px; height: 30px; display: block; margin: 0 auto;">
                        Communion
                    </button>
                </li>
                <li>
                    <button id="nav-confirmation" style="background: none; border: none; text-align: center;">
                        <img src="img/confirmation.png" alt="Confirmation Icon" style="width: 35px; height: 30px; display: block; margin: 0 auto;">
                        Confirmation
                    </button>
                </li>
                <li>
                    <button id="nav-marriage" style="background: none; border: none; text-align: center;">
                        <img src="img/marriage.png" alt="Marriage Icon" style="width: 35px; height: 30px; display: block; margin: 0 auto;">
                        Marriage
                    </button>
                </li>
            </ul>
        </nav>

        <div class="profile-container">
            <img src="img/profile.png" alt="Profile Icon" class="profile-icon">
            <span class="user-name">USER'S NAME</span>
        </div>
    </div>

    <main>
        <!-- Placeholder for dynamic content -->
        <div id="dynamic-content">
            <p>Welcome to the Sacramental Records Management System. Please select an option from the navigation above.</p>
        </div>
    </main>
    
    <footer>
        <p>Copyright &copy; SMAP 2025. smap.com. All Rights Reserved | <a href="#">Privacy Policy</a></p>
    </footer>
</body>
</html>
