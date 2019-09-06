<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_Models");
		$this->load->model("Categorias_Models");
		$this->load->model("Marcas_Models");

	}

	public function index()
	{
		$data = array('productos' =>  $this->Productos_Models->getProductos(), );
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Productos/list',$data);
		$this->load->view('plugins_footer');

	}
	public function add()
	{
		$data = array(
			'categorias' =>  $this->Categorias_Models->getCategorias(),
			'marcas' =>  $this->Marcas_Models->getMarcas(),

			 );
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Productos/add',$data);
		$this->load->view('plugins_footer');

	}
	public function store() // carga datos
	{
		$id = $this->input->post("id_producto");
		$detalle_producto = $this->input->post("detalle_producto");
		$codigo = $this->input->post("codigo");
		$precio_compra = $this->input->post("precio_compra");
		$precio_venta = $this->input->post("precio_venta");
		$stock_minimo = $this->input->post("stock_minimo");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");
		$marca = $this->input->post("marca");
		$estado = $this->input->post("estado");




		//echo $descripcion_categoria." ".$estado_categoria;
		$data = array(
			'detalle_producto' => $detalle_producto,
			'codigo' => $codigo,
			'precio_compra' => $precio_compra,
			'precio_venta' => $precio_venta,
			'stock_minimo' => $stock_minimo,
			'stock' => $stock,
			'id_categoria' => $categoria,
			'id_marca' => $marca,
			'estado' => "1",
		);

		if ($this->Productos_Models->save($data)) {
			redirect(base_url()."Productos");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo guardar la información");
			redirect(base_url()."Productos/add");
		}

	}
	public function edit($id_producto){
		$data = array(
			'producto' => $this->Productos_Models->getProducto($id_producto), 
			'categorias' => $this->Categorias_Models->getCategorias(), 
			'marcas' => $this->Marcas_Models->getMarcas(), 
		);
		$this->load->view('head');
		$this->load->view('menu_head');
		$this->load->view('menu_costado');
		$this->load->view('Productos/Productos/edit',$data);
		$this->load->view('plugins_footer');
	}
	public function update(){
		$id = $this->input->post("id");
		$detalle_producto = $this->input->post("detalle_producto");
		$codigo= $this->input->post("codigo");
		$precio_compra= $this->input->post("precio_compra");
		$precio_venta= $this->input->post("precio_venta");
		$stock_minimo= $this->input->post("stock_minimo");
		$stock= $this->input->post("stock");
		$categoria_id= $this->input->post("categoria_id");
		$id_marca= $this->input->post("id_marca");
		$estado= $this->input->post("estado");

		$data = array(
			'detalle_producto' => $detalle_producto,
			'estado' => $estado,
			'precio_compra' => $precio_compra,
			'precio_venta' => $precio_venta,
			'stock_minimo' => $stock_minimo,
			'stock' => $stock,
			'id_categoria' => $categoria,
			'id_marca' => $marca,
			'estado' => $estado,
		);
		if ($this->Productos_Models->update($id,$data)) {
			redirect(base_url()."Productos");
		}
		else{
			$this->session->set_flashdata("Error","No se pudo actualizar la información");
			redirect(base_url()."Productos/edit/".$id);
		}
	}
	public function view($id){
		$data = array(
			'producto' => $this->Productos_Models->getProducto($id), 
		);
		$this->load->view("Productos/Productos/view",$data);
	}

	public function delete($id){
		$data = array(
			'estado' => "0" , 
		);
		$this->Productos_Models->update($id,$data);
		echo "Productos";
	}
}