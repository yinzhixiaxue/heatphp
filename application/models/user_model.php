<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{
    public function create_user($username,$sex,$age,$telephone,$count,$type,$entertime) {
        $this->db->insert("heat_user",array(
            'user_name'=>$username,
            'user_sex'=>$sex,
            'user_age'=>$age,
            'user_telephone'=>$telephone,
            'user_count'=>$count,
            'user_type'=>$type,
            'user_entertime'=>$entertime,
        ));
        return $this->db->affected_rows();
    }

    public function update_user($userId,$username,$sex,$age,$telephone,$count,$type,$entertime) {
        $this->db->set("user_name",$username);
        $this->db->set("user_sex",$sex);
        $this->db->set("user_age",$age);
        $this->db->set("user_telephone",$telephone); 
        $this->db->set("user_count",$count);
        $this->db->set("user_type",$type);
        $this->db->set("user_entertime",$entertime);
        $this->db->where("user_id",$userId);
        $this->db->update("heat_user");
        return $this->db->affected_rows();
    }

    public function find_user_information($query) {
        if($query) {
            $sql = "select * form heat_user,heat_balance"//查所有
        } else {
            $sql = "select * from heat_user u,heat_balance b where u.user_name like '%'.$query.'%'"//查模糊匹配
        }
        return $this->db->query($sql)->result();
    }


//     public function check_mylogin($studyId,$password) {
//         $sql="select * from society_user where society_studyId='$studyId' and society_password='$password'";
//         return $this->db->query($sql)->row();
//     }
//     public function get_username_by_studyId($studyId) {
//         $sql="select society_username from society_user where society_studyId='$studyId'";
//         return $this->db->query($sql)->row();
//     }
//     public function find_user_by_studyId($studyId) {
//         return $this->db->get_where('society_user',array(
//             'society_studyId'=>$studyId
//         ))->row();
//     }
//     public function save_user($username,$password,$studyId,$sex,$age,$email,$telephone){
//         $this->db->insert("society_user",array(
//             'society_username'=>$username,
//             'society_password'=>$password,
//             'society_studyId' =>$studyId,
//             'society_sex'=>$sex,
//             'society_age'=>$age,
//             'society_email' =>$email,
//             'society_telephone'=>$telephone,
//             'society_power'=>0,
//         ));
//         return $this->db->affected_rows();
//     }
//     public function get_by_name($username){
//         return $this->db->get_where('health_user',array(
//             'user_Name'=>$username
//         ))->row();
//     }
//     public function save($username,$password){
//         $this->db->insert("health_user",array(
//             'user_Name'=>$username,
//             'user_Pwd'=>$password,
//             'pict_Id' =>21
//         ));
//         return $this->db->affected_rows();
//     }
//     public function get_by_name_pwd($name, $pwd)
//     {
//         return $this->db->get_where('health_user', array(
//             'user_Name' => $name,
//             'user_Pwd' => $pwd
//         ))->row();
//     }
//     public function get_users(){
//         $sql="select u.user_Name,pi.pict_Url from health_user u,health_article a,health_picture pi where a.user_Id=u.user_Id and u.pict_Id=pi.pict_Id ORDER BY a.arti_Date DESC";
// //           $sql="select u.user_Name,pi.pict_Url from health_user u,health_picture pi where pi.pict_Id=u.pict_Id";
//         return $this->db->query($sql)->result();
//     }
//     public function user_by_article($arti_Id){
//         $sql="select pi.pict_Url,u.user_Name from health_article a,health_picture pi,health_user u where arti_Id='$arti_Id' and pi.pict_Id=u.pict_Id and u.user_Id=a.user_Id";
//         return $this->db->query($sql)->result();
//     }
//     public function get_headImg_by_pictId($pict_Id){
//         $sql = "select * from health_picture where pict_Id = $pict_Id";
//         return $this->db->query($sql)->row();
//     }
//     public function update_pictId_by_userId($user_Id, $pict_Id){
//         $this->db->set("pict_Id",$pict_Id);
//         $this->db->where("user_Id",$user_Id);
//         $this->db->update("health_user");
//         return $this->db->affected_rows();
//     }
}