<?php
$url = filter_var($_POST['enlace'], FILTER_VALIDATE_URL);
echo filter_var($url, FILTER_VALIDATE_URL);
?>