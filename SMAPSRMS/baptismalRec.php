<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Baptismal Records</title>
    <link rel="stylesheet" href="baptism.css" />
</head>
<body>
    <div class="records-container">
        <header>
            <h1>BAPTISMAL RECORDS</h1>
            <a href="homepage.php" class="btn go-back">Go Back</a>
            <button class="close-btn" onclick="window.location.href='homepage.php';">&times;</button>
        </header>

        <table class="records-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $records = [
                    ['id' => 1, 'name' => 'Juan Dela Cruz', 'date' => '2025-01-15'],
                    ['id' => 2, 'name' => 'Maria Clara', 'date' => '2025-02-20'],
                ];
                $count = 1;
                foreach ($records as $record) {
                    echo "<tr>";
                    echo "<td>{$count}</td>";
                    echo "<td>{$record['name']}</td>";
                    echo "<td>{$record['date']}</td>";
                    echo "<td class='action-buttons'>
                            <a href='viewBaptism.php?id={$record['id']}' class='btn view-btn' title='View Record'>&#128065;</a>
                            <a href='editBaptism.php?id={$record['id']}' class='btn edit-btn' title='Edit Record'>&#9998;</a>
                            <a href='deleteBaptism.php?id={$record['id']}' class='btn delete-btn' title='Delete Record' onclick='return confirm(\"Are you sure you want to delete this record?\");'>&#128465;</a>
                            <a href='certificate.php?id={$record['id']}' class='btn print-btn' title='Print Certificate' target='_blank'>&#128424;</a>
                          </td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 30px;">
            <a href="baptismReg.php" class="btn add-btn">Add New Record</a>
        </div>

        <footer>
            Copyright © SMAP 2025. smap.com. All Rights Reserved | <a href="privacy.php">Privacy Policy</a>
        </footer>
    </div>
</body>
</html>
