<?php

class Serviceaddons extends CI_Model {
   
  function __construct() {
      parent::__construct();
      
   }
     
  public function CheckFieldExists($field,$value){
      $returnValue = false;
      if ($field !=''){
	      $query = $this->db->query("SELECT count(*) as count FROM `service_add_ons` WHERE `$field` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $count =  $row->count;
	         }
	     }
	     if ($count > 0){
	        $returnValue = true;   
	     }
      }
    return $returnValue;
  }
  
  public function Getservice_add_onsInfo($field1,$field2,$value){
      $v = "";
      if ($field2 !=''){
	      $query = $this->db->query("SELECT $field1 as val FROM `service_add_ons` WHERE `$field2` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $v =  $row->val;
	         }
	     }
      }
    return $v;
  }
   
 
 
  public function Getservice_add_onsInfoById($field,$add_on_id){
     $returnValue = ""; 
     
     if ($field !=''){
	     $query = $this->db->query("SELECT `$field` as val from service_add_ons where add_on_id='$add_on_id'");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $returnValue =  $row->val;
	         }
	       }
     }
      return $returnValue;
    }	
  
   
  function getservice_add_onsByAttribute($key,$value){
  	if ($key !=''){
  	 return  $this->db->query("SELECT * FROM `service_add_ons` where `$key` = '".$value."'");
  	}else {
  	 return  $this->db->query("SELECT * FROM `service_add_ons` where `add_on_id` = '0'");	
  	}
  }
  
  function getservice_add_onsByAttributeWithLimit($key,$value,$start,$limit,$order_by_cond = NULL){
	if ($key != ''){
	  	if($order_by_cond == NULL){
			return  $this->db->query("SELECT * FROM `service_add_ons` WHERE `$key` = '".$value."' LIMIT $start,$limit ");
		}else{
			return $this->db->query("SELECT * FROM `service_add_ons` WHERE `$key` = '".$value."' ORDER BY $order_by_cond LIMIT $start,$limit ");
		}
	}else {
		  return $this->db->query("SELECT * FROM `service_add_ons` WHERE add_on_id = '0' ORDER BY $order_by_cond LIMIT $start,$limit ");
	}
  }
  
  
  function delete($add_on_id){
	
  	return $this->db->delete('service_add_ons', array('add_on_id' => $add_on_id)); 
  }
  
     
  function getall(){
  	 return  $this->db->query("SELECT * FROM `service_add_ons`");
  }
  
  function update($id,$data){
     $query = $this->db->query("Select * from `service_add_ons` where add_on_id = '$id'"); 
	 if ($query->num_rows() > 0){
	     $this->db->where('add_on_id', $id);
		 $this->db->update('service_add_ons', $data);
		 return $id;
	 } else {
	 	$this->db->insert('service_add_ons', $data);
	 	return $this->db->insert_id();
	 }
   }
   
}
?>
