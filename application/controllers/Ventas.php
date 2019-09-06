<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		}
    public function index(){

    	$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Ventas/list');
		$this->load->view('plugins_footer');
   		}
   	public function add()
	{
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('/Ventas/add');
		$this->load->view('plugins_footer');

	}
}

