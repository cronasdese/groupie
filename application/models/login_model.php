<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate(){
        // grab user input
        $ID = $this->input->post('ID');
        $password = $this->input->post('password');
        //$ID = $this->security->xss_clean($this->input->post('ID'));
        //$password = $this->security->xss_clean($this->input->post('password'));
        
        // Prep the query
        $this->db->where('ID', $ID);
        $this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('accounts');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'ID' => $row->ID,
                    'user_type' => $row->user_type,
                    'full_name' => $row->full_name,
                    'contact_number' => $row->contact_number,
                    'email_address' => $row->email_address,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>