<?php if ( ! defined('BASEPATH')) exit('Hahaha No direct script access allowed');

class Employees_Model extends CI_Model
{
    public function __construct()
     {
          // Call the Model constructors
          parent::__construct();
     }
   
    public function GetEmployeeData($id){
      $this->db->select('*');
      $this->db->from('employees');
      $this->db->where('loginid',$id);
        
      $result = $this->db->get();
      if($result->num_rows() ==1){
        return $result->row();
      }else{
        return false;
      }
      
    }

    public function GetEmployeeSkill_docs($id){

      $this->db->select('*');
      $this->db->from('employees_skill_docs');
      $this->db->where('Eid',$id);
        
      $result = $this->db->get();
      if($result->num_rows() > 0){
        return $result->result();
      }else{
        return false;
      }
      
    }

    public function SaveData($data,$id){
         
      $this->db->where('loginid', $id);
      $this->db->update('employees', $data);
      return true;
      
    }
       
    public function GetSkill_Documents(){

      $this->db->select('*');
      $this->db->from('skills_documents');
      $query=$this->db->get();

      if($query->num_rows() >0){
        return $query->result();
      }else{
        return false;
      }

    }

    public function SaveSkillDocs($data){

      $this->db->insert('employees_skill_docs', $data);
      $insert_id = $this -> db -> insert_id();
      if($insert_id>=0){ 
        return $insert_id;
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


    //Function For Availability
    public function GetEmployeeCalendar($id){
         
      $this->db->select('employees.FirstName,employees.LastName,
            employeeavailaibility.FromDate,
            employeeavailaibility.ToDate,
            employeeavailaibility.Rate,
            employeeavailaibility.shift
        ');
      $this->db->from('employees');
      $this->db->join('employeeavailaibility','employees.loginid = employeeavailaibility.Eid');
      $this->db->where('employeeavailaibility.Eid', $id);
      $query=$this->db->get();

      if($query->num_rows() >0){
        return $query->result();
      }else{
        return false;
      }
      
    }

    public function GetOffers($id){
         
       $this->db->select('employers.FirstName,employers.LastName,
                          login.Email,
                          employeeblocking.id,
                          employeeblocking.FromDate,
                          employeeblocking.ToDate,
                          employeeblocking.Status 
                       ');

       $this->db->from('employees');
       $this->db->join('employeeblocking','employees.loginid = employeeblocking.EmployeeID');
       $this->db->join('employers','employeeblocking.EmployerID = employers.loginid');
       $this->db->join('login','employeeblocking.EmployerID = login.id');
       $this->db->where('employees.loginid', $id);
       $query=$this->db->get();

      if($query->num_rows() >0)
      {
        return $query->result();
      }
      else          
       {
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