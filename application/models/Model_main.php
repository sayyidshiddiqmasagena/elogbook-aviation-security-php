<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_main extends CI_Model {
	public function __construct() {
		parent::__construct();		
	}

	public function getdata_random($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randomidno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randomscptransit_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_transit');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randomscpinter_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_inter');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randomscpkaryawan_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_karyawan');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randomscppos2_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_scppos2');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randombagasiislan1_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randombagasiisland2_idno($idno)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi_island2');
		$this->db->where('idno',$idno);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_random_scptransit($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_transit');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_random_scpinter($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_inter');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_random_scpkaryawan($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_karyawan');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_random_scppos2($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_scppos2');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function insert_random($dataq)
	{
		$this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_orgbrg',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_scptransit($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_orgbrg_transit',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_scpinter($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_orgbrg_inter',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_scpkaryawan($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_orgbrg_karyawan',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_scppos2($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_orgbrg_scppos2',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_bagasiislan1($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_bagasi',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function update_random_bagasiisland2($dataq,$idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->update('randomcheck_bagasi_island2',$dataq);
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function delete_random($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_orgbrg');
		// $this->db->insert('randomcheck_orgbrg',$dataq);
	}

	function delete_random_scptransit($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_orgbrg_transit');
	}

	function delete_random_scpinter($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_orgbrg_inter');
	}

	function delete_random_scpkaryawan($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_orgbrg_karyawan');
	}

	function delete_random_scppos2($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_orgbrg_scppos2');
	}

	function delete_random_bagasiislan1($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_bagasi');
	}

	function delete_random_bagasiisland2($idno)
	{	
		$this->db->where('idno', $idno);
		$this->db->delete('randomcheck_bagasi_island2');
	}

	public function insert_random_scptransit($dataq)
	{
		$this->db->insert('randomcheck_orgbrg_transit',$dataq);
	}

	public function insert_random_scpinter($dataq)
	{
		$this->db->insert('randomcheck_orgbrg_inter',$dataq);
	}

	public function insert_random_scpkaryawan($dataq)
	{
		$this->db->insert('randomcheck_orgbrg_karyawan',$dataq);
	}

	public function insert_random_scppos2($dataq)
	{
		$this->db->insert('randomcheck_orgbrg_scppos2',$dataq);
	}

	public function gmax_idno_random()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_orgbrg');
		return $hasil->result();
	}

	public function gmax_idno_scptransit()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_orgbrg_transit');
		return $hasil->result();
	}

	public function gmax_idno_scpinter()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_orgbrg_inter');
		return $hasil->result();
	}

	public function gmax_idno_scpkaryawan()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_orgbrg_karyawan');
		return $hasil->result();
	}

	public function gmax_idno_scppos2()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_orgbrg_scppos2');
		return $hasil->result();
	}

	public function getdata_randombagasi($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getdata_randombagasi2($lokasi, $tgl, $team, $shift)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi_island2');
		$this->db->where('lokasi',$lokasi);
		$this->db->where('date(tanggal)',$tgl);
		if ($team<>'ALL') {
			$this->db->where('team',$team);
		}
		if ($shift<>'ALL') {
			$this->db->where('shift',$shift);
		}
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function insert_randombagasi($dataq)
	{
		$this->db->insert('randomcheck_bagasi',$dataq);
	}

	public function insert_randombagasi2($dataq)
	{
		$this->db->insert('randomcheck_bagasi_island2',$dataq);
	}

	public function gmax_idno_randombagasi()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_bagasi');
		return $hasil->result();
	}

	public function gmax_idno_randombagasi2()
	{
		$this->db->select_max('idno');
		$hasil = $this->db->get('randomcheck_bagasi_island2');
		return $hasil->result();
	}

	public function getuser($unit){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('unit',$unit);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function gmax_idno_approval(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval');
		return $hasil->result();	
	}

	public function gmax_idno_approval_bagasi2(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_bagasi_island2');
		return $hasil->result();	
	}

	public function gmax_idno_approval_orgbrg(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_orgbrg');
		return $hasil->result();	
	}

	public function gmax_idno_approval_orgbrg_scptransit(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_orgbrg_transit');
		return $hasil->result();	
	}

	public function gmax_idno_approval_orgbrg_scpinter(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_orgbrg_inter');
		return $hasil->result();	
	}

	public function gmax_idno_approval_orgbrg_scpkaryawan(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_orgbrg_karyawan');
		return $hasil->result();	
	}

	public function gmax_idno_approval_orgbrg_scppos2(){
		$this->db->select_max('idno');
		$hasil = $this->db->get('form_approval_orgbrg_scppos2');
		return $hasil->result();	
	}

	public function insert_approvform($dataq){
		$this->db->insert('form_approval', $dataq);
	}

	public function insert_approvform_bagasi2($dataq){
		$this->db->insert('form_approval_bagasi_island2', $dataq);
	}

	public function insert_approvform_orgbrg($dataq){
		$this->db->insert('form_approval_orgbrg', $dataq);
	}

	public function insert_approvform_scptransit($dataq){
		$this->db->insert('form_approval_orgbrg_transit', $dataq);
	}

	public function insert_approvform_scpinter($dataq){
		$this->db->insert('form_approval_orgbrg_inter', $dataq);
	}

	public function insert_approvform_scpkaryawan($dataq){
		$this->db->insert('form_approval_orgbrg_karyawan', $dataq);
	}

	public function insert_approvform_scppos2($dataq){
		$this->db->insert('form_approval_orgbrg_scppos2', $dataq);
	}

	function update_randombagasi($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_bagasi',$data);
	}

	function update_randombagasi2($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_bagasi_island2',$data);
	}
	
	function update_randomorang($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_orgbrg',$data);
	}
	
	function update_randomorang_transit($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_orgbrg_transit',$data);
	}

	function update_randomorang_inter($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_orgbrg_inter',$data);
	}

	function update_randomorang_karyawan($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_orgbrg_karyawan',$data);
	}

	function update_randomorang_scppos2($where,$data){
		$this->db->where($where);
		$this->db->update('randomcheck_orgbrg_scppos2',$data);
	}


	public function getverifikasi_rcbagasi($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}	

	public function getverifikasi_rcbagasi2($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_bagasi_island2');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}
	

	public function getverifikasi_rcscp2($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_orgbrg');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}
	
	public function getverifikasi_rcscptransit($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_orgbrg_transit');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}
	
	public function getverifikasi_rcscpinter($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_orgbrg_inter');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getverifikasi_rcscpkaryawan($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_orgbrg_karyawan');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function getverifikasi_rcscppos2($lokasi, $shift, $team, $tgl)
	{
		$this->db->select('*');
		$this->db->from('form_approval_orgbrg_scppos2');
		$this->db->where('nama_form',$lokasi);
		// $this->db->where('team',$team);
		// $this->db->where('shift',$shift);
		// $this->db->where('tgl_inputform',$tgl);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	function update_approv01($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval',$data);
	}
	
	function update_approv_bagasi2($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_bagasi_island2',$data);
	}

	function update_approvorgbrg($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_orgbrg',$data);
	}

	function update_approv_transit($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_orgbrg_transit',$data);
	}

	function update_approv_inter($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_orgbrg_inter',$data);
	}

	function update_approv_karyawan($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_orgbrg_karyawan',$data);
	}

	function update_approv_scppos2($where,$data){
		$this->db->where($where);
		$this->db->update('form_approval_orgbrg_scppos2',$data);
	}


	public function view_randombagasi($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randombagasi2($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_bagasi_island2');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randomorgbrg($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randomorgbrg_transit($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_transit');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randomorgbrg_inter($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_inter');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randomorgbrg_karyawan($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_karyawan');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function view_randomorgbrg_scppos2($idkode)
	{
		$this->db->select('*');
		$this->db->from('randomcheck_orgbrg_scppos2');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	// SELECT iduser_approv01, (SELECT nama FROM public.users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM public.users where id_users=iduser_approv02) as nama_approv02, idkode FROM public.form_approval;

	public function get_userapprov($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_bagasi2($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_bagasi_island2');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_orgbrg($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_orgbrg');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_orgbrg_transit($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_orgbrg_transit');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_orgbrg_inter($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_orgbrg_inter');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_orgbrg_karyawan($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_orgbrg_karyawan');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

	public function get_userapprov_orgbrg_scppos2($idkode)
	{
		$this->db->select('iduser_approv01, (SELECT nama FROM users where id_users=iduser_approv01) as nama_approv01, iduser_approv02, (SELECT nama FROM users where id_users=iduser_approv02) as nama_approv02, barcode_approv01, barcode_approv02');
		$this->db->from('form_approval_orgbrg_scppos2');
		$this->db->where('idkode',$idkode);
		$hasil = $this->db->get();
		return $hasil->result();
	}

}