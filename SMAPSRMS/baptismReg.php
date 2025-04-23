<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baptismal Registration Form</title>
    <link rel="stylesheet" href="baptism.css">
</head>
<body>

    <div class="form-container">
        <header>
            <h2>BAPTISMAL REGISTRATION FORM</h2>
            <button class="close-btn" onclick="window.close();">&times;</button>
        </header>

        <form action="confirmation.php" method="POST">
            <div class="church-info">
                <label>Church:</label>
                <input type="text" value="SAINT MICHAEL THE ARCHANGEL PARISH" readonly>
            </div>

            <div class="section">
                <h3>CHILD'S INFORMATION</h3>
                <label>Full Name:</label>
                <input type="text" name="child_name" required>

                <label>Date of Birth:</label>
                <input type="date" name="dob" required>

                <label>Place of Birth:</label>
                <input type="text" name="birth_place" required>

                <label>Gender:</label>
                <select name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>

            <div class="section">
                <h3>PARENT'S INFORMATION</h3>
                <label>Father's Full Name:</label>
                <input type="text" name="father_name" required>

                <label>Mother's Maiden Name:</label>
                <input type="text" name="mother_name" required>

                <label>Address:</label>
                <input type="text" name="address" required>

                <label>Contact No.:</label>
                <input type="text" name="contact" required>
            </div>

            <div class="section">
                <h3>GODPARENTS (SPONSORS)</h3>
                <textarea name="godparents" rows="4" required></textarea>
                <button type="button" class="add-godparent-btn">+</button>
            </div>

            <div class="section">
                <h3>BAPTISM DETAIL</h3>
                <label>Date of Baptism:</label>
                <input type="date" name="baptism_date" required>

                <label>Time:</label>
                <input type="time" name="baptism_time" required>

                <label>Baptizing Priest:</label>
                <input type="text" name="priest_name" required>
            </div>

            <div class="button-container">
                <button type="submit" class="register-btn">Register</button>
            </div>
        </form>

        <footer>
            <p>Copyright &copy; SMAP 2025. smap.com. All Rights Reserved | <a href="#">Privacy Policy</a></p>
        </footer>
    </div>

</body>
</html>
