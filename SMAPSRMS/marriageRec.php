<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-buttons a {
            margin-right: 5px;
            text-decoration: none;
            padding: 3px 6px;
            border-radius: 3px;
        }
        .view-btn {
            background-color: #4CAF50;
            color: white;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
        .edit-btn {
            background-color: #2196F3;
            color: white;
        }
        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        .print-btn {
            background-color: #ff9800;
            color: white;
        }
    </style>
</head>
<body>
    <h1>MARRIAGE RECORDS</h1>
    
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Husband's Name</th>
                <th>Wife's Name</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $records = [
                ['id' => 1, 'husband_name' => 'Juan Dela Cruz', 'wife_name' => 'Maria Clara', 'date' => '2025-01-15'],
                ['id' => 2, 'husband_name' => 'Pedro Santos', 'wife_name' => 'Ana Reyes', 'date' => '2025-02-20'],
            ];
            $count = 1;
            foreach ($records as $record) {
                echo "<tr>";
                echo "<td>{$count}</td>";
                echo "<td>{$record['husband_name']}</td>";
                echo "<td>{$record['wife_name']}</td>";
                echo "<td>{$record['date']}</td>";
                echo "<td class='action-buttons'>
                        <a href='viewMarriage.php?id={$record['id']}' class='view-btn'>View</a>
                        <a href='editMarriage.php?id={$record['id']}' class='edit-btn'>Edit</a>
                        <a href='deleteMarriage.php?id={$record['id']}' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                        <a href='marriageCertificate.php?id={$record['id']}' class='print-btn' target='_blank'>Print</a>
                      </td>";
                echo "</tr>";
                $count++;
            }
            ?>
        </tbody>
    </table>
    
    <a href="marriage.php" style="background-color: #4CAF50; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px;">Add New Record</a>
    
    <footer>
        Copyright © SMAP 2025. smap.com. All Rights Reserved | <a href="privacy.php">Privacy Policy</a>
    </footer>
</body>
</html>

<?php
?>
