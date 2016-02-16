<?php

class Musiciandata extends CI_Model {
   
  
  function __construct() {
      parent::__construct();
      
   }
     
  public function CheckFieldExists($field,$value){
      $returnValue = false;
      if ($field !=''){
	      $query = $this->db->query("SELECT count(*) as count FROM `musicians` WHERE `$field` = '".$value."' ");
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
  
  public function GetInfo($field1,$field2,$value){
      $v = "";
      if ($field2 !=''){
	      $query = $this->db->query("SELECT $field1 as val FROM `musicians` WHERE `$field2` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $v =  $row->val;
	         }
	     }
      }
    return $v;
  }
   
 
 
  public function GetInfoById($field,$id){
     $returnValue = ""; 
     
     if ($field !=''){
	     $query = $this->db->query("SELECT `$field` as val from musicians where m_id='$id'");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $returnValue =  $row->val;
	         }
	       }
     }
      return $returnValue;
    }	
    
  
   
  function getByAttribute($key,$value){
  	if ($key !=''){
  	 return  $this->db->query("SELECT * FROM `musicians` where `$key` = '".$value."'");
  	}else {
  	 return  $this->db->query("SELECT * FROM `musicians` where `m_id` = '0'");	
  	}
  }
  
  function getByAttributeWithLimit($key,$value,$start,$limit,$order_by_cond = NULL){
	if ($key != ''){
	  	if($order_by_cond == NULL){
			return  $this->db->query("SELECT * FROM `musicians` WHERE `$key` = '".$value."' LIMIT $start,$limit ");
		}else{
			return $this->db->query("SELECT * FROM `musicians` WHERE `$key` = '".$value."' ORDER BY $order_by_cond LIMIT $start,$limit ");
		}
	}else {
		  return $this->db->query("SELECT * FROM `musicians` WHERE m_id = '0' ORDER BY $order_by_cond LIMIT $start,$limit ");
	}
  }
  
 function getAll(){
  	 return  $this->db->query("SELECT * FROM `musicians` order by m_name");	
  }
  
  function delete($id){
	return $this->db->delete('musicians', array('m_id' => $id)); 
  }
  
     
  function update($id,$data){
     $query = $this->db->query("Select * from `musicians` where m_id = '$id'"); 
	 if ($query->num_rows() > 0){
	     $this->db->where('m_id', $id);
		 $this->db->update('musicians', $data);
		 return $id;
	 } else {
	 	$this->db->insert('musicians', $data);
	 	return $this->db->insert_id();
	 }
   }
   
}
?>
