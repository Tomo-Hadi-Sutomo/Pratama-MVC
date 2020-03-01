<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
class Index {
	public function __construct() {
		//code start here
	}
	public function index() {
		$data['title'] = "Halaman Index - Pratama MVC is Running!";
		render('welcome', $data);
	}
}