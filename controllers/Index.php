<?php /* TOMO - PRATAMA STUDIO */
DECLARE(STRICT_TYPES=1);
class Index {
	public function index() {
		$data['title'] = "Halaman Index - Pratama MVC is Running!";
		render('welcome', $data);
	}
	public function contoh_data() {
		$data['absensi'] = mysqli_fetch_all(mysqli_query(APP::$db,'select * from absensi'), MYSQLI_ASSOC);
		$data['title'] = "Contoh Halaman Database!";
		render('index', $data, 'logos');
	}
}
