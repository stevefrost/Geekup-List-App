<?php

class List_model extends CI_Model {
	
	function get_all_lists()
	{
		return $this->db->get('list')
						->result();
	}
	
	function get_list($id)
	{
		$result = $this->db->where('l.list_id', $id)
						   ->join('list_items li', 'l.list_id = li.list_id')
						   ->get('list l')
						   ->result();
  		$data = new stdClass();
		foreach($result as $r)
  		{
  			$data->name = $r->list_name;
  			$data->id = $r->list_id;
  			$data->items[$r->list_item_id]->name = $r->list_item_name;
  		}
  		return $data;
	}
	
	function add_new_list($name)
	{
		$this->db->insert('list', array('list_name' => $name));
		return $this->db->insert_id();
	}
	
	function add_list_items($list_id, $items)
	{
		
		foreach($items as $item)
		{
			if( ! empty($item))
			{
				$this->db->insert('list_items', array('list_item_name' => $item, 'list_id' => $list_id));
			}
		}
		return;
	}
}