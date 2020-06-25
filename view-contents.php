<?php
require 'crud-content.php';
date_default_timezone_set('America/Sao_Paulo');
$contents = selectallcontents();
if (!empty($contents)) {
    $day = date('d/m/Y');
    $date_day_content = explode('/', $day);

    function daysInMonth($year, $month)
    {
        return date("t", mktime(0, 0, 0, $month, 1, $year));
    }
    $year  = $date_day_content[2];
    $month = $date_day_content[1];


    //echo $date_day_content[0];
    foreach ($contents as $content) {
        $date_content_check[] = $content['date_content'];
    }
    for ($i = 0; $i < count($date_content_check); $i++) {
        $today = strtr($date_content_check[$i], '/', '-');
        $today = date('Y-m-d', strtotime($today));
        $check_day = new DateTime($today);
        $check_day->add(new DateInterval('P1D'));
        $check_week = new DateTime($today);
        $check_week->add(new DateInterval('P1W'));
        $check_half = new DateTime($today);
        $check_half->add(new DateInterval('P2W'));
        $check_month = new DateTime($today);
        $check_month->add(new DateInterval('P1M'));
        $check_day = date_format($check_day, 'd/m/Y');
        $check_day = explode('/', $check_day);
        $check_week = date_format($check_week, 'd/m/Y');
        $check_week = explode('/', $check_week);
        $check_half = date_format($check_half, 'd/m/Y');
        $check_half = explode('/', $check_half);
        $check_month = date_format($check_month, 'd/m/Y');
        $check_month = explode('/', $check_month);
        $all_days_check['check_week'][$i] = $check_week;
        $all_days_check['check_half'][$i] = $check_half;
        $all_days_check['check_month'][$i] = $check_month;
        $all_days_check['check_day'][$i] = $check_day;
    }
    $all_days_check_weeks = $all_days_check['check_week'];
    $all_days_check_halfs = $all_days_check['check_half'];
    $all_days_check_months = $all_days_check['check_month'];
    $all_days_check_days = $all_days_check['check_day'];
} else {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="src/css/view-contents.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contents</title>
</head>

<body>

    <input type="hidden" name="year" value="<?= $year ?>">
    <input type="hidden" name="month" value="<?= $month ?>">
    <section class="container-contents">
        <h1 class="text-center"> <a href="index.php"> Add new Content</a> </h1>
        <div class="grid-card-3">

            <?php for ($y = 1; $y <= 12; $y++) :
                $days_to_for = daysInMonth($year, $y);
  
                    $monthName = date('F', mktime(0, 0, 0, $y, 10));
            ?>

                <?php for ($i = 1; $i <= $days_to_for; $i++) : ?>


                        <div class="card">
                            <div class="card-header">
                                <strong><h1 class="text-center card-title">
                                    <?=$monthName ?>, <?= $i; ?>
                                </h1> </strong>
                            </div>
                            <?php  ?>
    
                                <div class="card-body">

                                    <?php
                foreach ($contents as $content) :
                                    $content_day = $content['day_content'][0] . $content['day_content'][1];
                                    $content_day_month = $content['day_content'][3] . $content['day_content'][4];
                                    $content_week = $content['week_content'][0] . $content['week_content'][1];
                                    $content_week_month = $content['week_content'][3] . $content['week_content'][4];
                                    $content_half = $content['half_content'][0] . $content['half_content'][1];
                                    $content_half_month = $content['half_content'][3] . $content['half_content'][4];
                                    $content_month = $content['month_content'][0] . $content['month_content'][1];
                                    $content_month_month =  $content['month_content'][3] . $content['month_content'][4];

                                    foreach ($all_days_check_days as $all_days_check_day) {


                                        if ((intval($all_days_check_day[0]) == $i)
                                            and
                                            (intval($all_days_check_day[0]) == intval($content_day))
                                            and
                                            (intval($y) == intval($content_day_month))



                                        ) {
                                            echo "<span>".ucfirst($content['content'])."</span>";
                                            break;
                                        }
                                    }


                                    foreach ($all_days_check_weeks as $all_days_check_week) {
                                        if ((intval($all_days_check_week[0]) == $i)
                                            and
                                            (intval($all_days_check_week[0]) == intval($content_week))
                                            and
                                            (intval($y) == intval($content_week_month))



                                        ) {
                                            echo "<span>" . ucfirst($content['content']) . "</span>";
                                            break;
                                        }
                                    }
                                    foreach ($all_days_check_halfs as $all_days_check_half) {
                                        if ((intval($all_days_check_half[0]) == $i)
                                            and
                                            (intval($all_days_check_half[0]) == intval($content_half))
                                            and
                                            (intval($y) == intval($content_half_month))



                                        ) {
                                            echo "<span>" . ucfirst($content['content']) . "</span>";
                                            break;
                                        }
                                    }

                                    foreach ($all_days_check_months as $all_days_check_month) {
                                        if ((intval($all_days_check_month[0]) == $i)
                                            and
                                            (intval($all_days_check_month[0]) == intval($content_month))
                                            and
                                            (intval($y) == intval($content_month_month))



                                        ) {

                                            echo "<span>" . ucfirst($content['content']) . "</span>";
                                            break;
                                     
                                        }
                                    }
                                endforeach;
                                    ?>
                                </div>
    
                          

                        </div>
            <?php 
                endfor;
            endfor; ?>
        </div>
    </section>
    <script src="src/js/teste.js"> </script>
    <script src="src/js/script.js"></script>

</body>

</html>