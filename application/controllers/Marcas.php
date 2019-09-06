<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Marcas_Models");
	}

	public function index()
	{
		$data = array('marcas' =>  $this->Marcas_Models->getMarcas(), );
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Marcas/list',$data);
		$this->load->view('plugins_footer');

	}
	public function add()
	{
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Marcas/add');
		$this->load->view('plugins_footer');

	}
	public function store()
	{
		$descripcion_marca = $this->input->post("descripcion_marca");
		$estado_marca = $this->input->post("estado_marca");
		//echo $descripcion_categoria." ".$estado_categoria;
		$data = array(
			'descripcion_marca' => $descripcion_marca,
			'estado_marca' => $estado_marca,
		);

		if ($this->Marcas_Models->save($data)) {
			redirect(base_url()."Marcas");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Marcas/add");
		}

	}
	public function edit($id_marca){
		$data = array(
			'marca' => $this->Marcas_Models->getMarca($id_marca), 
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Marcas/edit',$data);
		$this->load->view('plugins_footer');
	}
	public function update(){
		$idMarca = $this->input->post("idMarca");
		$descripcion_marca= $this->input->post("descripcion_marca");
		$estado_marca = $this->input->post("estado_marca");

		$data = array(
			'descripcion_marca' => $descripcion_marca,
			'estado_marca' => $estado_marca,
		);
		if ($this->Marcas_Models->update($idMarca,$data)) {
			redirect(base_url()."Marcas");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Marcas/edit/".$idMarca);
		}
	}
	public function view($id_marca){
		$data = array(
			'marca' => $this->Marcas_Models->getMarca($id_marca), 
		);
		$this->load->view("Productos/Marcas/view",$data);
	}

	public function delete($id_marca){
		$data = array(
			'estado_marca' => "0" , 
		);
		$this->Marcas_Models->update($id_marca,$data);
		echo "Marcas";
	}
} 