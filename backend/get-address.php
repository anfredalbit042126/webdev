<?php

require_once "connections.php";

$provinces = [];
$cities = [];
$barangays = [];

/* Provinces */

$sql = "
    SELECT DISTINCT province
    FROM address
    WHERE province IS NOT NULL
    AND TRIM(province) <> ''
    ORDER BY province ASC
";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result))
{
    $provinces[] = trim($row['province']);
}

/* Cities */

$sql = "
    SELECT DISTINCT province, city
    FROM address
";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result))
{
    $cities[] = $row;
}

/* Barangays */

$sql = "
    SELECT DISTINCT city, barangay
    FROM address
    WHERE barangay IS NOT NULL
    AND TRIM(barangay) <> ''
";

$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result))
{
    $barangays[] = $row;
}

echo json_encode([
    "provinces" => $provinces,
    "cities" => $cities,
    "barangays" => $barangays
]);
