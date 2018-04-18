<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Person_model extends CI_Model
{
    public function do_person_imperfect($user_Id, $username, $sex, $date, $height, $weight, $waist, $hipline, $telephone, $sign)
    {
        $this->db->insert('health_person', array(
            'user_Id' => $user_Id,
            'pers_Name' => $username,
            'pers_Sex' => $sex,
            'pers_Birthday' => $date,
            'pers_Height' => $height,
            'pers_Weight' => $weight,
            'pers_Waist' => $waist,
            'pers_Hipline' => $hipline,
            'pers_Telephone' => $telephone,
            'pers_Sign' => $sign
        ));

//        $sql="insert into health_person pe, health_picture pi, health_user u ";
        return $this->db->affected_rows();
    }

    public function find_person_by_userId($user_id)
    {
        $sql = "select * from health_person where user_Id='$user_id'";
        return $this->db->query($sql)->result();
    }

    public function update_person_imperfect($user_Id, $username, $sex, $date, $height, $weight, $waist, $hipline, $telephone, $sign)
    {
        $this->db->set("pers_Name",$username);
        $this->db->set("pers_Sex",$sex);
        $this->db->set("pers_Birthday",$date);
        $this->db->set("pers_Height",$height);
        $this->db->set("pers_Weight",$weight);
        $this->db->set("pers_Waist",$waist);
        $this->db->set("pers_Hipline",$hipline);
        $this->db->set("pers_Telephone",$telephone);
        $this->db->set("pers_Sign",$sign);
        $this->db->where("user_Id",$user_Id);
        $this->db->update("health_person");
        return $this->db->affected_rows();

    }
    public function find_personSex_by_UserId($user_Id){
        $sql="select pers_Sex from health_person where user_Id='$user_Id'";
        return $this->db->query($sql)->row();
    }
    public function get_info_by_userId($user_Id){
        $sql = "select * from health_person pe,health_picture pi,health_user u where u.pict_Id = pi.pict_Id and pe.user_Id = u.user_Id and u.user_Id = $user_Id";
        return $this->db->query($sql)->row();
    }
}