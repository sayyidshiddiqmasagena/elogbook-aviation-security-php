<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_main');
		$this->load->library('session');

		$this->load->model('auth_model');
		$this->auth_model->cek_login();

		header('Cache-Control: no-cache, must-revalidate, max-age=0');
		header('Cache-Control: post-check=0, pre-check=0',false);
		header('Pragma: no-cache');
		// if(!$this->session->userdata('usr_id'))
		// 	redirect('login');
	}

	public function index()
	{
		$this->session->set_userdata('iduser',1);
	    $this->session->set_userdata('team','ECHO');
	    $this->session->set_userdata('shift','MALAM');

	    // redirect('main/randomtampil_scp2');	
	    $this->load->view('header.php');
	    $this->load->view('footer.php');
	}

	public function randomorang_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdorang = $this->input->post('tglcari_rdorang');
			if($tglcari_rdorang){
				$this->session->set_userdata('tglcari_rdorang',$tglcari_rdorang);
				if (isset($_POST['rdorang'])) {
					redirect('main/randomtampil_scp2');
				}
			}
		// }
	}

	public function randomorang_transit_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdorang = $this->input->post('tglcari_rdorang');
			if($tglcari_rdorang){
				$this->session->set_userdata('tglcari_rdorang',$tglcari_rdorang);
				if (isset($_POST['rdorang'])) {
					redirect('main/randomtampil_scptransit');
				}
			}
		// }
	}

	public function randomorang_inter_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdorang = $this->input->post('tglcari_rdorang');
			if($tglcari_rdorang){
				$this->session->set_userdata('tglcari_rdorang',$tglcari_rdorang);
				if (isset($_POST['rdorang'])) {
					redirect('main/randomtampil_scpinter');
				}
			}
		// }
	}

	public function randomorang_karyawan_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdorang = $this->input->post('tglcari_rdorang');
			if($tglcari_rdorang){
				$this->session->set_userdata('tglcari_rdorang',$tglcari_rdorang);
				if (isset($_POST['rdorang'])) {
					redirect('main/randomtampil_scpkaryawan');
				}
			}
		// }
	}

	public function randomorang_scppos2_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdorang = $this->input->post('tglcari_rdorang');
			if($tglcari_rdorang){
				$this->session->set_userdata('tglcari_rdorang',$tglcari_rdorang);
				if (isset($_POST['rdorang'])) {
					redirect('main/randomtampil_scppos2');
				}
			}
		// }
	}

	public function randomtampil_scp2()
	{

		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}

		$data['title'] = "SCP II";
		$idno = isset($_GET['idno']) ? $_GET['idno'] : '' ; 
		// $data['random'] = $this->model_main->getverifikasi_rcscp2('SCP II',$shift, $team, $tgl); 
		$data['random'] = $this->model_main->getdata_random('SCP II', $tgl, $team, $shift);
		$data['idno'] = $idno;
		$this->load->view('header.php');
		$this->load->view('randomcheck/scp2_randomchecktampil.php',$data);
		$this->load->view('footer.php');

	}

	public function random_scp2()
	{		
		$data['lokasi'] = "SCP II";
		$data['sform'] = "nokaryawan";
		// // $idno = $_GET['idno']; 
		// // $data['random'] = $this->model_main->getverifikasi_rcscp2();
		// $data['random'] = $this->model_main->getdata_random('SCP II',$shift, $team, $tgl);
		// // $data['idno'] = $idno;
		$this->load->view('header.php');
		$this->load->view('randomcheck/scp2_randomcheck.php',$data);
		$this->load->view('footer.php');
	}
	
	public function randomedit_scp2()
	{	
		/*
		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}
		$data['lokasi'] = "SCP II";
		$data['sform'] = "nokaryawan";
		$idno = $_GET['idno']; 
		// $data['random'] = $this->model_main->getverifikasi_rcscp2('SCP II',$shift, $team, $tgl); 
		$data['random'] = $this->model_main->getdata_random('SCP II', $tgl, $team, $shift);
		$data['idno'] = $idno;
		$this->load->view('header.php');
		$this->load->view('randomcheck/scp2_randomcheckedit.php',$data);
		$this->load->view('footer.php');
		*/
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP II";
		$data['sform'] = "nokaryawan";
		$data['randomidno'] = $this->model_main->getdata_randomidno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scp2_randomcheckedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_scptransit()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP TRANSIT";
		$data['sform'] = "nokaryawan";
		$data['randomidno'] = $this->model_main->getdata_randomscptransit_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scptransit_randomcheckedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_scpinter()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP INTERNASIONAL";
		$data['sform'] = "nokaryawan";
		$data['randomidno'] = $this->model_main->getdata_randomscpinter_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpinter_randomcheckedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_scpkaryawan()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP KARYAWAN";
		$data['sform'] = "nokaryawan";
		$data['randomidno'] = $this->model_main->getdata_randomscpkaryawan_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpkaryawan_randomcheckedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_scppos2()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP POS OPERASIONAL 2";
		$data['sform'] = "nokaryawan";
		$data['randomidno'] = $this->model_main->getdata_randomscppos2_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scppos2_randomcheckedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_bagasiislan1()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP I (ISLAND I)";
		$data['randomidno'] = $this->model_main->getdata_randombagasiislan1_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiislan1_rcedit.php',$data);
		$this->load->view('footer.php');
	}

	public function randomedit_bagasiisland2()
	{	
		$idno = $_GET['idno'];
		$data['lokasi'] = "SCP I (ISLAND II)";
		$data['randomidno'] = $this->model_main->getdata_randombagasiisland2_idno($idno);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiisland2_rcedit.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcscp2_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP II"; 
		$data['ver_rcscp2'] = $this->model_main->getverifikasi_rcscp2('SCP II',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scp2rc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcscptransit_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP TRANSIT"; 
		$data['ver_rcscptransit'] = $this->model_main->getverifikasi_rcscptransit('SCP TRANSIT',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scptransitrc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcscpinter_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP INTERNASIONAL"; 
		$data['ver_rcscpinter'] = $this->model_main->getverifikasi_rcscpinter('SCP INTERNASIONAL',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpinterrc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcscpkaryawan_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP KARYAWAN"; 
		$data['ver_rcscpkaryawan'] = $this->model_main->getverifikasi_rcscpkaryawan('SCP KARYAWAN',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpkaryawanrc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcscppos2_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP POS OPERASIONAL 2"; 
		$data['ver_rcscppos2'] = $this->model_main->getverifikasi_rcscppos2('SCP POS OPERASIONAL 2',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scppos2rc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtampil_scptransit()
	{
		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}

		$data['title'] = "SCP TRANSIT"; 
		$data['random'] = $this->model_main->getdata_random_scptransit('SCP TRANSIT', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scptransit_randomchecktampil.php',$data);
		$this->load->view('footer.php');
	}

	public function random_scptransit()
	{		
		$data['lokasi'] = "SCP TRANSIT";
		$data['sform'] = "nokaryawan";
		$this->load->view('header.php');
		$this->load->view('randomcheck/scptransit_randomcheck.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtampil_scpinter()
	{
		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}

		$data['title'] = "SCP INTERNASIONAL"; 
		$data['random'] = $this->model_main->getdata_random_scpinter('SCP INTERNASIONAL', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpinter_randomchecktampil.php',$data);
		$this->load->view('footer.php');
	}

	public function random_scpinter()
	{		
		$data['lokasi'] = "SCP INTERNASIONAL";
		$data['sform'] = "nokaryawan";
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpinter_randomcheck.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtampil_scpkaryawan()
	{
		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}

		$data['title'] = "SCP KARYAWAN"; 
		$data['random'] = $this->model_main->getdata_random_scpkaryawan('SCP KARYAWAN', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpkaryawan_randomchecktampil.php',$data);
		$this->load->view('footer.php');
	}

	public function random_scpkaryawan()
	{		
		$data['lokasi'] = "SCP KARYAWAN";
		$data['sform'] = "karyawan";
		$this->load->view('header.php');
		$this->load->view('randomcheck/scpkaryawan_randomcheck.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtampil_scppos2()
	{
		if (isset($_POST['tglcari_rdorang'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdorang']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->set_userdata('teamrdorang',$team);
			$this->session->set_userdata('shiftrdorang',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdorang',$tgl);
			$this->session->unset_userdata('teamrdorang');
			$this->session->unset_userdata('shiftrdorang');
		}

		$data['title'] = "SCP POS OPERASIONAL 2"; 
		$data['random'] = $this->model_main->getdata_random_scppos2('SCP POS OPERASIONAL 2', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/scppos2_randomchecktampil.php',$data);
		$this->load->view('footer.php');
	}

	public function random_scppos2()
	{		
		$data['lokasi'] = "SCP POS OPERASIONAL 2";
		$data['sform'] = "karyawan";
		$this->load->view('header.php');
		$this->load->view('randomcheck/scppos2_randomcheck.php',$data);
		$this->load->view('footer.php');
	}

	public function random_insert()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['namapax'])){
			if (!empty($this->input->post('namapax'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_random();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						'idno' => $idno,
						'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'idkode'			=> $idkode						
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_random($dataq);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update_scptransit()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_scptransit($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update_scpinter()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_scpinter($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update_scpkaryawan()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namakar' => $this->input->post('namakar'),

						'instansi' 			=> (!empty($this->input->post('instansi'))) ? $this->input->post('instansi') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksakar' 	=> $this->input->post('mtdperiksakar'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_scpkaryawan($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update_scppos2()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namakar' => $this->input->post('namakar'),

						'instansi' 			=> (!empty($this->input->post('instansi'))) ? $this->input->post('instansi') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksakar' 	=> $this->input->post('mtdperiksakar'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_scppos2($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS OPERASIONAL 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_update_bagasiislan1()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namapemilik' 	=> $this->input->post('namapax'),
						'nopen'			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL, 
						'jns_bagasi' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 

						'no_claim' 	=> $this->input->post('no_claim'), 
						
						'mtd_periksabagasi' => $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'id_users'			=> $this->session->userdata('iduser'),
						'team'				=> $this->input->post('team'), 
						'shift'				=> $this->input->post('shift'),
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_bagasiislan1($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS OPERASIONAL 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP I (ISLAND I)") {
            		redirect('main/randomtampil_bagasi1');		
            	} else if ($lokasi=="SCP I (ISLAND II)") {
            		redirect('main/randomtampil_bagasi2');		
            	}
			}
		}
	}

	public function random_update_bagasiisland2()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['idno'])){
			if (!empty($this->input->post('idno'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$idno = $this->input->post('idno');
				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                // $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						// 'idno' => $idno,
						// 'tanggal' => $tglq,
						'namapemilik' 	=> $this->input->post('namapax'),
						'nopen'			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL, 
						'jns_bagasi' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 

						'no_claim' 	=> $this->input->post('no_claim'), 
						
						'mtd_periksabagasi' => $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'id_users'			=> $this->session->userdata('iduser'),
						'team'				=> $this->input->post('team'), 
						'shift'				=> $this->input->post('shift'),
						// 'idkode'			=> $idkode						
					);   
					
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->update_random_bagasiisland2($dataq, $idno);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS OPERASIONAL 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP I (ISLAND I)") {
            		redirect('main/randomtampil_bagasi1');		
            	} else if ($lokasi=="SCP I (ISLAND II)") {
            		redirect('main/randomtampil_bagasi2');		
            	}
			}
		}
	}

	public function random_delete()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
				// $where = array('idno' => $idno);
				// echo $idno."<br>";	
				// print_r($dataq);
				// die();
            	$this->model_main->delete_random($idno);
            	// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }
			
	}
	
	public function random_delete_scptransit()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_scptransit($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_delete_scpinter()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_scpinter($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_delete_scpkaryawan()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_scpkaryawan($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_delete_scppos2()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_scppos2($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_delete_bagasiislan1()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_bagasiislan1($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_delete_bagasiisland2()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		$idno = $_GET['idno'];
        $this->model_main->delete_random_bagasiisland2($idno);
		// if ($lokasi=="SCP II") {
            	// 	redirect('main/randomtampil_scp2');		
            	// } else if ($lokasi=="SCP TRANSIT") {
            	// 	redirect('main/randomtampil_scptransit');		
            	// } else if ($lokasi=="SCP INTERNASIONAL") {
            	// 	redirect('main/randomtampil_scpinter');		
            	// } else if ($lokasi=="SCP KARYAWAN") {
            	// 	redirect('main/randomtampil_scpkaryawan');		
            	// } else if ($lokasi=="SCP POS2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// } else if ($lokasi=="SCP POS 2") {
            	// 	redirect('main/randomtampil_scppos2');		
            	// }	
	}

	public function random_insert_scptransit()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['namapax'])){
			if (!empty($this->input->post('namapax'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_scptransit();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						'idno' => $idno,
						'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'idkode'			=> $idkode						
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_random_scptransit($dataq);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_insert_scpinter()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['namapax'])){
			if (!empty($this->input->post('namapax'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_scpinter();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						'idno' => $idno,
						'tanggal' => $tglq,
						'namapax' => $this->input->post('namapax'),

						'nopen' 			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksapax' 	=> $this->input->post('mtdperiksapax'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'idkode'			=> $idkode						
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_random_scpinter($dataq);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_insert_scpkaryawan()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['namakar'])){
			if (!empty($this->input->post('namakar'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_scpkaryawan();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						'idno' => $idno,
						'tanggal' => $tglq,
						'namakar' => $this->input->post('namakar'),

						'instansi' 			=> (!empty($this->input->post('instansi'))) ? $this->input->post('instansi') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksakar' 	=> $this->input->post('mtdperiksakar'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'idkode'			=> $idkode						
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_random_scpkaryawan($dataq);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	public function random_insert_scppos2()	// untuk simpan data RC (random check) orang dan barang di SCP 2, trnasit, inter, karyawan dan pos 2
	{
		if(isset($_POST['namakar'])){
			if (!empty($this->input->post('namakar'))){
				date_default_timezone_set("Asia/Makassar");
				$tglq = date('Y-m-d H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_scppos2();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

				$dataq = array(
						'idno' => $idno,
						'tanggal' => $tglq,
						'namakar' => $this->input->post('namakar'),

						'instansi' 			=> (!empty($this->input->post('instansi'))) ? $this->input->post('instansi') : NULL,
						'team'				=> (!empty($this->input->post('team'))) ? $this->input->post('team') : NULL,
						'shift'				=> (!empty($this->input->post('shift'))) ? $this->input->post('shift') : NULL,
						'jenisbrg_bawaan' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 
						'mtd_periksakar' 	=> $this->input->post('mtdperiksakar'), 
						'mtd_periksabrg' 	=> $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'id_users'			=> $this->session->userdata('iduser'),
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'idkode'			=> $idkode						
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_random_scppos2($dataq);
            	if ($lokasi=="SCP II") {
            		redirect('main/randomtampil_scp2');		
            	} else if ($lokasi=="SCP TRANSIT") {
            		redirect('main/randomtampil_scptransit');		
            	} else if ($lokasi=="SCP INTERNASIONAL") {
            		redirect('main/randomtampil_scpinter');		
            	} else if ($lokasi=="SCP KARYAWAN") {
            		redirect('main/randomtampil_scpkaryawan');		
            	} else if ($lokasi=="SCP POS OPERASIONAL 2") {
            		redirect('main/randomtampil_scppos2');		
            	} else if ($lokasi=="SCP POS 2") {
            		redirect('main/randomtampil_scppos2');		
            	}
			}
		}
	}

	function randombagasi_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdbagasi = $this->input->post('tglcari_rdbagasi');
			if($tglcari_rdbagasi){
				$this->session->set_userdata('tglcari_rdbagasi',$tglcari_rdbagasi);
				if (isset($_POST['rdbagasi'])) {
					redirect('main/randomtampil_bagasi1');
				}
			}
		// }
	}

	function randombagasi2_search()
	{
		// if(!$this->session->userdata('usr_id'))
		// {
		// 	redirect('login');
		// }
		// else{
			$tglcari_rdbagasi = $this->input->post('tglcari_rdbagasi');
			if($tglcari_rdbagasi){
				$this->session->set_userdata('tglcari_rdbagasi',$tglcari_rdbagasi);
				if (isset($_POST['rdbagasi'])) {
					redirect('main/randomtampil_bagasi2');
				}
			}
		// }
	}

	public function randomtampil_bagasi1()
	{
		/*$tgl = NULL;
		if (isset($_POST['reset'])){
			$this->session->unset_userdata('tglcari_rdbagasi');
			$tgl = NULL;
		} else {
			// $tgl = $this->session->userdata('tglcari_rdbagasi');
			$tgl = date('Y-m-d', strtotime($this->session->userdata('tglcari_rdbagasi')));
		}
		*/

		if (isset($_POST['tglcari_rdbagasi'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdbagasi']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdbagasi',$tgl);
			$this->session->set_userdata('teamrdbagasi',$team);
			$this->session->set_userdata('shiftrdbagasi',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdbagasi',$tgl);
			$this->session->unset_userdata('teamrdbagasi');
			$this->session->unset_userdata('shiftrdbagasi');
		}

		$data['title'] = "SCP I (ISLAND I)"; 
		$data['random'] = $this->model_main->getdata_randombagasi('SCP I (ISLAND I)', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiislan1_rctampil.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtampil_bagasi2()
	{
		/*$tgl = NULL;
		if (isset($_POST['reset'])){
			$this->session->unset_userdata('tglcari_rdbagasi');
			$tgl = NULL;
		} else {
			// $tgl = $this->session->userdata('tglcari_rdbagasi');
			$tgl = date('Y-m-d', strtotime($this->session->userdata('tglcari_rdbagasi')));
		}
		*/

		if (isset($_POST['tglcari_rdbagasi'])){			
			$tgl = date('Y-m-d', strtotime($_POST['tglcari_rdbagasi']));
			$team = $_POST['team'];
			$shift = $_POST['shift'];
			
			$this->session->set_userdata('tglrdbagasi',$tgl);
			$this->session->set_userdata('teamrdbagasi',$team);
			$this->session->set_userdata('shiftrdbagasi',$shift);
		} else {
			$tgl = date('Y-m-d');
			$team = 'ALL';
			$shift = 'ALL';
			$this->session->set_userdata('tglrdbagasi',$tgl);
			$this->session->unset_userdata('teamrdbagasi');
			$this->session->unset_userdata('shiftrdbagasi');
		}

		$data['title'] = "SCP I (ISLAND II)"; 
		$data['random'] = $this->model_main->getdata_randombagasi2('SCP I (ISLAND II)', $tgl, $team, $shift);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiisland2_rctampil.php',$data);
		$this->load->view('footer.php');
	}

	public function randomtabel_bagasi1()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randombagasi($idkode);
		$data['userq'] = $this->model_main->get_userapprov($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	}

	public function randomtabel_bagasi2()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randombagasi2($idkode);
		$data['userq'] = $this->model_main->get_userapprov_bagasi2($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/bagasiisland2_rctable.php', $data);		
	}

	public function randomtabel_scp2()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randomorgbrg($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/scp2_rctable.php', $data);		
	}

	public function randomtabel_scptransit()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randomorgbrg_transit($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_transit($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/scptransit_rctable.php', $data);		
	}

	public function randomtabel_scpinter()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randomorgbrg_inter($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_inter($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/scptransit_rctable.php', $data);		
	}

	public function randomtabel_scpkaryawan()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randomorgbrg_karyawan($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_karyawan($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/scpkaryawan_rctable.php', $data);		
	}

	public function randomtabel_scppos2()
	{
		$idkode = $_GET['idkode'];
		$data['random'] = $this->model_main->view_randomorgbrg_scppos2($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_scppos2($idkode);
		$data['idkode'] = $idkode;
		
		$this->load->view('randomcheck/scppos2_rctable.php', $data);		
	}

	public function rcbagasi1_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov($idkode);
		
		$this->load->view('randomcheck/bagasiislan1_rctable_konfirm.php', $data);		
	}

	public function rcbagasi2_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_bagasi2($idkode);
		
		$this->load->view('randomcheck/bagasiisland2_rctable_konfirm.php', $data);		
	}

	public function rcscp2_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_orgbrg($idkode);
		
		$this->load->view('randomcheck/scp2_rctable_konfirm.php', $data);		
	}

	public function rcscptransit_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_transit($idkode);
		
		$this->load->view('randomcheck/scptransit_rctable_konfirm.php', $data);		
	}

	public function rcscpinter_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_inter($idkode);
		
		$this->load->view('randomcheck/scpinter_rctable_konfirm.php', $data);		
	}

	public function rcscpkaryawan_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_karyawan($idkode);
		
		$this->load->view('randomcheck/scpkaryawan_rctable_konfirm.php', $data);		
	}

	public function rcscppos2_konfirm()
	{
		$idkode = $_GET['idkode'];
		$data['idkode'] = $idkode;
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_scppos2($idkode);
		
		$this->load->view('randomcheck/scppos2_rctable_konfirm.php', $data);		
	}

	public function random_bagasi1()
	{		
		$data['lokasi'] = "SCP I (ISLAND I)";
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiislan1_rc.php',$data);
		$this->load->view('footer.php');
	}	

	public function random_bagasi2()
	{		
		$data['lokasi'] = "SCP I (ISLAND II)";
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiisland2_rc.php',$data);
		$this->load->view('footer.php');
	}

	public function randombagasi_insert()	// untuk simpan data RC (random check) Bagasi tercatat di SCP I island 1 dan 2
	{
		if(isset($_POST['namapax'])){
			if (!empty($this->input->post('namapax'))){
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_randombagasi();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

               
				$dataq = array(
						'idno' 			=> $idno,
						'tanggal' 		=> $tglq,
						'namapemilik' 	=> $this->input->post('namapax'),
						'nopen'			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL, 
						'jns_bagasi' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 

						'no_claim' 	=> $this->input->post('no_claim'), 
						
						'mtd_periksabagasi' => $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'id_users'			=> $this->session->userdata('iduser'),
						'team'				=> $this->input->post('team'), 
						'shift'				=> $this->input->post('shift'),
						'idkode'			=> $idkode
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_randombagasi($dataq);

				$this->session->set_flashdata('success','tambahq');

            	if ($lokasi=="SCP I (ISLAND I)") {
            		redirect('main/randomtampil_bagasi1');		
            	} else if ($lokasi=="SCP I (ISLAND II)") {
            		redirect('main/randomtampil_scptransit');		
            	}
			}
		}
	}

	public function randombagasi2_insert()	// untuk simpan data RC (random check) Bagasi tercatat di SCP I island 1 dan 2
	{
		if(isset($_POST['namapax'])){
			if (!empty($this->input->post('namapax'))){
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_randombagasi2();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$tglq = date('Y-m-d', strtotime($_POST['tanggal'])); // ." ".$jam;
				$tglkd = date('Ymd', strtotime($_POST['tanggal']));
				$lokasi = $this->input->post('lokasi');
				$team = $this->input->post('team');
				$shift = $this->input->post('shift');

				if ($team == "ALPHA") $stteam="A";
                else if ($team == "BRAVO") $stteam="B";
                else if ($team == "CHARLIE") $stteam="C";
                else if ($team == "DELTA") $stteam="D";
                else $stteam="E";

                if ($shift == "PAGI") $stshift="P";
                else if ($shift == "SIANG") $stshift="S";
                else $stshift="M";

                $idkode = $stteam.$stshift.$tglkd;

               
				$dataq = array(
						'idno' 			=> $idno,
						'tanggal' 		=> $tglq,
						'namapemilik' 	=> $this->input->post('namapax'),
						'nopen'			=> (!empty($this->input->post('nopen'))) ? $this->input->post('nopen') : NULL, 
						'jns_bagasi' 	=> (!empty($this->input->post('jenisbrg_bawaan'))) ? $this->input->post('jenisbrg_bawaan') : NULL, 

						'no_claim' 	=> $this->input->post('no_claim'), 
						
						'mtd_periksabagasi' => $this->input->post('mtdperiksabrg'), 
						'personil_pemeriksa'=> (!empty($this->input->post('personil_pemeriksa'))) ? $this->input->post('personil_pemeriksa') : NULL, 
						'hasil_temuan' 		=> (!empty($this->input->post('hasil_temuan'))) ? $this->input->post('hasil_temuan') : NULL, 
						'lokasi'	  		=> $lokasi,
						'jam_periksa' 		=> (!empty($this->input->post('jam'))) ? $this->input->post('jam') : NULL,
						'id_users'			=> $this->session->userdata('iduser'),
						'team'				=> $this->input->post('team'), 
						'shift'				=> $this->input->post('shift'),
						'idkode'			=> $idkode
					);   
					
				// print_r($dataq);
            	$this->model_main->insert_randombagasi2($dataq);

				$this->session->set_flashdata('success','tambahq');

            	if ($lokasi=="SCP I (ISLAND I)") {
            		redirect('main/randomtampil_bagasi1');		
            	} else if ($lokasi=="SCP I (ISLAND II)") {
            		redirect('main/randomtampil_bagasi2');		
            	}
			}
		}
	}

	public function approvform_orgbrg_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_orgbrg();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_orgbrg($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randomorang($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}

            	redirect('main/randomtampil_scp2');		
			}
		}
	}

	public function approvform_scptransit_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_orgbrg_scptransit();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_scptransit($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randomorang_transit($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_scptransit');		
			}
		}
	}

	public function approvform_scpinter_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_orgbrg_scpinter();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_scpinter($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randomorang_inter($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_scpinter');		
			}
		}
	}

	public function approvform_scpkaryawan_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_orgbrg_scpkaryawan();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_scpkaryawan($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randomorang_karyawan($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_scpkaryawan');		
			}
		}
	}

	public function approvform_scppos2_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_orgbrg_scppos2();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_scppos2($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randomorang_scppos2($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_scppos2');		
			}
		}
	}

	public function approvform_insert()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randombagasi($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_bagasi1');		
			}
		}
	}

	public function approvform_insert_bagasi2()
	{
		if(isset($_POST['sqleader'])){
			if (!empty($this->input->post('sqleader'))){
				
				date_default_timezone_set("Asia/Makassar");
				$jam = date('H:i:s');

				$gmax_idno = $this->model_main->gmax_idno_approval_bagasi2();
				if (!empty($gmax_idno)){
					foreach ($gmax_idno as $s) { 
						if ($s->idno=='') {
							$idno=1;
						}else {
					      $idno = $s->idno+1; 
					  	}
				    }
				}else{ $idno=1;}

				$lokasi = $this->input->post('lokasi');

				// echo "apaji";
				// exit();

				// idno, tgl_request, user_request, nama_form, tgl_inputform, st_approv01, iduser_approv01, tgl_approv01, keterangan, team, shift, st_approv02, iduser_approv02, tgl_approv02, idkode
				// 0 = proses approv
				// 1 = diterima
				// 2 = ditolak

				$idkode = $this->input->post('id_kode');
				$tgl_request = date('Y-m-d H:i:s');
				$tglq = date('Y-m-d', strtotime($_POST['tgl_form']));
				// $tglq = $this->input->post('tgl_form');

				$dataq = array(
						'idno' 				=> $idno,
						'tgl_request' 		=> $tgl_request,
						'user_request' 		=> $this->session->userdata('namaq'),
						'nama_form'			=> $lokasi, 
						'tgl_inputform' 	=> $tglq,
						'st_approv01' 		=> 0,
						'iduser_approv01'	=> $this->input->post('sqleader'),
						// 'tgl_approv01' 		=> date('Y-m-d'),
						'team'				=> $this->input->post('team'),
						'shift'				=> $this->input->post('shift'),
						'st_approv02' 		=> 0,
						'iduser_approv02'	=> $this->input->post('supervisor'),
						'idkode' 			=> $idkode
					);   
					
				$add1 = $this->model_main->insert_approvform_bagasi2($dataq);

            	$data = array(
						'st_approv01' => 0,
						'st_approv02' => 0
					);

            	// print_r($data);
            	// echo "</br>";

				$where = array(
						// 'date(tanggal)' => date('Y-m-d', strtotime($_POST['tgl_form'])),
						'idkode'	=> $idkode
						// 'team'		=> $this->session->userdata('team'),
						// 'shift'		=> $this->session->userdata('shift')
					);  

				// print_r($where);
				// exit();

            	$add2 = $this->model_main->update_randombagasi2($where,$data);

            	if (($add1) && ($add2)) {
            		$this->session->set_flashdata('success','error_app');
            	} else {
            		$this->session->set_flashdata('success','approv');
            	}
            	

            	redirect('main/randomtampil_bagasi2');		
			}
		}
	}

	public function verifikasi_rcbagasi1_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP I (ISLAND I)"; 
		$data['ver_rcbagasi'] = $this->model_main->getverifikasi_rcbagasi('SCP I (ISLAND I)',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiislan1rc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	public function verifikasi_rcbagasi2_tampil()
	{
		$tgl = date('Y-m-d');

		$team = $this->session->userdata('team');
		$shift = $this->session->userdata('shift');

		$data['title'] = "SCP I (ISLAND II)"; 
		$data['ver_rcbagasi2'] = $this->model_main->getverifikasi_rcbagasi2('SCP I (ISLAND II)',$shift, $team, $tgl);
		$this->load->view('header.php');
		$this->load->view('randomcheck/bagasiisland2rc_verifikasi.php',$data);
		$this->load->view('footer.php');
	}

	function verifikasi_approv01(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv01($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randombagasi($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv01($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randombagasi($whereq, $dataq);
        }


		redirect('main/verifikasi_rcbagasi1_tampil');
    }

	function verifikasi_approv_bagasi2(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_bagasi2($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randombagasi2($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_bagasi2($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randombagasi2($whereq, $dataq);
        }


		redirect('main/verifikasi_rcbagasi2_tampil');
    }

	function verifikasi_approv_scp2(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approvorgbrg($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approvorgbrg($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang($whereq, $dataq);
        }


		redirect('main/verifikasi_rcscp2_tampil');
    }

	function verifikasi_approv_scptransit(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_transit($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_transit($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_transit($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_transit($whereq, $dataq);
        }


		redirect('main/verifikasi_rcscptransit_tampil');
    }

	function verifikasi_approv_scpinter(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_inter($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_inter($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_inter($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_inter($whereq, $dataq);
        }


		redirect('main/verifikasi_rcscpinter_tampil');
    }

	function verifikasi_approv_scpkaryawan(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_karyawan($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_karyawan($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_karyawan($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_karyawan($whereq, $dataq);
        }


		redirect('main/verifikasi_rcscpkaryawan_tampil');
    }

	function verifikasi_approv_scppos2(){        
        $idkode = $this->input->post('id_kode');
		 		$konfirm = $this->input->post('konfirm');
		 		$catatan = $this->input->post('catatan');


        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/barcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name = $this->session->userdata('usernameq').$idkode.".png"; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $this->session->userdata('usernameq').$idkode; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

 		

 				// update data di tabel form_approval
        if ($this->input->post('iduser_approv01') == $this->session->userdata('iduserq')) {


        	$data = array(
        		'st_approv01' 		=> $konfirm,
        		'tgl_approv01' 		=> date('Y-m-d'),
        		'ket_approv01'		=> $catatan,
        		'barcode_approv01'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_scppos2($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv01' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_scppos2($whereq, $dataq);
        }

        if ($this->input->post('iduser_approv02') == $this->session->userdata('iduserq')) {
        	$data = array(
        		'st_approv02' 		=> $konfirm,
        		'tgl_approv02' 		=> date('Y-m-d'),
        		'ket_approv02'		=> $catatan,
        		'barcode_approv02'	=> $image_name
        		);   		
        	$where = array(
        		'idkode'	=> $idkode
        		);  
        	$this->model_main->update_approv_scppos2($where, $data);

					// update data di tabel randomcheck_bagasi
        	$dataq = array(
        		'st_approv02' 		=> $konfirm
        		);   			
        	$whereq = array(
        		'idkode'	=> $idkode
        		);  

        	$this->model_main->update_randomorang_scppos2($whereq, $dataq);
        }


		redirect('main/verifikasi_rcscppos2_tampil');
    }

    public function print_bagasi()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randombagasi($idkode);
		$data['userq'] = $this->model_main->get_userapprov($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/bagasiislan1_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}

	public function print_bagasi2()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randombagasi2($idkode);
		$data['userq'] = $this->model_main->get_userapprov_bagasi2($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/bagasiisland2_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}

	public function print_orgbrg()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randomorgbrg($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg($idkode);
		$data['ver_rcscp2'] = $this->model_main->getverifikasi_rcscp2_print('SCP II', $idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/scp2_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);


		// $idkode = $_GET['idkode'];
		// $data['random'] = $this->model_main->view_randomorgbrg($idkode);
		// $data['userq'] = $this->model_main->get_userapprov_orgbrg($idkode);
		// $data['idkode'] = $idkode;

		// $dataq = [
		// 	'table'       => $this->load->view('randomcheck/scp2_rctable.php', $data, TRUE)
		//   ];
		
		// $this->load->view('printq', $dataq);	


		// $idkode = $_GET['idkode'];
		// $data['idkode'] = $idkode;
		// $data['userq'] = $this->model_main->get_userapprov_orgbrg($idkode);
		
		// $this->load->view('randomcheck/scp2_rctable_konfirm.php', $data);	
	}

	public function print_scptransit()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randomorgbrg_transit($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_transit($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/scptransit_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}

	public function print_scpinter()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randomorgbrg_inter($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_inter($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/scpinter_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}

	public function print_scpkaryawan()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randomorgbrg_karyawan($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_karyawan($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/scpkaryawan_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}

	public function print_scppos2()
	  {
	    $idkode = $_GET['idkode'];
	    $data['random'] = $this->model_main->view_randomorgbrg_scppos2($idkode);
		$data['userq'] = $this->model_main->get_userapprov_orgbrg_scppos2($idkode);
		$data['idkode'] = $idkode;

	    $dataq = [
	      'table'       => $this->load->view('randomcheck/scpkaryawan_rctable.php', $data, TRUE)
	    ];

	    // $this->load->view('randomcheck/bagasiislan1_rctable.php', $data);		
	    $this->load->view('printq',$dataq);
	}


	function buatbarcode(){
        
        // echo "masukjii</br>";
        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name='coba.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = 'Kasrial Budi 123'; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
 
        // $this->mahasiswa_model->simpan_mahasiswa($nim,$nama,$prodi,$image_name); //simpan ke database
        // redirect('v_barcode'); //redirect ke mahasiswa usai simpan data
        $this->load->view('header.php');
		$this->load->view('v_barcode');
		$this->load->view('footer.php');
    }

    function cobaalert(){
    	$this->load->view('header.php');
		$this->load->view('v_alert');
		$this->load->view('footer.php');
    }

    function alerttampil(){
    	// echo "masukjii";
    	
    	$this->session->set_flashdata('success','tambahq');    	

    	redirect('main/cobaalert');

    	// echo "adji ".$this->session->flashdata('success');
    }
    
}
