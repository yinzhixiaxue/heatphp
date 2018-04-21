<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Balance_model extends CI_Model{
    public function create_balance($user_id,$balance_money,$balance_state,$balance_style) {
        $this->db->insert("heat_balance",array(
            'user_id'=>$user_id,
            'balance_money'=>$balance_money,
            'balance_state'=>$balance_state,
            'balance_style'=>$balance_style
        ));
        return $this->db->affected_rows();
    }

}