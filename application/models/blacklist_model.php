<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Blacklist_model extends CI_Model{
    public function find_blacklist()
    {

        $sql = "select u.*,b.balance_id,b.balance_money,b.balance_state,b.balance_style,b.balance_time from heat_user u,heat_balance b where u.user_id=b.user_id and b.balance_money<0 and b.balance_time < date_sub(now(), INTERVAL 1 YEAR)";//查所有
        return $this->db->query($sql)->result();

    }

}
