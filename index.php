<?php
require "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Animals Database</title>
<style>
body { font-family: Arial; margin:40px; }
table { border-collapse: collapse; margin-bottom:30px; }
td, th { border:1px solid #ccc; padding:8px; }
th { background:#eee; }
</style>
</head>
<body>

<h1>Animals Database</h1>

<h2>Common Names</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
</tr>

<?php
$stmt = $pdo->query("SELECT id, name FROM common_names");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "</tr>";
}
?>

</table>

<h2>Locations</h2>
<table>
<tr>
<th>Region</th>
<th>Name</th>
</tr>

<?php
$stmt = $pdo->query("SELECT region, name FROM locations");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row["region"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "</tr>";
}
?>

</table>

<h2>Scientific Names</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
</tr>

<?php
$stmt = $pdo->query("SELECT id, name FROM scientific_names");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
