<?php if ( ! defined('BASEPATH')) exit('Hahaha No direct script access allowed');

class Availability_Model extends CI_Model
{
    public function __construct(){
      // Call the Model constructors
      parent::__construct();
    }
   
    public function exists($id,$from){
      $this->db->select('*');
      $this->db->from('employeeavailaibility');
      $this->db->where('Eid',$id);
      $this->db->where('FromDate',$from);
        
      $result = $this->db->get();
      if($result->num_rows() == 1){
        return $result->row();
      }else{
        return false;
      }
      
    }
 
    public function SaveAvailaibiltyData($data){

      $this->db->insert('employeeavailaibility', $data);
      $insert_id = $this->db->insert_id();

      if($insert_id>=0){ 
        return $insert_id;
      }else{
        return false;
      }

    }


    
     public function UpdateOffer($id,$data)
     {
         
          $this->db->where('id', $id);
          $this->db->update('employeeblocking', $data);
          return true;
      
     }
   
    public function delete($id)
     { 

              $this->db->where('id', $id);
              $this->db->delete('employeeblocking');
              return true;
      
     }
}?>