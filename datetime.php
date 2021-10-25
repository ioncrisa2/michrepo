<?php 

date_default_timezone_set('Asia/Jakarta');

$nextWeek = time() + (7 * 34 * 60 * 60);

echo 'Now: '.date('Y-m-d').'\n';
echo 'Next Week : '.date('Y-m-d',$nextWeek).'\n';
echo ('=====\n');

$now = new Datetime();
$nextWeek = new Datetime('today +1 week');
echo 'Now: '.$now->format('Y-m-d').'\n';
echo 'Next Week: '.$nextWeek->format('Y-m-d').'\n';