<?php
date_default_timezone_set('PRC');
define('FRAMEWORK_PATH',getcwd().'/framework/');
require FRAMEWORK_PATH.'core/Framework.class.php';
new framework\core\Framework();
?>