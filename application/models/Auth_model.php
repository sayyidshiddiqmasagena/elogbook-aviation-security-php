<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Auth_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  function login_user($username,$password)
	{
    // 'password' => md5($password);
    $query = $this->db->get_where('users',array('username'=>$username, 'password' => $password));
    if($query->num_rows() > 0)
    {
          $data_user = $query->row();
          $this->session->set_userdata('usernameq',$username);
          $this->session->set_userdata('namaq',$data_user->nama);
          $this->session->set_userdata('iduserq',$data_user->id_users);
          $this->session->set_userdata('roleq',$data_user->role);
          $this->session->set_userdata('nipq',$data_user->nip);
          $this->session->set_userdata('islogin',TRUE);
          return TRUE;
    }
    else
    {
        return FALSE;
    }
	}
	
  function cek_login()
  {
    if(empty($this->session->userdata('islogin')))
    {
    redirect('login');
    }
  }

  // ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */