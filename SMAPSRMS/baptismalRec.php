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
            
            ?>
        </tbody>
    </table>
    
    <a href="add.php" style="background-color: #4CAF50; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px;">Add New Record</a>
    
    <footer>
        Copyright © SMAP 2025. smap.com. All Rights Reserved | <a href="privacy.php">Privacy Policy</a>
    </footer>
</body>
</html>

<?php
?>