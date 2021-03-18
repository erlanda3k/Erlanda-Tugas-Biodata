<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data=array (
			'Nama'=>'Erlanda Kurniawan',
			'Nim'=>'19510008',
			'JenisKelamin'=>'Laki-Laki',
			'TempatTanggalLahir'=>'Magelang, 13 Desember 1997',
			'Alamat'=>'Jl. Nitijayin no. 3',
			'Agama'=>'Islam',
			'NoTelponHP'=>'082245328794',
			'Foto'=>'<img src="<?php echo base_url() ?>assets/bg.jpg">'
		);

		$this->load->view('TugasBiodata',$data);
	}
}
 