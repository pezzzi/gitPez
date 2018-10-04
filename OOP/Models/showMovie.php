<?php

include('autoload.php');

$avatar = new Movie( 'Avatar', 4, '2008-11-04' );
var_dump($avatar);
$avatar->getTitleYear();

?>
