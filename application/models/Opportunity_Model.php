<?php if ( ! defined('BASEPATH')) exit('Hahaha No direct script access allowed');

class Opportunity_Model extends CI_Model
{
    public function __construct(){
          // Call the Model constructors
          parent::__construct();
     }
   
     
   
       

    public function SaveOpportunityData($data){

      $this->db->insert('opportunities', $data);
      $insert_id = $this->db->insert_id();

      if($insert_id>=0){ 
        return $insert_id;
      }else{
        return false;
      }

    }

    public function GetOpportunityCalendar(){
         
      $this->db->select('
        employers.loginid,
        employers.FirstName,
        employers.LastName,
        opportunities.from,
        opportunities.to,
        opportunities.shift
      ');
      $this->db->join('employers','employers.loginid = opportunities.employer_id');

      $query=$this->db->get('opportunities');

      if($query->num_rows() > 0){
        
        return $query->result();
      }else{

        return false;
      }
      
    }
        
    public function SaveBookingData($data){

      $this->db->insert('employeeblocking', $data);
      $insert_id = $this->db->insert_id();

      if($insert_id>=0){ 
        return $insert_id;
      }else{
        return false;
      }
    }

    public function UpdateUser($data,$id){
         
      $this->db->where('id', $id);
      $this->db->update('login', $data);
      return true;
      
    }
   
    public function delete($id)
     { 

              $this->db->where('id', $id);
              $this->db->delete('login');
              return true;
      
     }
}?>