<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$handle = fopen('names.txt', 'w');
fwrite($handle, 'Alex'."\n");
fwrite($handle, 'Blly');

fclose($handle);

echo 'Written.';

?>

</body>
</html> 