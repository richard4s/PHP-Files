<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Practice</title>
</head>
<body>

<?php

$time = time();

//setting cookie
setcookie('username', 'Alex', $time + 60);

//unseting cookie
setcookie('username', 'Alex', $time - 60);

?>

</body>
</html> 