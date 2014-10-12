<?php

define('LIBRARY_PATH', dirname(__FILE__) . '/../src');
define('LOGS_PATH', dirname(__FILE__) . '/../logs');

set_include_path(LIBRARY_PATH);
require_once LIBRARY_PATH . '/../vendor/autoload.php';
