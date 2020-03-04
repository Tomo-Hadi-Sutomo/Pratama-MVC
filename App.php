<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
class App {
	//CONFIG
	public $folder = '';
	public $controller = 'index';
	public $method = 'index';
	public $template = 'default';
	//END CONFIG
	public $url = array();
	public $params = array();
	public function __construct() {
		define('SISTEM', $this->folder);
		define('TEMPLATE', $this->template);
		define('VERSION', 'Version 1.0');
		$path = $_SERVER['REQUEST_URI'];
		$this->url = explode('/', $path);
		unset($this->url[0]);
		if (count($this->url) > 3) {
			foreach ($this->url as $key => $value) {
				if ($key > 2) {
					$this->params[] = $value;
				}
			}
		}
		$this->init();
	}
	private function init() {
		$controller = SISTEM . 'controllers/' . ucfirst($this->url[1]) . '.php';
		if (file_exists($controller)) {
			define('CONTROLLER', $this->url[1]);
			require_once($controller);
			$name = ucfirst($this->url[1]);
			$method = 'index';
			$params = null;
			$start = new $name();
			//One Param
			if (isset($this->url[2])) {
				$method = $this->url[2];
				if (isset($this->url[3])) {
					$params = $this->url[3];
				}
			}
			//Multi Params
			if (count($this->params) > 0) {
				$method = $this->url[2];
				$params = $this->params;
			}
			if (method_exists($start, $method)) {
				if ($params === null) {
					$start->$method();
				} else {
					$start->$method($params);
				}
			} else {
				error();
			}
			define('METHOD', $method); //for use later
		} else if (trim($this->url[1], '/') == '' || trim($this->url[1], '/') == 'index.php') {
			define('CONTROLLER', 'index');
			$controller = SISTEM . 'controllers/Index.php';
			require_once($controller);
			$name = ucfirst($this->controller);
			$name2 = $this->method;
			$start = new $name();
			$start->$name2();
		} else {
			error();
		}
	}
}
function base_url($args = null) {
	$url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
	$url .= "://" . $_SERVER['HTTP_HOST'];
	$url .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
	if ($args === null) {
		echo $url;
	} else {
		echo $url . $args;
	}
}
function csrf($length = 20) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}
function nyapu($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
function clean($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	if (strlen($data) < 1) {
		exit();
	} else {
		return $data;
	}
}
function json($data) {
	header('Content-Type: application/json');
	echo json_encode($data);
}
function pre($data) {
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	exit();
}
function render($_view, $data = array(), $template = null) {
	$_view = ROOT . DIRECTORY_SEPARATOR . SISTEM . 'views/' . CONTROLLER . '/' . $_view . '.php';
	if (is_null($template)) {
		$html = ROOT . DIRECTORY_SEPARATOR . SISTEM . 'views/layout/' . TEMPLATE . '/index.php';
	} else {
		$html = ROOT . DIRECTORY_SEPARATOR . SISTEM . 'views/layout/' . $template . '/index.php';
	}
	if (file_exists($_view)) {
		extract($data);
		require_once($html);
	}
}
function error($custom_file = null) {
	if (is_null($custom_file)) {
		$_view = ROOT . DIRECTORY_SEPARATOR . SISTEM . 'views/layout/error/index.php';
		require_once($_view);
	} else {
		$_view = ROOT . DIRECTORY_SEPARATOR . SISTEM . 'views/layout/error/' . $custom_file . '.php';
		require_once($_view);
	}
}
