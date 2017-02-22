<?php
$out = array();

 for($i=1; $i<=15; $i++){   //from day 01 to day 15
    $data = date('Y-m-d', strtotime("+".$i." days"));
    $out[] = array(
        'id' => $i,
        'title' => 'Event name '.$i,
        'url' => Helper::url($id),
        'class' => 'event-important',
        'start' => '1362938400000'
    );
}

echo json_encode(array('success' => 1, 'result' => $out));
exit;
?>