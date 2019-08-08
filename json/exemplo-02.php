<?php

$json = '[{"nome":"Fl\u00e1vio","idade":17},{"nome":"Gabriel","idade":14}]';

$data = json_decode($json, true);

var_dump($data);

?>