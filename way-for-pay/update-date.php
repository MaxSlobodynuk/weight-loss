<?php
$file_time = file_get_contents('date.txt');
$time_now = time();
$check_different = $time_now - $file_time;

if ($check_different > 0) {
	$setDate = strtotime('+3 hours', strtotime(date('Y-m-d H:00:00')));
	file_put_contents('date.txt', $setDate, LOCK_EX);
}?>