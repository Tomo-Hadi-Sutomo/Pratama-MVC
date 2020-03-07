<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
define('ROOT', dirname(__FILE__));
define('START', microtime(true)); // comment this if you not using elapsed_time() function
require 'App.php';
new App();
