<?php
require_once("backend/connections.php");

$sql = "SELECT * FROM profile";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Records</title>
</head>
<body>

<h2>Saved Records</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Province</th>
        <th>City</th>
        <th>Barangay</th>
        <th>Message</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['province']; ?></td>
        <td><?php echo $row['city']; ?></td>
        <td><?php echo $row['barangay']; ?></td>
        <td><?php echo $row['message']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>