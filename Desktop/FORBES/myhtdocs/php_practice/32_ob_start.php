<?php ob_start(); ?>

<h1>My Page.</h1>
<p>This is my page.</p>

<?php

$redirect_page = '12_array.php';
$redirect = false;
//$redirect = true;

if($redirect == true){
	header('Location: '.$redirect_page);
}

ob_end_flush();

?>