<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_model extends CI_Model{
    public function check_login($username,$password) {
        $sql="select * from heat_admin where admin_username='$username' and admin_password='$password'";
        return $this->db->query($sql)->row();
    }
}