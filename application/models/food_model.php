<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Food_model extends CI_Model{
       public function select_foods_by_week($week){
           $sql="select * from health_food where food_Id='$week'";
           return $this->db->query($sql)->row();
       }
}