
<?php
include('connect.php');
$db = connectToDatabase($dsn);

$name = $_GET['name'] ?? null;

if (!$name) {
    die("Vous devez soumettre une chaîne de requête! ^ \n skicka in en querysträng fö faaa t.ex.?name=David");
}



$sql = <<<EOD
SELECT
    rowid,
    *
FROM namnlista
WHERE
    namn LIKE ?


;
EOD;


$sql2 = <<<EOD
SELECT
    rowid,
    *
FROM namnbetydelse
WHERE
    namn LIKE ?


;
EOD;


// jag leker lite men bestämmer mig för att bara följa kraven samt väljer att dölja tabellen för de såg snyggare ut en tom tabell då sökningen inte får resultat

$stmt = $db->prepare($sql);
$args = [$name];
$stmt->execute($args);
$res = $stmt->fetchAll();
$stmt2 = $db->prepare($sql2);
$stmt2->execute($args);
$res2 = $stmt2->fetchAll();



if (!$res) {
    echo 'ingen information om namnet kunde hittas';
}

//include('view/nameview.php');
if ($res) {
    include('../view/table.php');
}
