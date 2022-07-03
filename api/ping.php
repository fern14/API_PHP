<?php
require '../config.php';

$array['result'] = [
  'pong' => true
];

echo json_encode($array);

require '../return.php';