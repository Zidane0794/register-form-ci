
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('m_auth');

        $this->_salt ="abcde1234567,?}|+!*&^%$#@~890987654321abcde#@&!,?}|+!*&^%$#@~";
        
    }

    public function index()
    {
        
        $this->load->view('view_register');
        
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[5]|max_length[45]');
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
        $this->form_validation->set_rules('level', 'level', 'trim|required');

        if($this->form_validation->run() == FALSE) {

            echo "<script> alert('Register gagal') </script>";

            
            redirect('auth','refresh');
            

        } else {

            $data = array(
                'username' => $this->input->post('username'),
                'password' => sha1($this->_salt.$this->input->post('password')),
                'fullname' => $this->input->post('fullname'),
                'level' => $this->input->post('level')
            );

            if($this->m_auth->register($data) === TRUE)
            {
                echo "<script> alert('Selamat register berhasil') </script>";
                redirect('auth','refresh');

            } else {
                echo "<script> alert('Register gagal') </script>";
                redirect('auth','refresh');
            }

        }
    }

}

/* End of file Auth.php */
