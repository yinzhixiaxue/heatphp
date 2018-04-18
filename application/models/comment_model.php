<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment_model extends CI_Model{
    public function forum_content_comments($user_Id,$arti_Id,$comm_Content,$comm_Date){
        $sql="insert into health_comment(user_Id,arti_Id,comm_Content,comm_Date) values ('$user_Id','$arti_Id','$comm_Content','$comm_Date')";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }
    public function find_comments_by_artiId($arti_Id){
        $sql="select u.user_Name,pi.pict_Url,c.comm_Content,c.comm_Date from health_article a,health_picture pi,
health_comment c,health_user u where a.arti_Id='$arti_Id' and a.arti_Id=c.arti_Id and c.user_Id=u.user_Id and u.pict_Id=pi.pict_Id ORDER BY comm_Date ASC";
        return $this->db->query($sql)->result();
    }
    public function find_comments_by_artiId_now($arti_Id){
        $sql="select u.user_Name,pi.pict_Url,c.comm_Content,c.comm_Date from health_article a,health_picture pi,
health_comment c,health_user u where a.arti_Id='$arti_Id' and a.arti_Id=c.arti_Id and c.user_Id=u.user_Id and u.pict_Id=pi.pict_Id ORDER BY comm_Date DESC limit 1";
        return $this->db->query($sql)->row();
    }
}