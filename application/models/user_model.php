<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{
    public function create_user($username,$sex,$age,$telephone,$address,$entertime) {
        $this->db->insert("heat_user",array(
            'user_name'=>$username,
            'user_sex'=>$sex,
            'user_age'=>$age,
            'user_telephone'=>$telephone,
            'user_address'=>$address,
            'user_entertime'=>$entertime,
        ));
        return $this->db->affected_rows();
    }

    public function update_user($username,$sex,$age,$telephone,$address) {
        $this->db->set("user_sex",$sex);
        $this->db->set("user_age",$age);
        $this->db->set("user_telephone",$telephone);
        $this->db->set("user_address",$address);
        $this->db->where("user_name",$username);
        $this->db->update("heat_user");
        return $this->db->affected_rows();
    }
    public function find_user_information($user_name) {
        if($user_name== '') {
            $sql = "select u.*,b.balance_money,b.balance_state,b.balance_style from heat_user u ,heat_balance b where u.user_id=b.user_id";//查所有
            return $this->db->query($sql)->result();

        } else {
            $sql = "select u.*,b.balance_money,b.balance_state,b.balance_style from heat_user u ,heat_balance b where u.user_id=b.user_id and u.user_name='$user_name'";//查模糊匹配
            return $this->db->query($sql)->result();
        }
    }

    public function find_user_id($username) {
        $sql = "select * from heat_user where user_name='$username'";//查模糊匹配
        return $this->db->query($sql)->row();
    }

}