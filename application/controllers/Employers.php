<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Employers extends CI_Controller
{

    public function __construct(){

        parent::__construct();
           
        if (!$this->session->userdata('logged_in')){
        
            redirect('Login_controller');
        }
        
        $this->load->Model('Employers_Model');
        $this->load->Model('Employees_Model');
        $this->load->Model('Opportunity_Model');
     
    }

    public function index(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $data['employeeinfo']=$this->Employers_Model->GetEmployerData($data['id']);
        $this->load->view('Employer_View',$data);

    }

    public function SaveData(){

        $session_data = $this->session->userdata('logged_in');
        $id = $session_data['id'];       
  
        $file_element_name = 'image';
        $filename;

        $config['upload_path'] = './assets/uploads';
        $config['allowed_types'] = 'gif|jpg|png|doc|txt';
        $config['max_size'] = 1024 * 8;
        $config['encrypt_name'] = TRUE;
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload($file_element_name)){
            echo $this->upload->display_errors(); 
        }else{

            $data = $this->upload->data();
            $filename=$data['file_name'];
            $session_data = $this->session->userdata('logged_in');
            $id = $session_data['id'];
            $result;
            $data=array(
                "FirstName"=>$this->input->post('fname'),
                "LastName"=>$this->input->post('lname'),
                "Gender"=>$this->input->post('gender'),
                "DOB"=>$this->input->post('dob'),
                "ContactNumber"=>$this->input->post('cnumber'),
                "Address"=>$this->input->post('address'),
                "Image"=>$filename,
            );

            $result=$this->Employers_Model->SaveData($data,$id);
       
            if($result){
                $this->session->set_flashdata('Success','Profle Information Saved Successfully');
                redirect('Employers','refresh');
            }else{
                unlink($data['full_path']);
                $this->session->set_flashdata('Error','Couldn"t Save Profile Information');
                redirect('Employers');
            }
        }

    }

    public function AddOpportunity(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        $this->load->view('Employer_AddOpportunity',$data);

    }

    public function SaveOpportunityData(){
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        //Shift
        $shifts = $this->shift();
        if(!$shifts){
            $this->session->set_flashdata('Error','Shift Not Specified');
            redirect('Employers/AddOpportunity');
            exit();
        }
        //Shift
        
        $postdata = array(
            'employer_id' => $data['id'],
            'from' => $this->input->post('From'),
            'to' => $this->input->post('To'),
            'shift' => $shifts,
            'date' => date('m/d/Y'),
            'time' => date('h:i A')
        );

        $insertid = $this->Opportunity_Model->SaveOpportunityData($postdata);

        if($insertid){

            $this->session->set_flashdata('Success','Opportunity Information Saved Successfully');
            redirect('Employers/AddOpportunity','refresh');

        }else{

            $this->session->set_flashdata('Error','Couldn"t Save Opportunity Information');
            redirect('Employers/AddOpportunity');

        }

    }

    public function EmployerCalendar(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $data['Calendar']=$this->Employers_Model->GetEmployeeCalendar();
        $this->load->view('EmployerCalendar',$data);

    }
    
    public function EmployeeProfile(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $data['eid']=$this->uri->segment(3);
        $data['employeeinfo']=$this->Employees_Model->GetEmployeeData($data['eid']);
        $data['employeeskills']=$this->Employees_Model->GetEmployeeSkill_docs($data['eid']);
        $this->load->view('EmployeeProfile',$data);
      
    }

    public function saveemployeebooking(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        $data=array(
            "EmployeeID"=>$this->input->post('eid'),
            "EmployerID"=> $data['id'],
            "FromDate"=>$this->input->post('From'),
            "ToDate"=>$this->input->post('To'),
            "Status"=>"Offered"
        );

        $result=$this->Employers_Model->SaveBookingData($data);
       
        if($result){
            $this->session->set_flashdata('Success','An Offer Has Been Successfully Sent');
            redirect('Employers/EmployerCalendar','refresh');
        }else{
            unlink($data['full_path']);
            $this->session->set_flashdata('Error','Error Sending Offer To Employee');
            redirect('Employers/EmployerCalendar');
        }
    }



    public function Schedule(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        $this->load->view('EmployerSchedule',$data);
    }

    private function shift(){
        $am = $this->input->post('am');
        $pm = $this->input->post('pm');
        $night = $this->input->post('night');

        $shifts;
        $i = 0;
        if(isset($am) && $am){
            $shifts[$i] = 'am';
            $i++;
        }
        if(isset($pm) && $pm){
            $shifts[$i] = 'pm';
            $i++;
        }
        if(isset($night) && $night){
            $shifts[$i] = 'night';
            $i++;
        }

        if(count($shifts) < 1){
            return false;
        }else{
            return implode(',',$shifts);
        }

    }

}
?>