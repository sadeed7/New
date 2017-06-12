<?php if ( ! defined('BASEPATH')) exit('Hahaha No direct script access allowed');

class Login_model extends CI_Model
{
    public function __construct()
     {
          // Call the Model constructors
          parent::__construct();
     }

  public  function login_user(){

      $this -> db -> select('*');
      $this -> db -> from('login');
      $this -> db -> where('Email',$this->input->post('email'));
      $this -> db -> where('password',$this->input->post('password'));

      $result=$this->db->get();
    //  $data = $result->result();

      if($result -> num_rows() == 1)
      {
          return $result->row();
      }
      else
      {
        return false;
      }
      
    }
  public function SignUp($email,$data,$Table){

    $this->db->select('Email');
    $this->db->from('login');
    $this->db->where('Email',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      return 'Duplicate';
    }
    else{

      $this->db->insert('login', $data);
      $insert_id = $this -> db -> insert_id();

      if($insert_id>=0){

        $data=array(
          'loginid'=>$insert_id
        );
        $this->db->insert($Table, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
      }else{
        return false;
      }

    }

  }
  

  public function UpdateEmailPass($Email,$data,$id){
      
    $this->db->where('id',$id);
    $this -> db -> update('login',$data);
    return true; 
       
  } 
     
  public function updatepassword($id,$data){
      
    $this->db->where('id',$id);
    $this -> db -> update('login',$data);
       return true; 
    }
     
}?>