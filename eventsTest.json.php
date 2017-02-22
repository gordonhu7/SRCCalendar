<?php
$out = array();

$out[0] = array(
    'id' => '231',
    'title' => 'Event name'
    'url' => 'http://www.example.com/',
    'class' => 'event-important',
    'start' => '1362938400000',
    'end' => '1363197686300'
);

echo json_encode(array('success' => 1, 'result' => $out));
exit;

