<?php
	class Item extends CI_Controller{
	function __construct(){
		
	parent::__construct();
	
	
	}
	
	function index(){
		$this->getItems(2);
	} 
	
	
	/* 
		get all the items and category under given categoryid and render it
		param: integer | category id
	*/
	function getItems($category_id){
		$this->load->model("itemModel");
		$items = $this->itemModel->get_items($category_id);
		$category = $this->itemModel->get_category();
		$this->load->view('itemView',array('items'=>$items,'category'=>$category));
	}
	
	}

?>
