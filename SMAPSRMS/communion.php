<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Communion Records</title>
    <link rel="stylesheet" href="communion.css" />
</head>
<body>
    <div class="form-container">
        <header>
            <h2>COMMUNION RECORDS</h2>
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
                    ['id' => 1, 'name' => 'Pedro Santos', 'date' => '2025-03-10'],
                    ['id' => 2, 'name' => 'Ana Reyes', 'date' => '2025-04-05'],
                ];
                $count = 1;
                foreach ($records as $record) {
                    echo "<tr>";
                    echo "<td>{$count}</td>";
                    echo "<td>{$record['name']}</td>";
                    echo "<td>{$record['date']}</td>";
                    echo "<td class='action-buttons'>
                            <a href='viewCommunion.php?id={$record['id']}' class='btn view-btn'>View</a>
                            <a href='editCommunion.php?id={$record['id']}' class='btn edit-btn'>Edit</a>
                            <a href='deleteCommunion.php?id={$record['id']}' class='btn delete-btn' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                            <a href='certificate.php?id={$record['id']}&type=communion' class='btn print-btn' target='_blank'>Print</a>
                          </td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>

        <a href="communionReg.php" class="btn add-btn">Add New Record</a>

        <footer>
            Copyright © SMAP 2025. smap.com. All Rights Reserved | <a href="privacy.php">Privacy Policy</a>
        </footer>
    </div>
</body>
</html>
