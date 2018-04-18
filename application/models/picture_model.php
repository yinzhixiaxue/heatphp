<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Picture_model extends CI_Model{
    public function Carousel(){
        $sql="select pict_Url,pict_Introduce from health_picture WHERE pict_Local='Carousel'";
        return $this->db->query($sql)->result();
    }
    public function find_pictUrl_by_userId($user_Id){
        $sql="select pi.pict_Url from health_picture pi,health_user u where pi.pict_Id=u.pict_Id and user_Id='$user_Id'";
        return $this->db->query($sql)->row();
    }
    public function get_img_by_sex($str){
        $sql="select * from health_picture where pict_Local = '$str'";
        return $this->db->query($sql)->row();
    }
}