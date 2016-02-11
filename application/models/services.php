<?php

class services extends CI_Model {
    
  
  function __construct() {
      parent::__construct();
      
   }
     
  public function CheckFieldExists($field,$value){
      $returnValue = false;
      if ($field !=''){
	      $query = $this->db->query("SELECT count(*) as count FROM `services` WHERE `$field` = '".$value."' ");
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
  
  public function GetservicesInfo($field1,$field2,$value){
      $v = "";
      if ($field2 !=''){
	      $query = $this->db->query("SELECT $field1 as val FROM `services` WHERE `$field2` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $v =  $row->val;
	         }
	     }
      }
    return $v;
  }
   
 
 
  public function GetservicesInfoById($field,$service_id){
     $returnValue = ""; 
     
     if ($field !=''){
	     $query = $this->db->query("SELECT `$field` as val from services where service_id='$service_id'");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $returnValue =  $row->val;
	         }
	       }
     }
      return $returnValue;
    }	
  
   
  function getservicesByAttribute($key,$value){
  	if ($key !=''){
  	 return  $this->db->query("SELECT * FROM `services` where `$key` = '".$value."'");
  	}else {
  	 return  $this->db->query("SELECT * FROM `services` where `service_id` = '0'");	
  	}
  }
  
  function getservicesByAttributeWithLimit($key,$value,$start,$limit,$order_by_cond = NULL){
	if ($key != ''){
	  	if($order_by_cond == NULL){
			return  $this->db->query("SELECT * FROM `services` WHERE `$key` = '".$value."' LIMIT $start,$limit ");
		}else{
			return $this->db->query("SELECT * FROM `services` WHERE `$key` = '".$value."' ORDER BY $order_by_cond LIMIT $start,$limit ");
		}
	}else {
		  return $this->db->query("SELECT * FROM `services` WHERE service_id = '0' ORDER BY $order_by_cond LIMIT $start,$limit ");
	}
  }
  
  
  function delete($service_id){
	
  	return $this->db->delete('services', array('service_id' => $service_id)); 
  }
  
     
  function update($id,$data){
     $query = $this->db->query("Select * from `services` where service_id = '$id'"); 
	 if ($query->num_rows() > 0){
	     $this->db->where('service_id', $id);
		 $this->db->update('services', $data);
		 return $id;
	 } else {
	 	$this->db->set('SignupDate', 'NOW()', FALSE);
	 	$this->db->insert('services', $data);
	 	return $this->db->insert_id();
	 }
   }
   
}
?>
