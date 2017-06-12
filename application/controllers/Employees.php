<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Employees extends CI_Controller{

    public function __construct(){

        parent::__construct();
           
        if (!$this->session->userdata('logged_in')){
            redirect('Login_controller');
        }
        
        $this->load->Model('Employees_Model');
        $this->load->Model('Availability_model');
        
    }

    public function index(){
        $session_data = $this->session->userdata('logged_in');
        
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        
        $data['employeeinfo']=$this->Employees_Model->GetEmployeeData($data['id']);
        $data['employeeskills']=$this->Employees_Model->GetEmployeeSkill_docs($data['id']);
        $data['skill_documents']=$this->Employees_Model->GetSkill_Documents();
        
        //var_dump($data['employeeskills']);
        $this->load->view('Employees_View',$data);
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
                "SmartCardNumber"=>$this->input->post('snumber'),
                "Address"=>$this->input->post('address'),
                "Image"=>$filename,
                "WeekdayRate"=>$this->input->post('Weekday'),
                "WeekendRate"=>$this->input->post('Weekend'),
                "OvernightRate"=>$this->input->post('Overnight'),
                "NLHolidaysRate"=>$this->input->post('nlholidays'),
                "FullDayRate"=>$this->input->post('fullday'),
                "AccountName"=>$this->input->post('accountname'),
                "SortCode"=>$this->input->post('sortcode'),
                "AccountNumber"=>$this->input->post('accountnumber')
            );

            $result=$this->Employees_Model->SaveData($data,$id);
            $query=$this->Employees_Model->GetSkill_Documents();
            $skilldata=[];
            $Docsdata=[];
            $i=0;$x=0;

            foreach ($query as $key) {
           
                if($key->Type=="Skill"){
                    $skilldata[$i]=$key->Name;
                    $i++;
                }else if($key->Type=="Documents"){
                    $Docsdata[$x]=$key->Name;
                    $x++;
                }
        
            }
       
            for($i=0;$i<=count($skilldata)-1;$i++){
                if($this->input->post($skilldata[$i])){

                    $postdata=implode(',',$this->input->post($skilldata[$i]));
                    $data=array(
                        'Eid'=>$id,
                        'Type'=>'Skill',
                        'DataType'=>$skilldata[$i],
                        'Data'=>$postdata
                    );
                    $result=$this->Employees_Model->SaveSkillDocs($data);
                }
            }
            for($i=0;$i<=count($Docsdata)-1;$i++){
                if($this->input->post($Docsdata[$i])){
                    $postdata=implode(',',$this->input->post($Docsdata[$i]));
                    $data=array(
                        'Eid'=>$id,
                        'Type'=>'Documents',
                        'DataType'=>$Docsdata[$i],
                        'Data'=>$postdata
                    );
                    $result=$this->Employees_Model->SaveSkillDocs($data);
                }
            }
           
            if($result){
                $this->session->set_flashdata('Success','Profle Information Saved Successfully');
                redirect('Employees','refresh');
            }else{
                unlink($data['full_path']);
                $this->session->set_flashdata('Error','Couldn"t Save Profile Information');
                redirect('Employees');
            }
        }

    }

    public function Employee_AddAvailability(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        $this->load->view('Employee_AddAvailability',$data);
    }
    

    public function SaveAvailaibiltyData(){
        
        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];

        //Shift
        $shifts = $this->shift();
        if(!$shifts){
            $this->session->set_flashdata('Error','Shift Not Specified');
            redirect('Employees/Employee_AddAvailability');
            exit();
        }
        //Shift
        $statusCode = $this->checkAvailability($data['id'], $this->input->post('From'), $this->input->post('To'), $shifts);
        //Start Check If Availability Exist
        
        if($statusCode === 1){
            //Not Exist
           
            //Inserting
            $postdata=array(
                'Eid' => $data['id'],
                'FromDate' => $this->input->post('From'),
                'ToDate' => $this->input->post('To'),
                'Rate' => null,
                'shift' => $shifts
            );

            $insertid = $this->Availability_model->SaveAvailaibiltyData($postdata);

            if($insertid){
                $this->session->set_flashdata('Success','Availaibility Information Saved Successfully');
                redirect('Employees/Employee_AddAvailability','refresh');
            }else{

                $this->session->set_flashdata('Error','Couldn"t Save Availaibility Information');
                redirect('Employees/Employee_AddAvailability');
            }
        }else{
            print_r("Exist");
        }
        //End Check If Availability Exist

        
    }

    
    public function EmployeeCalendar(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $data['Calendar']=$this->Employees_Model->GetEmployeeCalendar($data['id']);
        //var_dump( $data['Calendar']);
        $this->load->view('EmployeeCalendar',$data);

    }
    
    public function Offers(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $data['offers']=$this->Employees_Model->GetOffers($data['id']);
        //  var_dump($data['offers']);
        $this->load->view('Offers',$data);

    }

    public function Offerstatus(){

        $session_data = $this->session->userdata('logged_in');
        $data['id'] = $session_data['id'];
        $data['Email'] = $session_data['Email'];
        $bookingid=$_GET['id'];
        $status=$_GET['status'];
        $dataa=array(
          'Status'=>$status
        );
        $updateid=$this->Employees_Model->UpdateOffer($bookingid,$dataa);
        if($updateid){
            $this->session->set_flashdata('Success','Offer Status Changed Successfully');
            redirect('Employees/Offers','refresh');
        }

    }

    //Checking Availability Of Employee 
    private function checkAvailability($id, $from, $to, $shifts){
        $shifts = explode(',', $shifts);
        $availability = $this->Availability_model->exists($id, $from);
        return 1;
        if(!$availability){
            //Not Exist
            return 1;
        }else{
            //Check If Shifts Over Write
            return 0;
        }
        /*//Already Exist
            $shift = explode(',', $availability->shift);
            $shifts = explode(',', $shifts);
            
            if(Count($shifts) > Count($shift)){
                print_r($shift);
                exit();
                //Update


            }else{
                print_r("ERROR");
                exit();
                $this->session->set_flashdata('Error','Availaibility Information For Date '.$this->input->post('From').' Already Exists');
                redirect('Employees/Employee_AddAvailability');
            }*/
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