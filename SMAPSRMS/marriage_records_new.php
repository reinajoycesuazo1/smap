<?php
session_start();
require_once 'db_config.php';

// Verify PDO connection exists
if (!isset($pdo) || !($pdo instanceof PDO)) {
    die("Database connection is not properly initialized");
}

try {
    // Fetch marriage records using PDO
    $sql = "SELECT * FROM marriages";
    $stmt = $pdo->query($sql);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($records)) {
        $records = []; // Ensure $records is always an array
    }
} catch (PDOException $e) {
    die("<div class='error'>Could not load marriage records. Please try again later.<br>
         <small>Technical details: " . htmlspecialchars($e->getMessage()) . "</small></div>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marriage Records</title>
    <link rel="stylesheet" href="marriage.css">
    <style>
        /* Additional styles to match baptism design */
        .records-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            padding: 40px;
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .close-btn {
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #e74c3c;
        }
    </style>
</head>
<body>

<div class="records-container">
    <header>
        <h1>MARRIAGE RECORDS</h1>
        <button class="close-btn" onclick="window.location.href='homepage.php';">&times;</button>
    </header>
    
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Husband</th>
                <th>Wife</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($records as $index => $record): ?>
            <tr>
                <td><?= $index+1 ?></td>
                <td><?= htmlspecialchars($record['husband_name']) ?></td>
                <td><?= htmlspecialchars($record['wife_name']) ?></td>
                <td><?= date('F j, Y', strtotime($record['marriage_date'])) ?></td>
                <td class="actions">
                    <a href="viewMarriage.php?id=<?= $record['id'] ?>" class="btn view">View</a>
                    <a href="editMarriage.php?id=<?= $record['id'] ?>" class="btn edit">Edit</a>
                    <a href="deleteMarriage.php?id=<?= $record['id'] ?>" class="btn delete" onclick="return confirm('Delete this record?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <div style="text-align: center; margin-top: 30px;">
        <a href="marriageReg.php" class="btn add-new">Register New Marriage</a>
        <a href="homepage.php" class="btn go-back" style="margin-left: 20px;">Go Back to Home</a>
    </div>
</div>

</body>
</html>
