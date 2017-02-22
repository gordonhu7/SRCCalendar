<?php
$out = array();

 for($i = 0; $i <= 5; $i++){   //from day 01 to day 15
    $day = date('Y-m-d', strtotime("+". $i ." days"));
    $nextDay = date('Y-m-d', strtotime("+". ($i + 1) ." days"));
    $out[] = array(
        'id' => $i,
        'title' => 'Event name '.$i,
        'url' => "http://www.example.com/",
        'class' => 'event-important',
        'start' => strtotime($day).'000',
        'end' => strtotime($nextDay).'000'
    );
}

echo json_encode(array('success' => 1, 'result' => $out));
exit;
?>