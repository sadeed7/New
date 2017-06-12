<?php if ( ! defined('BASEPATH')) exit('Hahaha No direct script access allowed');

class Employers_Model extends CI_Model
{
    public function __construct()
     {
          // Call the Model constructors
          parent::__construct();
     }
   
    public function GetEmployerData($id)
     {
         $this->db->select('*');
         $this->db->from('employers');
         $this->db->where('loginid',$id);
        
         $result = $this->db->get();
         if($result->num_rows() ==1)
         {
         return $result->row();
         }
         else 
         {
           return false;
         }
      
     }
     
   public function SaveData($data,$id)
     {
         
         $this->db->where('loginid', $id);
         $this->db->update('employers', $data);
         return true;
      
     }
       public function GetSkill_Documents()
     {
      $this->db->select('*');
      $this->db->from('Skills_Documents');
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
     public function SaveSkillDocs($data)
     {
      $this->db->insert('Employees_Skill_Docs', $data);
      $insert_id = $this -> db -> insert_id();
      if($insert_id>=0)
        { 
           return $insert_id;
        }
        else
        {
          return false;
        }

     }
      public function SaveAvailaibiltyData($data)
    {
       $this->db->insert('EmployeeAvailaibility', $data);
       $insert_id = $this->db->insert_id();

       if($insert_id>=0)
        { 
           return $insert_id;
        }
        else
        {
          return false;
        }
    }
     public function GetEmployeeCalendar()
     {
         
       $this->db->select('employees.loginid,employees.FirstName,employees.LastName,
                          employeeavailaibility.FromDate,
                          employeeavailaibility.ToDate,
                          employeeavailaibility.Rate
                       ');
       $this->db->from('employees');
       $this->db->join('employeeavailaibility','employees.loginid = employeeavailaibility.Eid');

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
        public function SaveBookingData($data)
    {
       $this->db->insert('employeeblocking', $data);
       $insert_id = $this->db->insert_id();

       if($insert_id>=0)
        { 
           return $insert_id;
        }
        else
        {
          return false;
        }
    }
     public function UpdateUser($data,$id)
     {
         
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