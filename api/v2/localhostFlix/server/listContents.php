<?php
// Load Essential loader

require '../../../../vendor/autoload.php';
require '../../../../settings/initialization.php';
?>
<?php

$sql    = 'SELECT * FROM `app_localflix_contentlist`';
$stmt   = $conn->prepare($sql);
$stmt   -> execute();
$result = $stmt->get_result();

foreach($result as $row)
{
     echo "Show Name: ".$row['content_title']."<br> with ID of ".$row["content_id"]."<br>";
}

?>