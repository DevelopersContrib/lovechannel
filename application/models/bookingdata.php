<?php

class Bookingdata extends CI_Model {
   
  
  function __construct() {
      parent::__construct();
      
   }
     
  public function CheckFieldExists($field,$value){
      $returnValue = false;
      if ($field !=''){
	      $query = $this->db->query("SELECT count(*) as count FROM `booking` WHERE `$field` = '".$value."' ");
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
  
  public function GetBookingInfo($field1,$field2,$value){
      $v = "";
      if ($field2 !=''){
	      $query = $this->db->query("SELECT $field1 as val FROM `booking` WHERE `$field2` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $v =  $row->val;
	         }
	     }
      }
    return $v;
  }
   
 
 
  public function GetBookingInfoById($field,$booking_id){
     $returnValue = ""; 
     
     if ($field !=''){
	     $query = $this->db->query("SELECT `$field` as val from booking where booking_id='$booking_id'");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $returnValue =  $row->val;
	         }
	       }
     }
      return $returnValue;
    }	
    
  
   
  function getBookingByAttribute($key,$value){
  	if ($key !=''){
  	 return  $this->db->query("SELECT * FROM `booking` where `$key` = '".$value."'");
  	}else {
  	 return  $this->db->query("SELECT * FROM `booking` where `booking_id` = '0'");	
  	}
  }
  
  function getBookingByAttributeWithLimit($key,$value,$start,$limit,$order_by_cond = NULL){
	if ($key != ''){
	  	if($order_by_cond == NULL){
			return  $this->db->query("SELECT * FROM `booking` WHERE `$key` = '".$value."' LIMIT $start,$limit ");
		}else{
			return $this->db->query("SELECT * FROM `booking` WHERE `$key` = '".$value."' ORDER BY $order_by_cond LIMIT $start,$limit ");
		}
	}else {
		  return $this->db->query("SELECT * FROM `booking` WHERE booking_id = '0' ORDER BY $order_by_cond LIMIT $start,$limit ");
	}
  }
  
  
  function delete($booking_id){
	
  	return $this->db->delete('booking', array('booking_id' => $booking_id)); 
  }
  
     
  function update($id,$data){
     $query = $this->db->query("Select * from `booking` where booking_id = '$id'"); 
	 if ($query->num_rows() > 0){
	     $this->db->where('booking_id', $id);
		 $this->db->update('booking', $data);
		 return $id;
	 } else {
	 	$this->db->insert('booking', $data);
	 	return $this->db->insert_id();
	 }
   }
   
}
?>
