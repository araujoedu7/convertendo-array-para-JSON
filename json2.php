<?php 

$json = '[{"nome":"Eduardo","idade":17},{"nome":"Araujo","idade":20}]';

$data = json_decode($json, true);

print_r($data);
