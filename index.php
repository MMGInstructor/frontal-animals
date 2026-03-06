<?php

require_once "db.php";

$db = getDB();

if ($db === null) {
    echo "Application error";
    exit;
}

?>

<html>
<head>
<title>Animals Database</title>
<style>
body { font-family: Arial; margin:40px; }
table { border-collapse: collapse; }
td, th { border:1px solid #ccc; padding:8px; }
th { background:#eee; }
</style>
</head>
<body>

<h1>Animals Database</h1>

<h2>Scientific and Common Names</h2>

<table>
<tr>
<th>ID</th>
<th>Scientific Name</th>
<th>Common Name</th>
</tr>

<?php

try {

    $sql = "
    SELECT
        scientific_names.id,
        scientific_names.name AS scientific_name,
        common_names.name AS common_name
    FROM scientific_names
    LEFT JOIN common_names
        ON scientific_names.id = common_names.id
    ";

    $stmt = $db->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["scientific_name"]."</td>";
        echo "<td>".$row["common_name"]."</td>";
        echo "</tr>";
    }

} catch (Exception $e) {

    error_log("QUERY ERROR ".$e->getMessage());
    echo "<tr><td colspan='3'>Error loading data</td></tr>";
}

?>

</table>

</body>
</html>
