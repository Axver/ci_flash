<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data=$this->home_model->GetBarang();
		$laptop=$this->home_model->GetKomputer();
		$aksesoris=$this->home_model->GetSUkucadang();
		$pendapatan=$this->home_model->PenHarian();
		$jumlah_harian=$this->home_model->HitungHarian();
		$view_array=array(
			'modal'=>$this->load->view('modal',array('laptop'=>$laptop),true),
			'left_nav'=>$this->load->view('left_nav',array(),true),
			'suku_cadang'=>$this->load->view('suku_cadang',array('suku_cadang'=>$aksesoris),true),
			'pendapatan_harian'=>$pendapatan,
			'jumlah_harian'=>$jumlah_harian
		);
		// var_dump($view_array);
		$this->load->view('home',$view_array);
	}
}
