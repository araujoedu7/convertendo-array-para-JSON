<?php 

$json = '[{"nome":"Eduardo","idade":17},{"nome":"Araujo","idade":20}]';

$data = json_decode($json, true);

var_dump($data);

