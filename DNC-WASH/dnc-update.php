<?php
date_default_timezone_set('America/New_York');

$servername = "localhost";
$username = "cron";
$password = "1234";
$dbname = "asterisk";

mysql_connect($servername, $username, $password);
mysql_select_db($dbname);

$rows = mysql_query("INSERT IGNORE INTO vicidial_dnc (phone_number) 
SELECT
vicidial_list.phone_number
FROM vicidial_list
WHERE
vicidial_list.`status` LIKE '%DNC%' AND
vicidial_list.last_local_call_time >= CURDATE() OR
vicidial_list.`status` = 'AFTHRS' AND vicidial_list.list_id = '1000'
");

while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

?>