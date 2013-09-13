<?php
class ItemModel extends CI_Model{

	// table name
	var $item = "item"; 
	
	// field names
	var $item_id = "item_id";
	var $item_name = "item_name";
	var $category_id = "category_id";
	var $category_name = "category_name";
	var $item_description = "item_description";
	
	function __construct(){
		parent::__construct();
		$this->load->database();

	}
	/*
	    Function to retrieve items for given category id
		parameter: integer | Id for the category
		return:	   array   | items under given category
	*/
	function get_items($category_id){
		
		$query = $this->db->get_where($this->item, array($this->category_id => $category_id))->result_array();
		return($query);
	}
	
	
	/*
	    Function to retrieve all categories
		return:	   array   | category_id and category_name
	*/
	function get_category(){
		
		$this->db->select(array($this->category_name,$this->category_id));
		$this->db->group_by($this->category_id);
		$query = $this->db->get($this->item)->result_array();
		return($query);
	}
	
	
	
	
	

}


?>