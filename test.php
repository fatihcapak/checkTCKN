<?php

require_once 'validate.php';

$validate = new validate();
$validate->setSsn('12345678910');
echo $validate->checkSsn();
