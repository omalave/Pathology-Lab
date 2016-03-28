<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

  public function __construct() {

    parent::__construct();
    
  }

 function login($username, $password) {

   $this->db->select('id, username, password');
   $this->db->from('users');
   $this->db->where('username', $username);
   $this->db->where('password', sha1($password));
   $this->db->limit(1);
 
   $query = $this->db->get();
 
   if($query -> num_rows() == 1) {

     return $query->result();
   }
   else {

     return false;
   }

 }



}

/* End of file User.php */
/* Location: ./application/models/User.php */