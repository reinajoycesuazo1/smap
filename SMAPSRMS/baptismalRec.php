<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baptismal Records</title>
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
    <h1>BAPTISMAL RECORDS</h1>
    
    <table>
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
                        <a href='viewBaptism.php?id={$record['id']}' class='view-btn'>View</a>
                        <a href='editBaptism.php?id={$record['id']}' class='edit-btn'>Edit</a>
                        <a href='deleteBaptism.php?id={$record['id']}' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                        <a href='certificate.php?id={$record['id']}' class='print-btn' target='_blank'>Print</a>
                      </td>";
                echo "</tr>";
                $count++;
            }
            ?>
        </tbody>
    </table>
    
    <a href="baptismReg.php" style="background-color: #4CAF50; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px;">Add New Record</a>
    
    <footer>
        Copyright © SMAP 2025. smap.com. All Rights Reserved | <a href="privacy.php">Privacy Policy</a>
    </footer>
</body>
</html>

<?php
?>