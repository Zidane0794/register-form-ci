
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

public function register($data)
{
    return $this->db->insert('users', $data);
    
}    

}

/* End of file M_auth.php */
