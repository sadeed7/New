<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
// //we need to call PHP's session object to access it through CI
class Opportunity extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('Opportunity_Model');
  }

  
  function index(){
    $session_data = $this->session->userdata('logged_in');
    $data['id'] = $session_data['id'];
    $data['Email'] = $session_data['Email'];
    $data['opportunities'] = $this->Opportunity_Model->GetOpportunityCalendar();
    
    $this->load->view('OpportunityCalendar', $data);
  }
  
  

}
?>