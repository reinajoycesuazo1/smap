<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baptismal Records</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="baptism.css">
</head>
<body>

    <div class="container mt-5">
        <header class="mb-4">
            <h2>BAPTISMAL RECORDS</h2>
            <a href="baptismReg.php" class="btn btn-primary">Add New Record</a>
        </header>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Date of Baptism</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $records = [
                    ['id' => 1, 'name' => 'John Doe', 'date' => '2025-03-10'],
                    ['id' => 2, 'name' => 'Jane Smith', 'date' => '2025-04-05'],
                ];
                $count = 1;
                foreach ($records as $record) {
                    echo "<tr>";
                    echo "<td>{$count}</td>";
                    echo "<td>{$record['name']}</td>";
                    echo "<td>{$record['date']}</td>";
                    echo "<td>
                            <a href='viewBaptism.php?id={$record['id']}' class='btn btn-info btn-sm'>View</a>
                            <a href='editBaptism.php?id={$record['id']}' class='btn btn-warning btn-sm'>Edit</a>
                            <a href='deleteBaptism.php?id={$record['id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                            <a href='certificate.php?id={$record['id']}&type=baptism' class='btn btn-secondary btn-sm' target='_blank'>Print</a>
                          </td>";
                    echo "</tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>

        <footer class="mt-4">
            <p>Copyright &copy; SMAP 2025. smap.com. All Rights Reserved | <a href="#">Privacy Policy</a></p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
