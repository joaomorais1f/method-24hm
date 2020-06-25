<?php
require 'crud-content.php'; 
date_default_timezone_set('America/Sao_Paulo');
$data_post = strtr($_POST['date-content'], '/', '-');
$data_post = date('Y-m-d', strtotime($data_post));
$date = new DateTime($data_post);
$date_tomorrow = new DateTime($data_post);
$date_week = new DateTime($data_post);
$date_half = new DateTime($data_post);
$date_month = new DateTime($data_post);
$date_tomorrow->add(new DateInterval('P1D'));
$date_week->add(new DateInterval('P1W'));
$date_half->add(new DateInterval('P2W'));
$date_month->add(new DateInterval('P1M'));
echo date_format($date, "d/m/Y");
echo "<br>";
echo date_format($date_tomorrow, 'd/m/Y');
echo "<br>";
echo date_format($date_week, 'd/m/Y');
echo "<br>";
echo date_format($date_half, 'd/m/Y');
echo "<br>";
echo date_format($date_month, 'd/m/Y');

$content = $_POST['content'];

$contents = addcontent($content, $date, $date_tomorrow, $date_week, $date_half, $date_month);

if ($contents) {
    header('location: view-contents.php');
} else {
    echo $contents;
}