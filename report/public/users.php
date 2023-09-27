<?php
$title = "User page";
include("../config/config.php");
include('connectUser.php');
include('../view/loginheader.php');

$query = $_GET['query'] ?? null;


$db = connectToDatabase($dsn);

// Create the SQL statement
$sql = <<<EOD
SELECT
    rowid,
    acronym,
    name,
    role,
    avatar,
    signature
FROM user
;
EOD;


$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll();


?>
<a class="login" href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>

<?php
if ($res) {
    require("../view/users.php");
}
if (!$res) {
    echo 'Found nothing.';
}
if (!$res) {
    include('../view/footer.php');
}
#jag förstår inte varför min footer lägger sig över min tabell hade samma problem med förra momentet jag har suttit med detta i timmar och kan tyvär bara ge upp med det och köra efter någon form
#av funktionallitet ist och börja med slut momenten i webtec så jag inte hamnar efter mer.
