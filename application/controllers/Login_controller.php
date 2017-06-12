<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login_controller extends CI_Controller
{

  public function __construct(){
        
    parent::__construct();      

    $this->load->model('Login_model');
  
  }

  public function index(){

    $this->load->view('Login_View');
     
  }
    
  public function SignUp(){

    $email=$this->input->post('email');
    
    $data=array(
      'Email'=>$this->input->post('email'),
      'Password'=>$this->input->post('password'),
      'Role'=>$this->input->post('role')
    );
     
    if($this->input->post('role')=="Employee"){
      $Table="employees";
    }
    if($this->input->post('role')=="Employer"){
      $Table="employers";
    }
     
    $result=$this->Login_model->SignUp($email,$data,$Table);

    if($result=='Duplicate'){
       echo json_encode("Duplicate");
    }else if($result>=0){
       echo json_encode("Success");
    }else{
       echo json_encode("Failed");
    }

  }

  public function EditEmail(){
    
    $Email=$this->input->post('email');
    $Password=$this->input->post('password');
    $session_data = $this->session->userdata('logged_in');
    $id = $session_data['id'];
    $S_email=$session_data['Email'];
    $status="Failed";

    if($Email){
            
      $data=array(
        'Email'=>$Email
        );
      $result=$this->Login_model->UpdateEmailPass($Email,$data,$id);
      $status="Success";        
       
    }

    if($Password){
            
      $data=array(
        'Password'=>$this->input->post('password')
      );
      $result=$this->Login_model->updatepassword($id,$data);

      if($result){

        $status="Success";
      }else{
        
        $status="Failed";
      }
    }

    echo json_encode($status);

  }

  //Login Function
  public function login(){
       
    if(isset($_POST['btn_login'])){

      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
 
     
      if($this->form_validation->run()==FALSE){
          $this->load->view('login');
      }else{
        
        $query=$this->Login_model->login_user();

        if ($query){

          $data=array(
            'id'=> $query->id,
            'Email'=>$query->Email,
            'Role'=>$query->Role
          );

          
          if($query->Role=="Employee"){
            $this->session->set_userdata('logged_in', $data);
            redirect('Employees');
            
          }else if($query->Role=="Employer"){
            $this->session->set_userdata('logged_in', $data);
            redirect('Employers');

          }else{
            $this->session->set_flashdata('Error','Wrong Username or Password');
            redirect('Login_controller','refresh');
          }

        }else{
          
          $this->session->set_flashdata('Error','Wrong Username or Password');
          redirect('Login_controller','refresh');
        }

      }

    }
    
  }

}
?>