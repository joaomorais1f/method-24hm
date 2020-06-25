<?php
require 'src/database/conexion.php';

function selectallcontents () {
    $sql = "SELECT * FROM content";
    $output = mysqli_query(conexion(), $sql);
    $subjects = array();
    while ($row = mysqli_fetch_assoc($output)) {
        $subjects[] = $row;
    }
    return $subjects;
}


function addcontent ($content, $date_content, $day_content, $week_content, $half_content, $month_content) {
    $date = date_format($date_content, 'd/m/Y');
    $day_content = date_format($day_content, 'd/m/Y');
    $week_content = date_format($week_content, 'd/m/Y');
    $half_content = date_format($half_content, 'd/m/Y');
    $month_content = date_format($month_content, 'd/m/Y');

    $sql = "INSERT INTO content (content, date_content, day_content, week_content, half_content, month_content)
    VALUES ('$content', '$date', '$day_content', '$week_content', '$half_content', '$month_content')";
    $output = mysqli_query($conexion = conexion(), $sql);
    if (!$output) {
        die ('something wrong when you tried to add a new content'.mysqli_error($conexion));
    }
    $message = 'success when you added a new subject'; 
    return $message;
}

function updatecontent ($idcontent, $content, $date_content, $day_content, $week_content, $half_content, $month_content) {
    $sql = "UPDATE content SET content = '$content', date_content = '$date_content', day_content = '$day_content',
    day_content = '$day_content', week_content = '$week_content', '$half_content', month_content = '$month_content' WHERE idcontent = '$idcontent'";
    $output = mysqli_query(conexion(), $sql);
    if (!$output) {
        die ('something wrong when you tried to edit a content'.mysqli_error(conexion()));
    }
    $message = 'success when you edited the content';
    return $message;
}


