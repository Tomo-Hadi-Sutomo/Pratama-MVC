# Pratama MVC
 Pratama MVC is Super Lighweight MVC Framework for PHP Developer Whos Love small footprint and fast loading.
 
Pratama MVC is Super Lighweight PHP MVC Framework, that serve for even fast as possible. WIth MODE_STRICT, this MVC is remove PHP "type juggling" from every PHP file. This initial version, require PHP version > 7.0. PHP 7.4 is welcome.

File index.php (ROOT) :

```
<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
define('ROOT', dirname(__FILE__));
require 'App.php';
new App();

?>
```

File App.php

```
<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
class App {
	//CONFIG
	public $folder = ''; // ROOT Folder where index.php on
	public $controller = 'index'; // Welcome Controller, when visitor visit Home Url (index.php)
	public $method = 'index'; // Default method call when no other method declared
	public $template = 'default'; // Default template render by App. You can use as many as template for each controllers. 
	//END CONFIG
	public $url = array();
	public $params = array();
 ........ and so on..
```
