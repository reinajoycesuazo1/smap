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
    // More user-friendly error handling
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
</head>
<body>

<div class="records-container">
    <h1>MARRIAGE RECORDS</h1>
    
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
                <td><?= $record['marriage_date'] ?></td>
                <td class="actions">
                    <a href="viewMarriage.php?id=<?= $record['id'] ?>" class="btn view">View</a>
                    <a href="editMarriage.php?id=<?= $record['id'] ?>" class="btn edit">Edit</a>
                    <a href="deleteMarriage.php?id=<?= $record['id'] ?>" class="btn delete" onclick="return confirm('Delete this record?')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <a href="marriageReg.php" class="btn add-new">Register New Marriage</a>
</div>

</body>
</html>
