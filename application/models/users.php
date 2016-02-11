<?php

class Users extends CI_Model {
  
  function __construct() {
      parent::__construct();
      
   }
     
  public function CheckFieldExists($field,$value){
      $returnValue = false;
      if ($field !=''){
	      $query = $this->db->query("SELECT count(*) as count FROM `users` WHERE `$field` = '".$value."' ");
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
  
  public function GetUserInfo($field1,$field2,$value){
      $v = "";
      if ($field2 !=''){
	      $query = $this->db->query("SELECT $field1 as val FROM `users` WHERE `$field2` = '".$value."' ");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $v =  $row->val;
	         }
	     }
      }
    return $v;
  }
   
 
 
  public function GetUserInfoById($field,$userid){
     $returnValue = ""; 
     
     if ($field !=''){
	     $query = $this->db->query("SELECT `$field` as val from users where userid='$userid'");
	      if ($query->num_rows() > 0){
	        foreach ($query->result() as $row)
	         {
	           $returnValue =  $row->val;
	         }
	       }
     }
      return $returnValue;
    }	
    
  public function UpdateUser($name,$password,$userid){
         $returnValue = ""; 
         if ($this->CheckFieldExists('userid',$userid)===TRUE){
           $sql = "Update users set name='$name',password='$password' where userid = $userid";
           $this->db->query($sql);
           $returnValue = "You successfully updated your settings.";  
         }else {
           $returnValue = "This member does not exist.";  
         } 
      return $returnValue;
   } 
   
  function getusersByAttribute($key,$value){
  	if ($key !=''){
  	 return  $this->db->query("SELECT * FROM `users` where `$key` = '".$value."'");
  	}else {
  	 return  $this->db->query("SELECT * FROM `users` where `userid` = '0'");	
  	}
  }
  
  function getusersByAttributeWithLimit($key,$value,$start,$limit,$order_by_cond = NULL){
	if ($key != ''){
	  	if($order_by_cond == NULL){
			return  $this->db->query("SELECT * FROM `users` WHERE `$key` = '".$value."' LIMIT $start,$limit ");
		}else{
			return $this->db->query("SELECT * FROM `users` WHERE `$key` = '".$value."' ORDER BY $order_by_cond LIMIT $start,$limit ");
		}
	}else {
		  return $this->db->query("SELECT * FROM `users` WHERE userid = '0' ORDER BY $order_by_cond LIMIT $start,$limit ");
	}
  }
  
  
  function delete($userid){
	
  	return $this->db->delete('users', array('userid' => $userid)); 
  }
  
     
  function update($id,$data){
     $query = $this->db->query("Select * from `users` where userid = '$id'"); 
	 if ($query->num_rows() > 0){
	     $this->db->where('userid', $id);
		 $this->db->update('users', $data);
		 return $id;
	 } else {
	 	$this->db->insert('users', $data);
	 	return $this->db->insert_id();
	 }
   }
   
}
?>
