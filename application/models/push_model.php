<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Push_model extends CI_Model{
    public function push_messages(){
        $sql="select push_Id,push_Title,push_Content,menu_Title,pict_Url from health_push pu,health_menu m,health_picture pi where m.menu_Id=pu.menu_Id and pu.pict_Id=pi.pict_Id";
        return $this->db->query($sql)->result();
    }
    public function push_content($push_Id){
        $sql="select pu.push_Title,pu.push_Time,pu.push_Content,pi.pict_Url from health_picture pi,health_push pu where pi.pict_Id=pu.pict_Id and pu.push_id=$push_Id";
        return $this->db->query($sql)->result();
    }

}