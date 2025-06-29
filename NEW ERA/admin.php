<?php
$conn = new mysqli("localhost", "root", "root", "leave_db");
$result = $conn->query("SELECT * FROM leave_applications");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Leave Applications</title>
    <style>
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
        th { background-color: #eee; }
        h1 { text-align: center; color: darkgreen; }
        a.button {
            background: #007BFF; color: white; padding: 6px 10px; text-decoration: none; border-radius: 4px;
            margin: 0 2px;
        }
    </style>
</head>
<body>
    <h1>Leave Applications Admin Panel</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>P/NO</th>
            <th>Designation</th>
            <th>Leave Type</th>
            <th>Days</th>
            <th>Dates</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['pno'] ?></td>
            <td><?= $row['designation'] ?></td>
            <td><?= $row['leave_type'] ?></td>
            <td><?= $row['leave_days'] ?></td>
            <td><?= $row['leave_from'] ?> to <?= $row['leave_to'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <a class="button" href="approve.php?id=<?= $row['id'] ?>&status=Approved">Approve</a>
                <a class="button" href="approve.php?id=<?= $row['id'] ?>&status=Rejected">Reject</a>
                <a class="button" href="generate_pdf.php?id=<?= $row['id'] ?>">PDF</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
